<?php

/**
 * This is the model class for table "{{booking}}".
 *
 * The followings are the available columns in table '{{booking}}':
 * @property string $booking_id
 * @property integer $user_id
 * @property string $email
 * @property string $phone
 * @property integer $goods_id
 * @property string $goods_name
 * @property integer $booking_time
 * @property integer $status
 */
class Booking extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{booking}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, goods_id, booking_time, status', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>60),
			array('phone', 'length', 'max'=>20),
			array('goods_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('booking_id, user_id, email, phone, goods_id, goods_name, booking_time, status', 'safe', 'on'=>'search'),
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
			'booking_id' => 'Booking',
			'user_id' => 'User',
			'email' => 'Email',
			'phone' => 'Phone',
			'goods_id' => 'Goods',
			'goods_name' => 'Goods Name',
			'booking_time' => 'Booking Time',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('booking_id',$this->booking_id,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('booking_time',$this->booking_time);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}