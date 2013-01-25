<?php

/**
 * This is the model class for table "vn_vinoteca".
 *
 * The followings are the available columns in table 'vn_vinoteca':
 * @property integer $id_vinoteca
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $imagen
 * @property string $descripcion
 */
class Vinoteca extends CActiveRecord
{
	public $image, $images;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vinoteca the static model class
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
		return 'vn_vinoteca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, telefono, imagen, descripcion', 'required'),
			array('nombre, direccion, imagen', 'length', 'max'=>45),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('image, images', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vinoteca, nombre, direccion, telefono, imagen, descripcion', 'safe', 'on'=>'search'),
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
			'id_vinoteca' => 'Id Vinoteca',
			'nombre' => 'Nombre',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
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

		$criteria->compare('id_vinoteca',$this->id_vinoteca);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}