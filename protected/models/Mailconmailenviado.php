<?php

/**
 * This is the model class for table "ev_mailconmailenviado".
 *
 * The followings are the available columns in table 'ev_mailconmailenviado':
 * @property integer $id_mailenviar
 * @property integer $id_mail
 *
 * The followings are the available model relations:
 * @property Mailenviar $idMailenviar
 * @property Mail $idMail
 */
class Mailconmailenviado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mailconmailenviado the static model class
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
		return 'ev_mailconmailenviado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mailenviar, id_mail', 'required'),
			array('id_mailenviar, id_mail', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mailenviar, id_mail', 'safe', 'on'=>'search'),
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
			'idMailenviar' => array(self::BELONGS_TO, 'Mailenviar', 'id_mailenviar'),
			'idMail' => array(self::BELONGS_TO, 'Mail', 'id_mail'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mailenviar' => 'Id Mailenviar',
			'id_mail' => 'Id Mail',
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
		$criteria->compare('id_mail',$this->id_mail);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}