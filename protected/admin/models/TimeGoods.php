<?php

/**
 * This is the model class for table "{{time_goods}}".
 *
 * The followings are the available columns in table '{{time_goods}}':
 * @property string $id
 * @property integer $tp_id
 * @property integer $goods_id
 * @property string $goods_code
 * @property string $goods_name
 * @property string $goods_attr
 * @property string $goods_price
 * @property string $promotion_price
 * @property integer $max_number
 * @property string $add_time
 */
class TimeGoods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TimeGoods the static model class
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
		return '{{time_goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tp_id, goods_id', 'required'),
			array('tp_id, goods_id, max_number', 'numerical', 'integerOnly'=>true),
			array('goods_code', 'length', 'max'=>100),
			array('goods_name, goods_attr', 'length', 'max'=>255),
			array('goods_price, promotion_price', 'length', 'max'=>10),
			array('add_time', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tp_id, goods_id, goods_code, goods_name, goods_attr, goods_price, promotion_price, max_number, add_time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'tp_id' => 'Tp',
			'goods_id' => 'Goods',
			'goods_code' => 'Goods Code',
			'goods_name' => 'Goods Name',
			'goods_attr' => 'Goods Attr',
			'goods_price' => 'Goods Price',
			'promotion_price' => 'Promotion Price',
			'max_number' => 'Max Number',
			'add_time' => 'Add Time',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tp_id',$this->tp_id);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_code',$this->goods_code,true);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('goods_attr',$this->goods_attr,true);
		$criteria->compare('goods_price',$this->goods_price,true);
		$criteria->compare('promotion_price',$this->promotion_price,true);
		$criteria->compare('max_number',$this->max_number);
		$criteria->compare('add_time',$this->add_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}