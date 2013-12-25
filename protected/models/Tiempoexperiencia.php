<?php

/**
 * This is the model class for table "tiempoexperiencia".
 *
 * The followings are the available columns in table 'tiempoexperiencia':
 * @property integer $id
 * @property integer $idFormatoHV
 * @property string $ocupacion
 * @property integer $years
 * @property integer $meses
 */
class Tiempoexperiencia extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'idFormatoHV'=>'idFormatoHV' ,  'ocupacion'=>'ocupacion' ,  'years'=>'years' ,  'meses'=>'meses'  );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tiempoexperiencia the static model class
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
		return 'tiempoexperiencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFormatoHV, ocupacion, years, meses', 'required'),
			array('idFormatoHV, years, meses', 'numerical', 'integerOnly'=>true),
			array('ocupacion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idFormatoHV, ocupacion, years, meses', 'safe', 'on'=>'search'),
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
	 * @return array list "tiempoexperiencia".
	 */
	public function getListTiempoexperiencias()
	{
		return CHtml::listData(Tiempoexperiencia::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "tiempoexperiencia".
	 */
	public function getTiempoexperiencia($id)
	{
		return CHtml::listData(Tiempoexperiencia::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idFormatoHV.': '.  $this->ocupacion.': '.  $this->years.': '.  $this->meses.': ' );
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
	public static function getTotalTiempoexperiencia($id)
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
			'idFormatoHV' => 'Id Formato Hv',
			'ocupacion' => 'Ocupacion',
			'years' => 'Años',
			'meses' => 'Meses',
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
		$criteria->compare('idFormatoHV',$this->idFormatoHV);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('years',$this->years);
		$criteria->compare('meses',$this->meses);
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