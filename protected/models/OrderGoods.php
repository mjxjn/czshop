<?php

/**
 * This is the model class for table "{{order_goods}}".
 *
 * The followings are the available columns in table '{{order_goods}}':
 * @property integer $og_id
 * @property integer $order_id
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property integer $goods_number
 * @property integer $goods_attr_id
 * @property string $attr_name
 * @property string $goods_price
 * @property integer $integral
 * @property string $integral_money
 * @property string $goods_amount
 */
class OrderGoods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderGoods the static model class
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
		return '{{order_goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id, goods_id', 'required'),
			array('order_id, goods_id, goods_number, goods_attr_id, integral', 'numerical', 'integerOnly'=>true),
			array('goods_name, goods_sn, attr_name', 'length', 'max'=>100),
			array('goods_price, integral_money, goods_amount', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('og_id, order_id, goods_id, goods_name, goods_sn, goods_number, goods_attr_id, attr_name, goods_price, integral, integral_money, goods_amount', 'safe', 'on'=>'search'),
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
			'og_id' => 'Og',
			'order_id' => 'Order',
			'goods_id' => 'Goods',
			'goods_name' => 'Goods Name',
			'goods_sn' => 'Goods Sn',
			'goods_number' => 'Goods Number',
			'goods_attr_id' => 'Goods Attr',
			'attr_name' => 'Attr Name',
			'goods_price' => 'Goods Price',
			'integral' => 'Integral',
			'integral_money' => 'Integral Money',
			'goods_amount' => 'Goods Amount',
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

		$criteria->compare('og_id',$this->og_id);
		$criteria->compare('order_id',$this->order_id);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('goods_sn',$this->goods_sn,true);
		$criteria->compare('goods_number',$this->goods_number);
		$criteria->compare('goods_attr_id',$this->goods_attr_id);
		$criteria->compare('attr_name',$this->attr_name,true);
		$criteria->compare('goods_price',$this->goods_price,true);
		$criteria->compare('integral',$this->integral);
		$criteria->compare('integral_money',$this->integral_money,true);
		$criteria->compare('goods_amount',$this->goods_amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}