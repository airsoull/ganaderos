<?php

/**
 * This is the model class for table "vn_vina".
 *
 * The followings are the available columns in table 'vn_vina':
 * @property integer $id_vina
 * @property string $nombre
 * @property string $direccion
 * @property integer $telefono
 * @property string $imagenPrincipal
 * @property string $destacados
 * @property string $descripcion
 * @property string $actividades
 *
 * The followings are the available model relations:
 * @property Vinos[] $vinoses
 */
class Vina extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vina the static model class
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
		return 'vn_vina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, telefono, imagenPrincipal, descripcion', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('nombre, direccion, imagenPrincipal', 'length', 'max'=>50),
			array('destacados, actividades', 'safe'),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_vina, nombre, direccion, telefono, imagenPrincipal, destacados, descripcion, actividades', 'safe', 'on'=>'search'),
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
			'vinoses' => array(self::HAS_MANY, 'Vinos', 'id_vina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_vina' => 'ID',
			'nombre' => 'Nombre',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
			'imagenPrincipal' => 'Imagen Principal',
			'destacados' => 'Destacados',
			'descripcion' => 'Descripción',
			'actividades' => 'Actividades',
			'image'=>'Imagen',
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

		$criteria->compare('id_vina',$this->id_vina);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('imagenPrincipal',$this->imagenPrincipal,true);
		$criteria->compare('destacados',$this->destacados,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('actividades',$this->actividades,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}