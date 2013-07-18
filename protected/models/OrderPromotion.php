<?php

/**
 * This is the model class for table "{{order_promotion}}".
 *
 * The followings are the available columns in table '{{order_promotion}}':
 * @property string $op_id
 * @property string $name
 * @property integer $status
 * @property integer $start_time
 * @property integer $end_time
 * @property string $infos
 * @property integer $op_type
 * @property integer $brand_id
 * @property integer $cid
 * @property string $min_price
 * @property integer $bouns_id
 * @property integer $add_time
 */
class OrderPromotion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OrderPromotion the static model class
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
		return '{{order_promotion}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, start_time, end_time, op_type, brand_id, cid, bouns_id, add_time', 'numerical', 'integerOnly'=>true),
			array('name, infos', 'length', 'max'=>255),
			array('min_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('op_id, name, status, start_time, end_time, infos, op_type, brand_id, cid, min_price, bouns_id, add_time', 'safe', 'on'=>'search'),
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
			'op_id' => 'Op',
			'name' => 'Name',
			'status' => 'Status',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'infos' => 'Infos',
			'op_type' => 'Op Type',
			'brand_id' => 'Brand',
			'cid' => 'Cid',
			'min_price' => 'Min Price',
			'bouns_id' => 'Bouns',
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

		$criteria->compare('op_id',$this->op_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('infos',$this->infos,true);
		$criteria->compare('op_type',$this->op_type);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('min_price',$this->min_price,true);
		$criteria->compare('bouns_id',$this->bouns_id);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}