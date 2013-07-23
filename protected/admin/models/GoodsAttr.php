<?php

/**
 * This is the model class for table "{{goods_attr}}".
 *
 * The followings are the available columns in table '{{goods_attr}}':
 * @property integer $goods_attr_id
 * @property integer $goods_id
 * @property integer $attr_id
 * @property string $attr_name
 * @property string $attr_sn
 * @property string $attr_price
 * @property integer $arrt_number
 */
class GoodsAttr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GoodsAttr the static model class
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
		return '{{goods_attr}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, attr_id, attr_name', 'required'),
			array('goods_id, attr_id, arrt_number', 'numerical', 'integerOnly'=>true),
			array('attr_name', 'length', 'max'=>60),
			array('attr_sn', 'length', 'max'=>100),
			array('attr_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('goods_attr_id, goods_id, attr_id, attr_name, attr_sn, attr_price, arrt_number', 'safe', 'on'=>'search'),
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
			'goods_attr_id' => 'Goods Attr',
			'goods_id' => 'Goods',
			'attr_id' => 'Attr',
			'attr_name' => 'Attr Name',
			'attr_sn' => 'Attr Sn',
			'attr_price' => 'Attr Price',
			'arrt_number' => 'Arrt Number',
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

		$criteria->compare('goods_attr_id',$this->goods_attr_id);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('attr_id',$this->attr_id);
		$criteria->compare('attr_name',$this->attr_name,true);
		$criteria->compare('attr_sn',$this->attr_sn,true);
		$criteria->compare('attr_price',$this->attr_price,true);
		$criteria->compare('arrt_number',$this->arrt_number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}