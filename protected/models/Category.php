<?php

/**
 * This is the model class for table "{{category}}".
 *
 * The followings are the available columns in table '{{category}}':
 * @property string $cid
 * @property string $name
 * @property integer $root
 * @property integer $pid
 * @property integer $level
 * @property string $lang
 * @property integer $is_show
 * @property integer $price_attr
 * @property integer $sort
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
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
		return '{{category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('root, pid, level, is_show, price_attr, sort', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('lang', 'length', 'max'=>200),
			array('seo_title, seo_keywords, seo_description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, name, root, pid, level, lang, is_show, price_attr, sort, seo_title, seo_keywords, seo_description', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'name' => 'Name',
			'root' => 'Root',
			'pid' => 'Pid',
			'level' => 'Level',
			'lang' => 'Lang',
			'is_show' => 'Is Show',
			'price_attr' => 'Price Attr',
			'sort' => 'Sort',
			'seo_title' => 'Seo Title',
			'seo_keywords' => 'Seo Keywords',
			'seo_description' => 'Seo Description',
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

		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('root',$this->root);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('level',$this->level);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('is_show',$this->is_show);
		$criteria->compare('price_attr',$this->price_attr);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('seo_keywords',$this->seo_keywords,true);
		$criteria->compare('seo_description',$this->seo_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}