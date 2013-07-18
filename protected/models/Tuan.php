<?php

/**
 * This is the model class for table "{{tuan}}".
 *
 * The followings are the available columns in table '{{tuan}}':
 * @property string $tuan_id
 * @property integer $goods_id
 * @property integer $start_time
 * @property integer $end_time
 * @property string $tuan_price
 * @property integer $min_number
 * @property integer $add_time
 */
class Tuan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tuan the static model class
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
		return '{{tuan}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, start_time, end_time, min_number, add_time', 'numerical', 'integerOnly'=>true),
			array('tuan_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tuan_id, goods_id, start_time, end_time, tuan_price, min_number, add_time', 'safe', 'on'=>'search'),
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
			'tuan_id' => 'Tuan',
			'goods_id' => 'Goods',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'tuan_price' => 'Tuan Price',
			'min_number' => 'Min Number',
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

		$criteria->compare('tuan_id',$this->tuan_id,true);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('tuan_price',$this->tuan_price,true);
		$criteria->compare('min_number',$this->min_number);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}