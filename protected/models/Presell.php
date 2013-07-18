<?php

/**
 * This is the model class for table "{{presell}}".
 *
 * The followings are the available columns in table '{{presell}}':
 * @property string $presell_id
 * @property integer $goods_id
 * @property integer $start_time
 * @property integer $end_time
 * @property string $presell_price
 * @property string $presell_payment
 * @property integer $presell_people_one
 * @property string $presell_price_one
 * @property integer $presell_people_two
 * @property string $presell_price_two
 * @property integer $presell_people_three
 * @property string $presell_price_three
 * @property string $infos
 * @property integer $add_time
 */
class Presell extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Presell the static model class
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
		return '{{presell}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, start_time, end_time, presell_people_one, presell_people_two, presell_people_three, add_time', 'numerical', 'integerOnly'=>true),
			array('presell_price', 'length', 'max'=>60),
			array('presell_payment, presell_price_one, presell_price_two, presell_price_three', 'length', 'max'=>10),
			array('infos', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('presell_id, goods_id, start_time, end_time, presell_price, presell_payment, presell_people_one, presell_price_one, presell_people_two, presell_price_two, presell_people_three, presell_price_three, infos, add_time', 'safe', 'on'=>'search'),
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
			'presell_id' => 'Presell',
			'goods_id' => 'Goods',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'presell_price' => 'Presell Price',
			'presell_payment' => 'Presell Payment',
			'presell_people_one' => 'Presell People One',
			'presell_price_one' => 'Presell Price One',
			'presell_people_two' => 'Presell People Two',
			'presell_price_two' => 'Presell Price Two',
			'presell_people_three' => 'Presell People Three',
			'presell_price_three' => 'Presell Price Three',
			'infos' => 'Infos',
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

		$criteria->compare('presell_id',$this->presell_id,true);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('start_time',$this->start_time);
		$criteria->compare('end_time',$this->end_time);
		$criteria->compare('presell_price',$this->presell_price,true);
		$criteria->compare('presell_payment',$this->presell_payment,true);
		$criteria->compare('presell_people_one',$this->presell_people_one);
		$criteria->compare('presell_price_one',$this->presell_price_one,true);
		$criteria->compare('presell_people_two',$this->presell_people_two);
		$criteria->compare('presell_price_two',$this->presell_price_two,true);
		$criteria->compare('presell_people_three',$this->presell_people_three);
		$criteria->compare('presell_price_three',$this->presell_price_three,true);
		$criteria->compare('infos',$this->infos,true);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}