<?php

/**
 * This is the model class for table "experiencialaboral".
 *
 * The followings are the available columns in table 'experiencialaboral':
 * @property integer $id
 * @property integer $idFormatoHV
 * @property integer $idPais
 * @property integer $idDepartamento
 * @property integer $idMunicipio
 * @property string $tipoContrato
 * @property string $empresa
 * @property string $tipo
 * @property string $emailEntidad
 * @property string $telefonos
 * @property string $fechaIngreso
 * @property string $fechaRetiro
 * @property string $cargo
 * @property string $dependencia
 * @property string $direccion
 */
class Experiencialaboral extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'idFormatoHV'=>'idFormatoHV' ,  'idPais'=>'idPais' ,  'idDepartamento'=>'idDepartamento' ,  'idMunicipio'=>'idMunicipio' ,  'tipoContrato'=>'tipoContrato' ,  'empresa'=>'empresa' ,  'tipo'=>'tipo' ,  'emailEntidad'=>'emailEntidad' ,  'telefonos'=>'telefonos' ,  'fechaIngreso'=>'fechaIngreso' ,  'fechaRetiro'=>'fechaRetiro' ,  'cargo'=>'cargo' ,  'dependencia'=>'dependencia' ,  'direccion'=>'direccion'  );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Experiencialaboral the static model class
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
		return 'experiencialaboral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFormatoHV, idPais, idDepartamento, idMunicipio, tipoContrato, empresa, tipo, fechaIngreso, cargo', 'required'),
			array('idFormatoHV, idPais, idDepartamento, idMunicipio', 'numerical', 'integerOnly'=>true),
			array('tipoContrato', 'length', 'max'=>8),
			array('empresa, emailEntidad, telefonos, fechaRetiro, cargo, dependencia, direccion', 'length', 'max'=>45),
			array('tipo', 'length', 'max'=>7),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idFormatoHV, idPais, idDepartamento, idMunicipio, tipoContrato, empresa, tipo, emailEntidad, telefonos, fechaIngreso, fechaRetiro, cargo, dependencia, direccion', 'safe', 'on'=>'search'),
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
	 * @return array list "experiencialaboral".
	 */
	public function getListExperiencialaborals()
	{
		return CHtml::listData(Experiencialaboral::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "experiencialaboral".
	 */
	public function getExperiencialaboral($id)
	{
		return CHtml::listData(Experiencialaboral::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idFormatoHV.': '.  $this->idPais.': '.  $this->idDepartamento.': '.  $this->idMunicipio.': '.  $this->tipoContrato.': '.  $this->empresa.': '.  $this->tipo.': '.  $this->emailEntidad.': '.  $this->telefonos.': '.  $this->fechaIngreso.': '.  $this->fechaRetiro.': '.  $this->cargo.': '.  $this->dependencia.': '.  $this->direccion.': ' );
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
	public static function getTotalExperiencialaboral($id)
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
			'idPais' => 'Id Pais',
			'idDepartamento' => 'Id Departamento',
			'idMunicipio' => 'Id Municipio',
			'tipoContrato' => 'Tipo Contrato',
			'empresa' => 'Empresa',
			'tipo' => 'Tipo',
			'emailEntidad' => 'Email Entidad',
			'telefonos' => 'Telefonos',
			'fechaIngreso' => 'Fecha Ingreso',
			'fechaRetiro' => 'Fecha Retiro',
			'cargo' => 'Cargo',
			'dependencia' => 'Dependencia',
			'direccion' => 'Direccion',
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
		$criteria->compare('idPais',$this->idPais);
		$criteria->compare('idDepartamento',$this->idDepartamento);
		$criteria->compare('idMunicipio',$this->idMunicipio);
		$criteria->compare('tipoContrato',$this->tipoContrato,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('emailEntidad',$this->emailEntidad,true);
		$criteria->compare('telefonos',$this->telefonos,true);
		$criteria->compare('fechaIngreso',$this->fechaIngreso,true);
		$criteria->compare('fechaRetiro',$this->fechaRetiro,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('dependencia',$this->dependencia,true);
		$criteria->compare('direccion',$this->direccion,true);
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