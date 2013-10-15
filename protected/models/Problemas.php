<?php

/**
 * This is the model class for table "problemas".
 *
 * The followings are the available columns in table 'problemas':
 * @property integer $pro_id
 * @property string $pro_name
 * @property string $pro_sol
 * @property string $pro_causa
 * @property string $pro_cyc
 * @property string $pro_img
 * @property integer $pro_cultivo_id
 */
class Problemas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'problemas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_name, pro_sol, pro_causa, pro_cyc', 'required'),
			array('pro_cultivo_id', 'numerical', 'integerOnly'=>true),
			array('pro_img', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_id, pro_name, pro_sol, pro_causa, pro_cyc, pro_img, pro_cultivo_id', 'safe', 'on'=>'search'),
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
			'cultivos' => array(self::BELONGS_TO, 'Cultivos', 'pro_cultivo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_id' => 'Pro',
			'pro_name' => 'Pro Name',
			'pro_sol' => 'Pro Sol',
			'pro_causa' => 'Pro Causa',
			'pro_cyc' => 'Pro Cyc',
			'pro_img' => 'Pro Img',
			'pro_cultivo_id' => 'Pro Cultivo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('pro_name',$this->pro_name,true);
		$criteria->compare('pro_sol',$this->pro_sol,true);
		$criteria->compare('pro_causa',$this->pro_causa,true);
		$criteria->compare('pro_cyc',$this->pro_cyc,true);
		$criteria->compare('pro_img',$this->pro_img,true);
		$criteria->compare('pro_cultivo_id',$this->pro_cultivo_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Problemas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
