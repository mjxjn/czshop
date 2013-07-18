<?php

/**
 * This is the model class for table "{{shipping}}".
 *
 * The followings are the available columns in table '{{shipping}}':
 * @property string $shipping_id
 * @property string $shipping_code
 * @property string $shipping_name
 * @property string $shipping_desc
 * @property integer $status
 * @property integer $is_cod
 * @property integer $is_gua
 * @property integer $sort
 * @property integer $pay_type
 * @property integer $shipping_config
 */
class Shipping extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Shipping the static model class
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
		return '{{shipping}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shipping_code, shipping_name', 'required'),
			array('status, is_cod, is_gua, sort, pay_type, shipping_config', 'numerical', 'integerOnly'=>true),
			array('shipping_code', 'length', 'max'=>32),
			array('shipping_name', 'length', 'max'=>100),
			array('shipping_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('shipping_id, shipping_code, shipping_name, shipping_desc, status, is_cod, is_gua, sort, pay_type, shipping_config', 'safe', 'on'=>'search'),
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
			'shipping_id' => 'Shipping',
			'shipping_code' => 'Shipping Code',
			'shipping_name' => 'Shipping Name',
			'shipping_desc' => 'Shipping Desc',
			'status' => 'Status',
			'is_cod' => 'Is Cod',
			'is_gua' => 'Is Gua',
			'sort' => 'Sort',
			'pay_type' => 'Pay Type',
			'shipping_config' => 'Shipping Config',
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

		$criteria->compare('shipping_id',$this->shipping_id,true);
		$criteria->compare('shipping_code',$this->shipping_code,true);
		$criteria->compare('shipping_name',$this->shipping_name,true);
		$criteria->compare('shipping_desc',$this->shipping_desc,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('is_cod',$this->is_cod);
		$criteria->compare('is_gua',$this->is_gua);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('pay_type',$this->pay_type);
		$criteria->compare('shipping_config',$this->shipping_config);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}