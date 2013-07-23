<?php

/**
 * This is the model class for table "{{integral}}".
 *
 * The followings are the available columns in table '{{integral}}':
 * @property string $integral_id
 * @property string $integral_name
 * @property string $integral
 * @property string $integral_money
 * @property integer $status
 * @property integer $integral_type
 * @property string $integral_config
 * @property integer $add_time
 */
class Integral extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Integral the static model class
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
		return '{{integral}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, integral_type, add_time', 'numerical', 'integerOnly'=>true),
			array('integral_name', 'length', 'max'=>255),
			array('integral', 'length', 'max'=>8),
			array('integral_money', 'length', 'max'=>10),
			array('integral_config', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('integral_id, integral_name, integral, integral_money, status, integral_type, integral_config, add_time', 'safe', 'on'=>'search'),
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
			'integral_id' => 'Integral',
			'integral_name' => 'Integral Name',
			'integral' => 'Integral',
			'integral_money' => 'Integral Money',
			'status' => 'Status',
			'integral_type' => 'Integral Type',
			'integral_config' => 'Integral Config',
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

		$criteria->compare('integral_id',$this->integral_id,true);
		$criteria->compare('integral_name',$this->integral_name,true);
		$criteria->compare('integral',$this->integral,true);
		$criteria->compare('integral_money',$this->integral_money,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('integral_type',$this->integral_type);
		$criteria->compare('integral_config',$this->integral_config,true);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}