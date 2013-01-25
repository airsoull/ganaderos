<?php

/**
 * This is the model class for table "ev_mail".
 *
 * The followings are the available columns in table 'ev_mail':
 * @property integer $id_mail
 * @property string $nombre
 * @property string $mail
 * @property integer $idenvio
 *
 * The followings are the available model relations:
 * @property Envio $idenvio0
 */
class Mail extends CActiveRecord
{
	public $nombre, $mensaje, $email;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mail the static model class
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
		return 'ev_mail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, mail, idenvio, nombre, mensaje, email', 'required'),
			array('idenvio', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('mail', 'length', 'max'=>45),
			array('mail, email', 'email'),
			array('mail','unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mail, nombre, mail, idenvio', 'safe', 'on'=>'search'),
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
			'idenvio0' => array(self::BELONGS_TO, 'Envio', 'idenvio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mail' => 'Id Mail',
			'nombre' => 'Nombre',
			'mail' => 'Mail',
			'idenvio' => 'Enviar',
			'nombre' => 'Nombre Completo',
			'mensaje' => 'Mensaje',
			'email'=>'Mail',
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

		$criteria->compare('id_mail',$this->id_mail);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('idenvio',$this->idenvio);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}