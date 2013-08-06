<?php

/**
 * This is the model class for table "{{admin_user}}".
 *
 * The followings are the available columns in table '{{admin_user}}':
 * @property integer $admin_id
 * @property string $admin_name
 * @property string $password
 * @property string $last_login
 * @property string $last_ip
 * @property string $login_count
 * @property integer $add_time
 */
class AdminUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Admin the static model class
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
		return '{{admin_user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admin_name', 'required','on'=>'create,update'),
			array('admin_name', 'unique' , 'on'=>'create,update'),
			array('password', 'required','on'=>'create,update'),
			array('add_time', 'required','on'=>'create'),
			array('add_time', 'numerical', 'integerOnly'=>true),
			array('add_time', 'length', 'max'=>11),
			array('admin_name', 'length', 'max'=>50),
			array('password', 'length', 'max'=>255),
			array('last_login', 'numerical', 'integerOnly'=>true),
			array('last_login', 'length', 'max'=>11),
			array('last_ip', 'safe'),
			array('login_count', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('admin_id, admin_name, password, email, last_login, last_ip, login_count, add_time', 'safe', 'on'=>'search'),
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
			'admin_id' => 'Admin ID',
			'admin_name' => 'Admin Name',
			'password' => 'Password',
			'email' => 'Email',
			'last_login' => 'Last Login',
			'last_ip' => 'Last Ip',
			'login_count' => 'Login Count',
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

		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('admin_name',$this->admin_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('last_ip',$this->last_ip,true);
		$criteria->compare('login_count',$this->login_count,true);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	    /**
	     * Checks if the given password is correct.
	     * @param string the password to be validated
	     * @return boolean whether the password is valid
	     */
	    public function validatePassword($password) {
		if (md5($password) === $this->password) {
		    return true;
		} else{
		    return false;
		}
	    }
}