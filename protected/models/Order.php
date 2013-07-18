<?php

/**
 * This is the model class for table "{{order}}".
 *
 * The followings are the available columns in table '{{order}}':
 * @property integer $order_id
 * @property string $order_sn
 * @property integer $order_type
 * @property integer $user_id
 * @property integer $add_time
 * @property integer $confirm_time
 * @property integer $order_status
 * @property integer $pay_time
 * @property integer $pay_status
 * @property integer $shipping_time
 * @property string $shipping_code
 * @property integer $shipping_status
 * @property string $consignee
 * @property integer $province
 * @property integer $city
 * @property integer $district
 * @property string $address
 * @property string $zipcode
 * @property string $phone
 * @property string $email
 * @property integer $shipping_id
 * @property string $shipping_name
 * @property integer $pay_id
 * @property string $pay_name
 * @property string $goods_amount
 * @property string $shipping_fee
 * @property string $card_fee
 * @property string $pay_fee
 * @property string $money_paid
 * @property integer $bonus_id
 * @property string $bonus_money
 * @property integer $integral_id
 * @property string $integral_money
 * @property string $order_amount
 * @property string $pay_note
 * @property string $invoice_no
 */
class Order extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Order the static model class
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
		return '{{order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_type, user_id, add_time, confirm_time, order_status, pay_time, pay_status, shipping_time, shipping_status, province, city, district, shipping_id, pay_id, bonus_id, integral_id', 'numerical', 'integerOnly'=>true),
			array('order_sn, phone', 'length', 'max'=>20),
			array('shipping_code, consignee, zipcode, email', 'length', 'max'=>60),
			array('address, pay_note, invoice_no', 'length', 'max'=>255),
			array('shipping_name, pay_name', 'length', 'max'=>100),
			array('goods_amount, shipping_fee, card_fee, pay_fee, money_paid, bonus_money, integral_money, order_amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('order_id, order_sn, order_type, user_id, add_time, confirm_time, order_status, pay_time, pay_status, shipping_time, shipping_code, shipping_status, consignee, province, city, district, address, zipcode, phone, email, shipping_id, shipping_name, pay_id, pay_name, goods_amount, shipping_fee, card_fee, pay_fee, money_paid, bonus_id, bonus_money, integral_id, integral_money, order_amount, pay_note, invoice_no', 'safe', 'on'=>'search'),
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
			'order_id' => 'Order',
			'order_sn' => 'Order Sn',
			'order_type' => 'Order Type',
			'user_id' => 'User',
			'add_time' => 'Add Time',
			'confirm_time' => 'Confirm Time',
			'order_status' => 'Order Status',
			'pay_time' => 'Pay Time',
			'pay_status' => 'Pay Status',
			'shipping_time' => 'Shipping Time',
			'shipping_code' => 'Shipping Code',
			'shipping_status' => 'Shipping Status',
			'consignee' => 'Consignee',
			'province' => 'Province',
			'city' => 'City',
			'district' => 'District',
			'address' => 'Address',
			'zipcode' => 'Zipcode',
			'phone' => 'Phone',
			'email' => 'Email',
			'shipping_id' => 'Shipping',
			'shipping_name' => 'Shipping Name',
			'pay_id' => 'Pay',
			'pay_name' => 'Pay Name',
			'goods_amount' => 'Goods Amount',
			'shipping_fee' => 'Shipping Fee',
			'card_fee' => 'Card Fee',
			'pay_fee' => 'Pay Fee',
			'money_paid' => 'Money Paid',
			'bonus_id' => 'Bonus',
			'bonus_money' => 'Bonus Money',
			'integral_id' => 'Integral',
			'integral_money' => 'Integral Money',
			'order_amount' => 'Order Amount',
			'pay_note' => 'Pay Note',
			'invoice_no' => 'Invoice No',
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

		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('order_sn',$this->order_sn,true);
		$criteria->compare('order_type',$this->order_type);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('add_time',$this->add_time);
		$criteria->compare('confirm_time',$this->confirm_time);
		$criteria->compare('order_status',$this->order_status);
		$criteria->compare('pay_time',$this->pay_time);
		$criteria->compare('pay_status',$this->pay_status);
		$criteria->compare('shipping_time',$this->shipping_time);
		$criteria->compare('shipping_code',$this->shipping_code,true);
		$criteria->compare('shipping_status',$this->shipping_status);
		$criteria->compare('consignee',$this->consignee,true);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('district',$this->district);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('shipping_name',$this->shipping_name,true);
		$criteria->compare('pay_id',$this->pay_id);
		$criteria->compare('pay_name',$this->pay_name,true);
		$criteria->compare('goods_amount',$this->goods_amount,true);
		$criteria->compare('shipping_fee',$this->shipping_fee,true);
		$criteria->compare('card_fee',$this->card_fee,true);
		$criteria->compare('pay_fee',$this->pay_fee,true);
		$criteria->compare('money_paid',$this->money_paid,true);
		$criteria->compare('bonus_id',$this->bonus_id);
		$criteria->compare('bonus_money',$this->bonus_money,true);
		$criteria->compare('integral_id',$this->integral_id);
		$criteria->compare('integral_money',$this->integral_money,true);
		$criteria->compare('order_amount',$this->order_amount,true);
		$criteria->compare('pay_note',$this->pay_note,true);
		$criteria->compare('invoice_no',$this->invoice_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}