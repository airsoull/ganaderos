<?php

/**
 * This is the model class for table "pg_pagina".
 *
 * The followings are the available columns in table 'pg_pagina':
 * @property integer $id_pagina
 * @property string $titulo
 * @property string $webmaster
 * @property string $mailContactoUno
 * @property string $mailContactoDos
 * @property integer $telefono
 */
class Pagina extends CActiveRecord
{
	public $image;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagina the static model class
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
		return 'pg_pagina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, webmaster, mailContactoUno, telefono, descripcion, imagen, vinoteca', 'required'),
			array('telefono', 'numerical', 'integerOnly'=>true),
			array('titulo, webmaster, mailContactoUno, mailContactoDos', 'length', 'max'=>50),
            array('mailContactoUno, mailContactoDos', 'email'),
            array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pagina, titulo, webmaster, mailContactoUno, mailContactoDos, telefono', 'safe', 'on'=>'search'),
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
			'id_pagina' => 'Id',
			'titulo' => 'Titulo',
			'webmaster' => 'Empresa',
			'mailContactoUno' => 'Mail Contacto',
			'mailContactoDos' => 'Mail reserva',
			'telefono' => 'Teléfono',
			'descripcion' => 'Descripción',
			'imagen' => 'Imagen',
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

		$criteria->compare('id_pagina',$this->id_pagina);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('webmaster',$this->webmaster,true);
		$criteria->compare('mailContactoUno',$this->mailContactoUno,true);
		$criteria->compare('mailContactoDos',$this->mailContactoDos,true);
		$criteria->compare('telefono',$this->telefono);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}