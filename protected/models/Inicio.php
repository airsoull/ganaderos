<?php

/**
 * This is the model class for table "pg_inicio".
 *
 * The followings are the available columns in table 'pg_inicio':
 * @property integer $id_inicio
 * @property integer $id_tipoinicio
 * @property integer $id_vinarestaurant
 * @property string $imagen
 * @property string $titulo
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Tipoinicio $idTipoinicio
 */
class Inicio extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inicio the static model class
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
		return 'pg_inicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tipoinicio, id_vinarestaurant, titulo, descripcion, imagen', 'required'),
			array('id_tipoinicio, id_vinarestaurant', 'numerical', 'integerOnly'=>true),
			array('imagen', 'length', 'max'=>100),
			array('titulo', 'length', 'max'=>45),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_inicio, id_tipoinicio, id_vinarestaurant, imagen, titulo, descripcion', 'safe', 'on'=>'search'),
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
			'idTipoinicio' => array(self::BELONGS_TO, 'Tipoinicio', 'id_tipoinicio'),
			'restaurant' => array(self::BELONGS_TO, 'Restaurantes', 'id_vinarestaurant'),
			'vina' => array(self::BELONGS_TO, 'Vina', 'id_vinarestaurant'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_inicio' => 'ID',
			'id_tipoinicio' => 'Tipo',
			'id_vinarestaurant' => 'Viña o Restaurant',
			'imagen' => 'Imagen',
			'titulo' => 'Titulo',
			'descripcion' => 'Descripción',
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

		$criteria->compare('id_inicio',$this->id_inicio);
		$criteria->compare('id_tipoinicio',$this->id_tipoinicio);
		$criteria->compare('id_vinarestaurant',$this->id_vinarestaurant);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}