<?php

/**
 * This is the model class for table "{{author_connector}}".
 *
 * The followings are the available columns in table '{{author_connector}}':
 * @property integer $userId
 * @property string $name
 * @property string $infos
 * @property string $logo
 * @property string $openId
 * @property string $source
 * @property string $accessToken
 * @property string $createTime
 * @property string $validate
 * @property integer $status
 */
class AuthorConnector extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuthorConnector the static model class
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
		return '{{author_connector}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, openId, source, accessToken', 'length', 'max'=>50),
			array('infos', 'length', 'max'=>100),
			array('logo', 'length', 'max'=>150),
			array('createTime', 'length', 'max'=>30),
			array('validate', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userId, name, infos, logo, openId, source, accessToken, createTime, validate, status', 'safe', 'on'=>'search'),
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
			'userId' => 'User',
			'name' => 'Name',
			'infos' => 'Infos',
			'logo' => 'Logo',
			'openId' => 'Open',
			'source' => 'Source',
			'accessToken' => 'Access Token',
			'createTime' => 'Create Time',
			'validate' => 'Validate',
			'status' => 'Status',
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

		$criteria->compare('userId',$this->userId);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('infos',$this->infos,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('openId',$this->openId,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('accessToken',$this->accessToken,true);
		$criteria->compare('createTime',$this->createTime,true);
		$criteria->compare('validate',$this->validate,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}