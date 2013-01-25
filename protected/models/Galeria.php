<?php

/**
 * This is the model class for table "rt_galeria".
 *
 * The followings are the available columns in table 'rt_galeria':
 * @property integer $id_galeria
 * @property integer $id_restaurantes
 * @property string $imagen
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Restaurantes $idRestaurantes
 */
class Galeria extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Galeria the static model class
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
		return 'rt_galeria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_restaurantes, imagen, descripcion', 'required'),
			array('id_restaurantes', 'numerical', 'integerOnly'=>true),
			array('imagen', 'length', 'max'=>45),
			array('image', 'file', 'types'=>'jpg, gif, png, jpeg'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_galeria, id_restaurantes, imagen, descripcion', 'safe', 'on'=>'search'),
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
			'idRestaurantes' => array(self::BELONGS_TO, 'Restaurantes', 'id_restaurantes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_galeria' => 'Id Galeria',
			'id_restaurantes' => 'Restaurant',
			'imagen' => 'Imagen',
			'descripcion' => 'Descripción',
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

		$criteria->compare('id_galeria',$this->id_galeria);
		$criteria->compare('id_restaurantes',$this->id_restaurantes);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}