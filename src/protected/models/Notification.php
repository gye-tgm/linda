<?php

/**
 * This is the model class for table "Notification".
 *
 * The followings are the available columns in table 'Notification':
 * @property integer $id
 * @property integer $eventid
 * @property integer $typ
 * @property string $zeit
 *
 * The followings are the available model relations:
 * @property Event $event
 * @property NotificationUser[] $notificationUsers
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
			array('zeit', 'required'),
			array('eventid, typ', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, eventid, typ, zeit', 'safe', 'on'=>'search'),
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
			'notificationUsers' => array(self::HAS_MANY, 'NotificationUser', 'notificationid'),
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
			'typ' => 'Typ',
			'zeit' => 'Zeit',
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
		$criteria->compare('typ',$this->typ);
		$criteria->compare('zeit',$this->zeit,true);

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
}
