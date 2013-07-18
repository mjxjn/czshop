<?php

/**
 * This is the model class for table "{{goods}}".
 *
 * The followings are the available columns in table '{{goods}}':
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property string $goods_code
 * @property integer $cid
 * @property integer $brand_id
 * @property integer $is_onsale
 * @property string $keywords
 * @property string $goods_brief
 * @property string $shop_price
 * @property string $market_price
 * @property string $cost_price
 * @property integer $integral
 * @property string $goods_desc
 * @property integer $thumb_type
 * @property string $goods_thumb
 * @property integer $goods_number
 * @property integer $warn_number
 * @property string $goods_weight
 * @property integer $goods_type
 * @property integer $add_time
 */
class Goods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Goods the static model class
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
		return '{{goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, brand_id, is_onsale, integral, thumb_type, goods_number, warn_number, goods_type, add_time', 'numerical', 'integerOnly'=>true),
			array('goods_name, goods_sn, goods_code', 'length', 'max'=>100),
			array('keywords, goods_brief, goods_thumb', 'length', 'max'=>255),
			array('shop_price, market_price, cost_price, goods_weight', 'length', 'max'=>10),
			array('goods_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('goods_id, goods_name, goods_sn, goods_code, cid, brand_id, is_onsale, keywords, goods_brief, shop_price, market_price, cost_price, integral, goods_desc, thumb_type, goods_thumb, goods_number, warn_number, goods_weight, goods_type, add_time', 'safe', 'on'=>'search'),
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
			'goods_id' => 'Goods',
			'goods_name' => 'Goods Name',
			'goods_sn' => 'Goods Sn',
			'goods_code' => 'Goods Code',
			'cid' => 'Cid',
			'brand_id' => 'Brand',
			'is_onsale' => 'Is Onsale',
			'keywords' => 'Keywords',
			'goods_brief' => 'Goods Brief',
			'shop_price' => 'Shop Price',
			'market_price' => 'Market Price',
			'cost_price' => 'Cost Price',
			'integral' => 'Integral',
			'goods_desc' => 'Goods Desc',
			'thumb_type' => 'Thumb Type',
			'goods_thumb' => 'Goods Thumb',
			'goods_number' => 'Goods Number',
			'warn_number' => 'Warn Number',
			'goods_weight' => 'Goods Weight',
			'goods_type' => 'Goods Type',
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

		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('goods_sn',$this->goods_sn,true);
		$criteria->compare('goods_code',$this->goods_code,true);
		$criteria->compare('cid',$this->cid);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('is_onsale',$this->is_onsale);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('goods_brief',$this->goods_brief,true);
		$criteria->compare('shop_price',$this->shop_price,true);
		$criteria->compare('market_price',$this->market_price,true);
		$criteria->compare('cost_price',$this->cost_price,true);
		$criteria->compare('integral',$this->integral);
		$criteria->compare('goods_desc',$this->goods_desc,true);
		$criteria->compare('thumb_type',$this->thumb_type);
		$criteria->compare('goods_thumb',$this->goods_thumb,true);
		$criteria->compare('goods_number',$this->goods_number);
		$criteria->compare('warn_number',$this->warn_number);
		$criteria->compare('goods_weight',$this->goods_weight,true);
		$criteria->compare('goods_type',$this->goods_type);
		$criteria->compare('add_time',$this->add_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}