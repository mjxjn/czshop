<?php

/**
 * This is the model class for table "{{shipping_area}}".
 *
 * The followings are the available columns in table '{{shipping_area}}':
 * @property integer $id
 * @property integer $status
 * @property integer $shipping_id
 * @property string $shipping_config
 */
class ShippingArea extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ShippingArea the static model class
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
		return '{{shipping_area}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, status, shipping_id', 'numerical', 'integerOnly'=>true),
			array('shipping_config', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, status, shipping_id, shipping_config', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'shipping_id' => 'Shipping',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('status',$this->status);
		$criteria->compare('shipping_id',$this->shipping_id);
		$criteria->compare('shipping_config',$this->shipping_config,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}