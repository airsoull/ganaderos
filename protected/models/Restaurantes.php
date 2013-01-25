<?php

/**
 * This is the model class for table "rt_restaurantes".
 *
 * The followings are the available columns in table 'rt_restaurantes':
 * @property integer $id_restaurantes
 * @property string $nombre
 * @property string $direccion
 * @property integer $telefono
 * @property string $imagenPrincipal
 * @property string $imagenPromocion
 * @property string $descripcion
 * @property integer $activarpromocion
 *
 * The followings are the available model relations:
 * @property EvEnvio $activarpromocion0
 */
class Restaurantes extends CActiveRecord
{
        public $image, $imageDos, $imagenDireccion;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Restaurantes the static model class
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
		return 'rt_restaurantes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre,direcciond ,direccion, telefono, imagenPrincipal, descripcion, activarpromocion, imagenPromocion', 'required'),
			array('telefono, activarpromocion', 'numerical', 'integerOnly'=>true),
                        #array('direccion','numerical','integerOnly'=>false),
			array('nombre, imagenPrincipal, imagenPromocion', 'length', 'max'=>50),
			array('direccion, direcciond', 'length', 'max'=>100),
                        array('image, imageDos, imagenDireccion', 'file', 'types'=>'jpg, gif, png, jpeg', 'allowEmpty' => true),
			#array('descripcion', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_restaurantes, nombre, direccion, telefono, imagenPrincipal, imagenPromocion, descripcion, activarpromocion', 'safe', 'on'=>'search'),
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
			'activarpromocion0' => array(self::BELONGS_TO, 'Envio', 'activarpromocion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_restaurantes' => 'ID',
			'nombre' => 'Nombre',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
			'imagenPrincipal' => 'Imagen Principal',
			'imagenPromocion' => 'Imagen Promoción',
			'descripcion' => 'Descripción',
			'activarpromocion' => 'Promoción Activa',
			'direcciond'=>'Dirección Dato',
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

		$criteria->compare('id_restaurantes',$this->id_restaurantes);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('imagenPrincipal',$this->imagenPrincipal,true);
		$criteria->compare('imagenPromocion',$this->imagenPromocion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('activarpromocion',$this->activarpromocion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}