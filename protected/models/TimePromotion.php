<?php

/**
 * This is the model class for table "{{time_promotion}}".
 *
 * The followings are the available columns in table '{{time_promotion}}':
 * @property string $tp_id
 * @property string $name
 * @property integer $status
 * @property integer $start_time
 * @property integer $end_time
 * @property string $infos
 */
class TimePromotion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TimePromotion the static model class
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
		return '{{time_promotion}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, start_time, end_time', 'numerical', 'integerOnly'=>true),
			array('name, infos', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tp_id, name, status, start_time, end_time, infos', 'safe', 'on'=>'search'),
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
			'tp_id' => 'Tp',
			'name' => 'Name',
			'status' => 'Status',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'infos' => 'Infos',
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

		$criteria->compare('tp_id',$this->tp_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('infos',$this->infos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}