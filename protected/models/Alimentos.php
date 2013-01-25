<?php

/**
 * This is the model class for table "rt_alimentos".
 *
 * The followings are the available columns in table 'rt_alimentos':
 * @property integer $id_alimentos
 * @property string $nombre
 * @property string $descripcion
 * @property string $imagen
 * @property integer $precio
 * @property integer $id_menucomida
 * @property integer $id_categoriaalimentos
 *
 * The followings are the available model relations:
 * @property Categoriaalimentos $idCategoriaalimentos
 * @property Menucomida $idMenucomida
 */
class Alimentos extends CActiveRecord
{
        public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alimentos the static model class
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
		return 'rt_alimentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, descripcion, precio, id_menucomida, id_categoriaalimentos', 'required'),
			array('precio, id_menucomida, id_categoriaalimentos', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('imagen', 'length', 'max'=>45),
                        array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_alimentos, nombre, descripcion, imagen, precio, id_menucomida, id_categoriaalimentos', 'safe', 'on'=>'search'),
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
			'idCategoriaalimentos' => array(self::BELONGS_TO, 'Categoriaalimentos', 'id_categoriaalimentos'),
			'idMenucomida' => array(self::BELONGS_TO, 'Menucomida', 'id_menucomida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alimentos' => 'ID',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripción',
			'imagen' => 'Imagen',
			'precio' => 'Precio',
			'id_menucomida' => 'Menú Comida',
			'id_categoriaalimentos' => 'Categoría Alimentos',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('id_menucomida',$this->id_menucomida);
		$criteria->compare('id_categoriaalimentos',$this->id_categoriaalimentos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}