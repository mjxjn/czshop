<?php

/**
 * This is the model class for table "{{gift}}".
 *
 * The followings are the available columns in table '{{gift}}':
 * @property string $gift_id
 * @property string $gift_name
 * @property integer $gift_cid
 * @property integer $gift_type
 * @property string $gift_sn
 * @property string $gift_code
 * @property integer $is_on_sale
 * @property integer $gift_number
 * @property string $keywords
 * @property string $gift_brief
 */
class Gift extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gift the static model class
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
		return '{{gift}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gift_cid, gift_type, is_on_sale, gift_number', 'numerical', 'integerOnly'=>true),
			array('gift_name, keywords, gift_brief', 'length', 'max'=>255),
			array('gift_sn, gift_code', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('gift_id, gift_name, gift_cid, gift_type, gift_sn, gift_code, is_on_sale, gift_number, keywords, gift_brief', 'safe', 'on'=>'search'),
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
			'gift_id' => 'Gift',
			'gift_name' => 'Gift Name',
			'gift_cid' => 'Gift Cid',
			'gift_type' => 'Gift Type',
			'gift_sn' => 'Gift Sn',
			'gift_code' => 'Gift Code',
			'is_on_sale' => 'Is On Sale',
			'gift_number' => 'Gift Number',
			'keywords' => 'Keywords',
			'gift_brief' => 'Gift Brief',
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

		$criteria->compare('gift_id',$this->gift_id,true);
		$criteria->compare('gift_name',$this->gift_name,true);
		$criteria->compare('gift_cid',$this->gift_cid);
		$criteria->compare('gift_type',$this->gift_type);
		$criteria->compare('gift_sn',$this->gift_sn,true);
		$criteria->compare('gift_code',$this->gift_code,true);
		$criteria->compare('is_on_sale',$this->is_on_sale);
		$criteria->compare('gift_number',$this->gift_number);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('gift_brief',$this->gift_brief,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}