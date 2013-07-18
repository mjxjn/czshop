<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $user_id
 * @property string $user_name
 * @property string $password
 * @property integer $user_rank
 * @property string $phone
 * @property string $email
 * @property string $user_points
 * @property string $reg_time
 * @property integer $last_login
 * @property string $last_ip
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_rank, last_login', 'numerical', 'integerOnly'=>true),
			array('user_name', 'length', 'max'=>100),
			array('password', 'length', 'max'=>32),
			array('phone', 'length', 'max'=>20),
			array('email', 'length', 'max'=>60),
			array('user_points', 'length', 'max'=>10),
			array('reg_time', 'length', 'max'=>11),
			array('last_ip', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, password, user_rank, phone, email, user_points, reg_time, last_login, last_ip', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_name' => 'User Name',
			'password' => 'Password',
			'user_rank' => 'User Rank',
			'phone' => 'Phone',
			'email' => 'Email',
			'user_points' => 'User Points',
			'reg_time' => 'Reg Time',
			'last_login' => 'Last Login',
			'last_ip' => 'Last Ip',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_rank',$this->user_rank);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('user_points',$this->user_points,true);
		$criteria->compare('reg_time',$this->reg_time,true);
		$criteria->compare('last_login',$this->last_login);
		$criteria->compare('last_ip',$this->last_ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}