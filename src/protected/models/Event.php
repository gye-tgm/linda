<?php

/**
 * This is the model class for table "Event".
 *
 * The followings are the available columns in table 'Event':
 * @property integer $id
 * @property string $name
 * @property integer $eventtype
 * @property string $location
 * @property string $description
 * @property integer $hostid
 *
 * The followings are the available model relations:
 * @property Appointment[] $appointments
 * @property AppointmentArrangement[] $appointmentArrangements
 * @property Comment[] $comments
 * @property User $host
 * @property Notification[] $notifications
 * @property User[] $users
 */
class Event extends CActiveRecord
{
	const STANDARD = 0;
	const ONETOONE = 1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, eventtype, hostid', 'required'),
			array('eventtype, hostid', 'numerical', 'integerOnly'=>true),
			array('name, location', 'length', 'max'=>255),
			array('description', 'length', 'max'=>8192),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, location, eventtype, description, hostid', 'safe', 'on'=>'search'),
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
			'appointments' => array(self::HAS_MANY, 'Appointment', 'eventid'),
			'proposedArrangements' => array(self::HAS_MANY, 'AppointmentArrangement', 'eventid'),
			'finalArrangements' => array(self::HAS_MANY, 'AppointmentArrangement', 'eventid'),
			'comments' => array(self::HAS_MANY, 'Comment', 'eventid'),
			'host' => array(self::BELONGS_TO, 'User', 'hostid'),
			'notifications' => array(self::HAS_MANY, 'Notification', 'eventid'),
			'users' => array(self::MANY_MANY, 'User', 'User_Event(eventid, userid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'eventtype' => 'Event type',
			'location' => 'Location',
			'description' => 'Description',
			'hostid' => 'Hostid',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('eventtype',$this->eventtype);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('hostid',$this->hostid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * In percentage (integer) how many particpants have already
	 * signed up for the event out of the number of partipants which have been invited.
	 * If no users have been invited then 0 will be returned, since the progress is zero. 
	 *  
	 * @param Integer $id the id of the event
	 * @return Integer the progress in percent 
	 */
	public static function calcProgress($id)
	{
		// todo: Unit test is missing
		$available=UserEvent::model()->count('eventid=:eventid', array('eventid'=>$id));
		$set=UserEvent::model()->count('eventid=:eventid and signedup=1', array('eventid'=>$id));
		if($available == 0)
			return 0;
		return (100 * $set) / $available;
	}
}
