<?php

/**
 * This is the model class for table "datospersonales".
 *
 * The followings are the available columns in table 'datospersonales':
 * @property integer $id
 * @property integer $idFormatoHV
 * @property integer $idPais
 * @property integer $idDepartamento
 * @property integer $idMunicipio
 * @property string $primerApellido
 * @property string $segundoApellido
 * @property string $nombres
 * @property string $tipoDocumento
 * @property string $documento
 * @property string $sexo
 * @property string $nacionalidad
 * @property string $tipoLibretaMilitar
 * @property string $numeroLibreta
 * @property string $distritoMilitar
 * @property string $fechaNacimiento
 * @property string $paisCorrespon
 * @property string $departCorrespon
 * @property string $municipioCorrespon
 * @property string $email
 */
class Datospersonales extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array('C.C'=>'C.C','C.E'=>'C.E','PAS'=>'PAS');
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Datospersonales the static model class
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
		return 'datospersonales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFormatoHV, idPais, idDepartamento, idMunicipio, primerApellido, segundoApellido, nombres, tipoDocumento, documento, sexo, nacionalidad, fechaNacimiento', 'required'),
			array('idFormatoHV, idPais, idDepartamento, idMunicipio', 'numerical', 'integerOnly'=>true),
			array('primerApellido, segundoApellido, nombres, documento, numeroLibreta, distritoMilitar, fechaNacimiento, paisCorrespon, departCorrespon, municipioCorrespon, email', 'length', 'max'=>45),
			array('tipoDocumento', 'length', 'max'=>3),
			array('sexo', 'length', 'max'=>1),
			array('nacionalidad', 'length', 'max'=>10),
			array('tipoLibretaMilitar', 'length', 'max'=>7),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idFormatoHV, idPais, idDepartamento, idMunicipio, primerApellido, segundoApellido, nombres, tipoDocumento, documento, sexo, nacionalidad, tipoLibretaMilitar, numeroLibreta, distritoMilitar, fechaNacimiento, paisCorrespon, departCorrespon, municipioCorrespon, email', 'safe', 'on'=>'search'),
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
	 * @return array list "datospersonales".
	 */
	public function getListDatospersonaless()
	{
		return CHtml::listData(Datospersonales::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "datospersonales".
	 */
	public function getDatospersonales($id)
	{
		return CHtml::listData(Datospersonales::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idFormatoHV.': '.  $this->idPais.': '.  $this->idDepartamento.': '.  $this->idMunicipio.': '.  $this->primerApellido.': '.  $this->segundoApellido.': '.  $this->nombres.': '.  $this->tipoDocumento.': '.  $this->documento.': '.  $this->sexo.': '.  $this->nacionalidad.': '.  $this->tipoLibretaMilitar.': '.  $this->numeroLibreta.': '.  $this->distritoMilitar.': '.  $this->fechaNacimiento.': '.  $this->paisCorrespon.': '.  $this->departCorrespon.': '.  $this->municipioCorrespon.': '.  $this->email.': ' );
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
	public static function getTotalDatospersonales($id)
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
			'idPais' => 'PAÍS',
			'idDepartamento' => 'Id Departamento',
			'idMunicipio' => 'Id Municipio',
			'primerApellido' => 'PRIMER APELLIDO',
			'segundoApellido' => 'SEGUNDO APELLIDO ( O DE CASADA )',
			'nombres' => 'NOMBRES',
			'tipoDocumento' => 'DOCUMENTO DE IDENTIFICACIÓN',
			'documento' => ' No.',
			'sexo' => 'SEXO',
			'nacionalidad' => 'NACIONALIDAD',
			'tipoLibretaMilitar' => 'LIBRETA MILITAR',
			'numeroLibreta' => 'NÚMERO',
			'distritoMilitar' => 'D.M',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'paisCorrespon' => 'Pais Correspon',
			'departCorrespon' => 'Depart Correspon',
			'municipioCorrespon' => 'Municipio Correspon',
			'email' => 'Email',
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
		$criteria->compare('primerApellido',$this->primerApellido,true);
		$criteria->compare('segundoApellido',$this->segundoApellido,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('tipoDocumento',$this->tipoDocumento,true);
		$criteria->compare('documento',$this->documento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('tipoLibretaMilitar',$this->tipoLibretaMilitar,true);
		$criteria->compare('numeroLibreta',$this->numeroLibreta,true);
		$criteria->compare('distritoMilitar',$this->distritoMilitar,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('paisCorrespon',$this->paisCorrespon,true);
		$criteria->compare('departCorrespon',$this->departCorrespon,true);
		$criteria->compare('municipioCorrespon',$this->municipioCorrespon,true);
		$criteria->compare('email',$this->email,true);
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