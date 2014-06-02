<?php

/**
 * This is the model class for table "User_Event".
 *
 * The followings are the available columns in table 'User_Event':
 * @property integer $userid
 * @property integer $eventid
 * @property integer $signedup
 */
class UserEvent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'User_Event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, eventid', 'required'),
			array('userid, eventid, signedup', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userid, eventid, signedup', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userid' => 'Userid',
			'eventid' => 'Eventid',
			'signedup' => 'Signedup',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userid',$this->userid);
		$criteria->compare('eventid',$this->eventid);
		$criteria->compare('signedup',$this->signedup);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserEvent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * Creates an invitation for a given user to a specific event. This means
	 * there will be a new entry of UserEvent in the database. This function
	 * returns false if there exists already an invitation of this type.
	 * The user also gets notified, if setted in the parameter.
	 * 
	 * @param Integer $userid the id of the user
	 * @param Integer $eventid the id of the event
	 * @param Boolean $notify if the user gets notified
	 * @return Boolean if the creation was successful 
	 */ 
	public static function createInvitation($userid, $eventid, $notify = true)
	{
		// Find one in the table.
		$invitation = self::model()->findByPk(array("userid" => $userid, "eventid" => $eventid));
		if($invitation !== null){ // this already exists in the database.
			return false;
		}
		$invitation = new UserEvent;
		$invitation->userid = $userid;
		$invitation->eventid = $eventid;
		$invitation->signedup = 0;
		if(!$invitation->save()){
			// the errors can be called via the getError() method.
			return false;
		}
		NotificationUser::createNotification();
		return true;
	}
}
