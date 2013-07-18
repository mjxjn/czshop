<?php

/**
 * This is the model class for table "{{admin_log}}".
 *
 * The followings are the available columns in table '{{admin_log}}':
 * @property string $log_id
 * @property integer $add_time
 * @property integer $admin_id
 * @property string $log_info
 * @property string $log_ip
 */
class AdminLog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AdminLog the static model class
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
		return '{{admin_log}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('add_time, admin_id', 'required'),
			array('add_time, admin_id', 'numerical', 'integerOnly'=>true),
			array('log_info', 'length', 'max'=>255),
			array('log_ip', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('log_id, add_time, admin_id, log_info, log_ip', 'safe', 'on'=>'search'),
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
			'log_id' => 'Log',
			'add_time' => 'Add Time',
			'admin_id' => 'Admin',
			'log_info' => 'Log Info',
			'log_ip' => 'Log Ip',
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

		$criteria->compare('log_id',$this->log_id,true);
		$criteria->compare('add_time',$this->add_time);
		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('log_info',$this->log_info,true);
		$criteria->compare('log_ip',$this->log_ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}