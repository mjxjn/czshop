<?php

/**
 * This is the model class for table "{{bonus}}".
 *
 * The followings are the available columns in table '{{bonus}}':
 * @property string $bonus_id
 * @property string $bonus_name
 * @property integer $status
 * @property string $bonus_money
 * @property integer $bonus_number
 * @property integer $start_time
 * @property string $end_time
 * @property string $infos
 * @property integer $bonus_type
 * @property string $min_price
 * @property string $bonus_config
 * @property integer $add_time
 */
class Bonus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bonus the static model class
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
		return '{{bonus}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, bonus_number, start_time, bonus_type, add_time', 'numerical', 'integerOnly'=>true),
			array('bonus_name, infos', 'length', 'max'=>255),
			array('bonus_money, min_price', 'length', 'max'=>10),
			array('end_time', 'length', 'max'=>11),
			array('bonus_config', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bonus_id, bonus_name, status, bonus_money, bonus_number, start_time, end_time, infos, bonus_type, min_price, bonus_config, add_time', 'safe', 'on'=>'search'),
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
			'bonus_id' => 'Bonus',
			'bonus_name' => 'Bonus Name',
			'status' => 'Status',
			'bonus_money' => 'Bonus Money',
			'bonus_number' => 'Bonus Number',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'infos' => 'Infos',
			'bonus_type' => 'Bonus Type',
			'min_price' => 'Min Price',
			'bonus_config' => 'Bonus Config',
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

		$criteria->compare('bonus_id',$this->bonus_id,true);
		$criteria->compare('bonus_name',$this->bonus_name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('bonus_money',$this->bonus_money,true);
		$criteria->compare('bonus_number',$this->bonus_number);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('infos',$this->infos,true);
		$criteria->compare('bonus_type',$this->bonus_type);
		$criteria->compare('min_price',$this->min_price,true);
		$criteria->compare('bonus_config',$this->bonus_config,true);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}