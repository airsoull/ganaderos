<?php

/**
 * This is the model class for table "ev_mailenviar".
 *
 * The followings are the available columns in table 'ev_mailenviar':
 * @property integer $id_mailenviar
 * @property string $asunto
 * @property string $texto
 *
 * The followings are the available model relations:
 * @property Mailconmailenviado[] $mailconmailenviados
 */
class Mailenviar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mailenviar the static model class
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
		return 'ev_mailenviar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('asunto, texto', 'required'),
			array('asunto', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mailenviar, asunto, texto', 'safe', 'on'=>'search'),
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
			'mailconmailenviados' => array(self::HAS_MANY, 'Mailconmailenviado', 'id_mailenviar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mailenviar' => 'Id Mailenviar',
			'asunto' => 'Asunto',
			'texto' => 'Texto',
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

		$criteria->compare('id_mailenviar',$this->id_mailenviar);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('texto',$this->texto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}