<?php

/**
 * This is the model class for table "vn_vinos".
 *
 * The followings are the available columns in table 'vn_vinos':
 * @property integer $id_vinos
 * @property string $nombre
 * @property integer $id_vina
 * @property string $descripcion
 * @property string $imagen
 * @property integer $precio
 *
 * The followings are the available model relations:
 * @property Vina $idVina
 */
class Vinos extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vinos the static model class
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
		return 'vn_vinos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, id_vina, descripcion, imagen, precio', 'required'),
			array('id_vina, precio', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			array('imagen', 'length', 'max'=>100),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vinos, nombre, id_vina, descripcion, imagen, precio', 'safe', 'on'=>'search'),
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
			'idVina' => array(self::BELONGS_TO, 'Vina', 'id_vina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vinos' => 'ID',
			'nombre' => 'Nombre',
			'id_vina' => 'Viña',
			'descripcion' => 'Descripción',
			'imagen' => 'Imagen',
			'precio' => 'Precio',
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

		$criteria->compare('id_vinos',$this->id_vinos);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_vina',$this->id_vina);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('precio',$this->precio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}