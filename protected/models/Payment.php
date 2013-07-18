<?php

/**
 * This is the model class for table "{{payment}}".
 *
 * The followings are the available columns in table '{{payment}}':
 * @property string $pay_id
 * @property string $pay_code
 * @property string $pay_logo
 * @property string $pay_name
 * @property string $pay_desc
 * @property integer $status
 * @property string $pay_fee
 * @property integer $is_cod
 * @property integer $is_pos
 * @property string $pay_config
 */
class Payment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payment the static model class
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
		return '{{payment}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pay_code, pay_name', 'required'),
			array('status, is_cod, is_pos', 'numerical', 'integerOnly'=>true),
			array('pay_code', 'length', 'max'=>32),
			array('pay_logo', 'length', 'max'=>150),
			array('pay_name', 'length', 'max'=>100),
			array('pay_fee', 'length', 'max'=>10),
			array('pay_desc, pay_config', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pay_id, pay_code, pay_logo, pay_name, pay_desc, status, pay_fee, is_cod, is_pos, pay_config', 'safe', 'on'=>'search'),
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
			'pay_id' => 'Pay',
			'pay_code' => 'Pay Code',
			'pay_logo' => 'Pay Logo',
			'pay_name' => 'Pay Name',
			'pay_desc' => 'Pay Desc',
			'status' => 'Status',
			'pay_fee' => 'Pay Fee',
			'is_cod' => 'Is Cod',
			'is_pos' => 'Is Pos',
			'pay_config' => 'Pay Config',
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

		$criteria->compare('pay_id',$this->pay_id,true);
		$criteria->compare('pay_code',$this->pay_code,true);
		$criteria->compare('pay_logo',$this->pay_logo,true);
		$criteria->compare('pay_name',$this->pay_name,true);
		$criteria->compare('pay_desc',$this->pay_desc,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('pay_fee',$this->pay_fee,true);
		$criteria->compare('is_cod',$this->is_cod);
		$criteria->compare('is_pos',$this->is_pos);
		$criteria->compare('pay_config',$this->pay_config,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}