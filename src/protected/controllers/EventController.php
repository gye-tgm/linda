<?php

class EventController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index', 'create','update', 'delete', 'organized', 'invited', 'invite', 'accept', 'fix'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Event;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			// We assign the host id of the current user to this event.
			$model->hostid = Yii::app()->user->getId();	
			$model->attributes=$_POST['Event'];
			

			// If a problem happens at here, then we will rerender the form 
			// for the next render.
			if($model->save()){
				foreach($_POST['appointments'] as $value){
					if(!empty($value)){
						$time = strtotime($value);
						$appointment = new Appointment;
						$appointment->eventid=$model->id;
						$appointment->time=date('Y-m-d H:i:s', $time);
						$appointment->save();
						}
					}
				$this->redirect(array('view','id'=>$model->id));
				}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	/**
	 * Shows the organized events of the current logged in user.
	 */
	public function actionOrganized()
	{
		$userid = Yii::app()->user->getId(); 
		$events = Event::model()->findAllByAttributes(array('hostid' => $userid)); 
		$dataProvider = new CActiveDataProvider('Event');
		$dataProvider->setData($events);
		$this->render('organized', array(
			'dataProvider' => $dataProvider
			));
	}

	/**
	 * Shows the form for accepting (actually rejecting should be possible)
	 * an event, which the user been invited to.
	 * @param integer $id the id of th event.
	 */
	public function actionAccept($id)
	{
		// TODO: check if authenticated (got invited to this event)
		$userid = Yii::app()->user->getId(); 
		$event = Event::model()->findByPk($id); 

		if(isset($_POST['appointments'])){
			// todo: very inefficient!!! need a better solution
			AppointmentArrangement::model()->deleteAll('eventid=:eventid AND userid=:userid', array(':eventid'=>$id, ':userid'=>$userid));
			foreach($_POST['appointments'] as $aid){ // these are the appointments, the user has checked
				$aa = new AppointmentArrangement;
				$aa->eventid = $id;
				$aa->userid = $userid;
				$aa->terminid = $aid;
				$aa->save();
			}

			UserEvent::model()->deleteAll('eventid=:eventid AND userid=:userid', array(':eventid'=>$id, ':userid'=>$userid));
			$ue = new UserEvent;
			$ue->userid = $userid;
			$ue->eventid = $id;
			$ue->signedup = 1;
			$ue->save();

			$this->redirect(array('view', 'id'=>$id));
		}

		$this->render('accept', array(
					'model' => $event,
					));
	}


	/**
	 * Shows the formula for fixing the appointments as an organizer.
	 * @param integer $id the id of the event
	 */
	public function actionFix($id){
		// todo: check if authenticated (if he owns the event)
		$model = Event::model()->findByPk($id);
		$this->render('fix', array(
						'model' => $model,
						)
					);
	}


	/**
	 * Shows a form for the user invitations.
	 * @param integer $id the id of the event.
	 */
	public function actionInvite($id)
	{
		// todo: check access rights
		$usermodel = new User;
		
		if(isset($_POST['User']))
		{
			$username = $_POST['User']['username'];
			// Username is unique
			$user = User::model()->findByAttributes(array('username'=>$username));
			// First check if there is already an invitation
			if(!UserEvent::createInvitation($user->id, $id)){
				// var_dump($user);
				$usermodel->addError('original_asset_number', 'The user can not be invited twice');
			} else {
				NotificationUser::createNotificationForUser(Notification::EVENT_INVITATION, $id, $user->id);
			}
		}
		
		$model = Event::model()->findByPk($id);	
		$dataProvider = new CActiveDataProvider('User');
		$dataProvider->setData($model->users);	
		$this->render('invite', array(
			'dataProvider' => $dataProvider,
			'model' => $model,
			'usermodel' => $usermodel,
			));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		Yii::app()->user->returnUrl=array('/event/view&id='.$id);
		
		
		$newcom=new Comment;
		if(isset($_POST['yt0'])){
			echo 'Test';
		}
		if(isset($_POST['Comment'])){
			$newcom->userid = Yii::app()->user->getId();
			$newcom->eventid = $id;
			$newcom->time=date('Y-m-d');
			$newcom->text=$_POST['Comment']['text'];
			$newcom->save();
		}
		
		$comment=Comment::model()->findAllByAttributes(array('eventid'=>$id));
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'comment'=>$comment,
			'newcom'=>$newcom,
		));
	}

	/**
	 * Shows the invitations of the currently logged in user.
	 */
	public function actionInvited()
	{
		$id = Yii::app()->user->getId(); 
		$user=User::model()->findByPk($id);
		$dataProvider=new CActiveDataProvider('UserEvent');
		$dataProvider->setData($user->events);
	
		$this->render('invited',array(
					'dataProvider'=>$dataProvider,
					));
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			// todo: this is so holy inefficient, get rid of this piece of bread	
			Appointment::model()->deleteAll('eventid=:eventid', array(':eventid'=>$id));
			foreach($_POST['appointments'] as $value){
				if(!empty($value)){
					$time = strtotime($value);
					$appointment = new Appointment;
					$appointment->eventid=$id;
					$appointment->time=date('Y-m-d H:i:s', $time);
					$appointment->save();
				}
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Shows the index page and telling the user about the navigation.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Event');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Event('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Event']))
			$model->attributes=$_GET['Event'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Event::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
