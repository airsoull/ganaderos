<?php

/**
 * This is the model class for table "pg_club".
 *
 * The followings are the available columns in table 'pg_club':
 * @property integer $id_club
 * @property string $imagen
 * @property string $descripcion
 * @property integer $id_envio
 * @property string $imagen_promocion
 *
 * The followings are the available model relations:
 * @property EvEnvio $idEnvio
 */
class Club extends CActiveRecord
{
	public $image, $images;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Club the static model class
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
		return 'pg_club';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imagen, descripcion, id_envio, imagen_promocion', 'required'),
			array('id_envio', 'numerical', 'integerOnly'=>true),
			array('imagen, imagen_promocion', 'length', 'max'=>45),
			array('image, images', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_club, imagen, descripcion, id_envio, imagen_promocion', 'safe', 'on'=>'search'),
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
			'idEnvio' => array(self::BELONGS_TO, 'Envio', 'id_envio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_club' => 'Id Club',
			'imagen' => 'Imagen',
			'descripcion' => 'Descripción',
			'id_envio' => 'Promoción Activa',
			'imagen_promocion' => 'Imagen Promoción',
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

		$criteria->compare('id_club',$this->id_club);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_envio',$this->id_envio);
		$criteria->compare('imagen_promocion',$this->imagen_promocion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}