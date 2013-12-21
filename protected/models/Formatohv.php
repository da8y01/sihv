<?php

/**
 * This is the model class for table "formatohv".
 *
 * The followings are the available columns in table 'formatohv':
 * @property integer $id
 * @property integer $idUsuario
 * @property integer $idCiudadDiligenciamiento
 * @property integer $idCiudadRecurHuma
 * @property string $entidadReceptora
 * @property string $fechaDiligenciamiento
 * @property string $firmaSerContra
 * @property string $observaRecurHuma
 * @property string $fechaRecurHuma
 */
class Formatohv extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'idUsuario'=>'idUsuario' ,  'idCiudadDiligenciamiento'=>'idCiudadDiligenciamiento' ,  'idCiudadRecurHuma'=>'idCiudadRecurHuma' ,  'entidadReceptora'=>'entidadReceptora' ,  'fechaDiligenciamiento'=>'fechaDiligenciamiento' ,  'firmaSerContra'=>'firmaSerContra' ,  'observaRecurHuma'=>'observaRecurHuma' ,  'fechaRecurHuma'=>'fechaRecurHuma'  );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Formatohv the static model class
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
		return 'formatohv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idCiudadDiligenciamiento, entidadReceptora, fechaDiligenciamiento', 'required'),
			array('idUsuario, idCiudadDiligenciamiento, idCiudadRecurHuma', 'numerical', 'integerOnly'=>true),
			array('entidadReceptora, firmaSerContra, observaRecurHuma, fechaRecurHuma', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idUsuario, idCiudadDiligenciamiento, idCiudadRecurHuma, entidadReceptora, fechaDiligenciamiento, firmaSerContra, observaRecurHuma, fechaRecurHuma', 'safe', 'on'=>'search'),
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
	 * @return array list "formatohv".
	 */
	public function getListFormatohvs()
	{
		return CHtml::listData(Formatohv::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "formatohv".
	 */
	public function getFormatohv($id)
	{
		return CHtml::listData(Formatohv::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idUsuario.': '.  $this->idCiudadDiligenciamiento.': '.  $this->idCiudadRecurHuma.': '.  $this->entidadReceptora.': '.  $this->fechaDiligenciamiento.': '.  $this->firmaSerContra.': '.  $this->observaRecurHuma.': '.  $this->fechaRecurHuma.': ' );
	}
	
	public static function getListTipos($key=null)
	{
		if($key!=null)
			return self::$arrayTipos[$key];
		return self::$arrayTipos;
	}
	
	/**
	 * @return entero modelo para consultas complejas
	 */
	public static function getTotalFormatohv($id)
	{
		$count = Yii::app()->db->createCommand('SELECT COUNT(me.idOferta) FROM operacion as op INNER JOIN oferta as of ON (op.id=of.idOperacion) INNER JOIN mensaje as me ON (of.id=me.idOferta) WHERE op.id =:idOperacion');
		$count->bindParam(':idOperacion', $idOperacion, PDO::PARAM_STR);
		$total = $count->queryScalar();
		return $total;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idUsuario' => 'Id Usuario',
			'idCiudadDiligenciamiento' => 'Id Ciudad Diligenciamiento',
			'idCiudadRecurHuma' => 'Id Ciudad Recur Huma',
			'entidadReceptora' => 'ENTIDAD RECEPTORA',
			'fechaDiligenciamiento' => 'Fecha Diligenciamiento',
			'firmaSerContra' => 'Firma Ser Contra',
			'observaRecurHuma' => 'Observa Recur Huma',
			'fechaRecurHuma' => 'Fecha Recur Huma',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('idCiudadDiligenciamiento',$this->idCiudadDiligenciamiento);
		$criteria->compare('idCiudadRecurHuma',$this->idCiudadRecurHuma);
		$criteria->compare('entidadReceptora',$this->entidadReceptora,true);
		$criteria->compare('fechaDiligenciamiento',$this->fechaDiligenciamiento,true);
		$criteria->compare('firmaSerContra',$this->firmaSerContra,true);
		$criteria->compare('observaRecurHuma',$this->observaRecurHuma,true);
		$criteria->compare('fechaRecurHuma',$this->fechaRecurHuma,true);
		/**
		 * if(Yii::app()->user->checkAccess('rol_admin'))
		 *{
		 *	$criteria->with = array('participantes'=>array('select'=>'participantes.idTransportadoras','together'=>true));
		 *	$criteria->compare('participantes.idTransportadoras',Yii::app()->user->getState('idTransportador'),true);
		 *	$criteria->with = array('devolucion.prestamo.usuarioMateria');
		 *	$criteria->compare('usuarioMateria.idUsuario',Yii::app()->user->id,true);  
		 *}
		 *
		 */
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}