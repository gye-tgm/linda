<?php

/**
 * This is the model class for table "Notification".
 *
 * The followings are the available columns in table 'Notification':
 * @property integer $id
 * @property integer $eventid
 * @property integer $type
 * @property string $time
 *
 * The followings are the available model relations:
 * @property Event $event
 * @property User[] $users
 */
class Notification extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Notification';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('time', 'required'),
			array('eventid, type', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, eventid, type, time', 'safe', 'on'=>'search'),
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
			'event' => array(self::BELONGS_TO, 'Event', 'eventid'),
			'users' => array(self::MANY_MANY, 'User', 'Notification_User(notificationid, userid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'eventid' => 'Eventid',
			'type' => 'Type',
			'time' => 'Time',
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
		$criteria->compare('eventid',$this->eventid);
		$criteria->compare('type',$this->type);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notification the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	*  
	*/
	public static function translate($eventid,$type){
		$name = Event::model()->findByPk($eventid)->name;
		if($type == 0){
			return "You've been invited to $name.";
		} else if($type == 1){
			return $name." has been changed.";
		} else if($type == 2){
			return $name." has been deleted.";
		} else if($type == 3){
			return "You are no longer invited to ".$name.".";
		} else if($type == 4){
			return "Every participant has made some proposals, you can fix the date for $name now";
		} else if($type == 5){
			return "The organizer has made fixed arrangemnts for $name";
		}
		
		
	}
}
