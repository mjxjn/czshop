<?php

/**
 * This is the model class for table "{{system}}".
 *
 * The followings are the available columns in table '{{system}}':
 * @property string $varname
 * @property string $info
 * @property integer $groupid
 * @property string $value
 * @property integer $lang
 */
class System extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return System the static model class
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
		return '{{system}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('groupid, lang', 'numerical', 'integerOnly'=>true),
			array('varname', 'length', 'max'=>20),
			array('info', 'length', 'max'=>100),
			array('value', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('varname, info, groupid, value, lang', 'safe', 'on'=>'search'),
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
			'varname' => 'Varname',
			'info' => 'Info',
			'groupid' => 'Groupid',
			'value' => 'Value',
			'lang' => 'Lang',
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

		$criteria->compare('varname',$this->varname,true);
		$criteria->compare('info',$this->info,true);
		$criteria->compare('groupid',$this->groupid);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('lang',$this->lang);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}