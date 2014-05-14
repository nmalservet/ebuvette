<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $id
 * @property string $prix_de_vente_unitaire
 * @property string $nom
 * @property string $cout_unitaire
 * @property integer $nombre_unite
 * @property string $date
 */
class Article extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prix_de_vente_unitaire, nom, cout_unitaire, nombre_unite,nombre_restant', 'required'),
			array('nombre_unite,nombre_restant', 'numerical', 'integerOnly'=>true),
			array('prix_de_vente_unitaire, cout_unitaire', 'length', 'max'=>6),
			array('nom', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, prix_de_vente_unitaire, nom, cout_unitaire, nombre_unite, date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'prix_de_vente_unitaire' => 'Prix De Vente Unitaire',
			'nom' => 'Nom',
			'cout_unitaire' => 'Cout Unitaire',
			'nombre_unite' => 'Nombre Unite',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('prix_de_vente_unitaire',$this->prix_de_vente_unitaire,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('cout_unitaire',$this->cout_unitaire,true);
		$criteria->compare('nombre_unite',$this->nombre_unite);
		$criteria->compare('date',$this->date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
