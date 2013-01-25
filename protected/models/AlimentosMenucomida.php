<?php

/**
 * This is the model class for table "rt_alimentos_menucomida".
 *
 * The followings are the available columns in table 'rt_alimentos_menucomida':
 * @property integer $id_alimentos
 * @property integer $id_menucomida
 *
 * The followings are the available model relations:
 * @property Alimentos $idAlimentos
 * @property Menucomida $idMenucomida
 */
class AlimentosMenucomida extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AlimentosMenucomida the static model class
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
		return 'rt_alimentos_menucomida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_alimentos, id_menucomida', 'required'),
			array('id_alimentos, id_menucomida', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_alimentos, id_menucomida', 'safe', 'on'=>'search'),
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
			'idAlimentos' => array(self::BELONGS_TO, 'Alimentos', 'id_alimentos'),
			'idMenucomida' => array(self::BELONGS_TO, 'Menucomida', 'id_menucomida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alimentos' => 'Id Alimentos',
			'id_menucomida' => 'Id Menucomida',
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

		$criteria->compare('id_alimentos',$this->id_alimentos);
		$criteria->compare('id_menucomida',$this->id_menucomida);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}