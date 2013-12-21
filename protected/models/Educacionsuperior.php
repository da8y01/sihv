<?php

/**
 * This is the model class for table "educacionsuperior".
 *
 * The followings are the available columns in table 'educacionsuperior':
 * @property integer $id
 * @property integer $idFormacionAcademica
 * @property string $modalidad
 * @property string $semestresAprobados
 * @property string $graduado
 * @property string $tituloObtenido
 * @property string $mesTerminacion
 * @property string $anioTerminacion
 * @property string $tarjetaProfesional
 */
class Educacionsuperior extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'idFormacionAcademica'=>'idFormacionAcademica' ,  'modalidad'=>'modalidad' ,  'semestresAprobados'=>'semestresAprobados' ,  'graduado'=>'graduado' ,  'tituloObtenido'=>'tituloObtenido' ,  'mesTerminacion'=>'mesTerminacion' ,  'anioTerminacion'=>'anioTerminacion' ,  'tarjetaProfesional'=>'tarjetaProfesional'  );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Educacionsuperior the static model class
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
		return 'educacionsuperior';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, idFormacionAcademica, modalidad, semestresAprobados, graduado, tituloObtenido, mesTerminacion, anioTerminacion', 'required'),
			array('id, idFormacionAcademica', 'numerical', 'integerOnly'=>true),
			array('modalidad', 'length', 'max'=>3),
			array('semestresAprobados, tituloObtenido, mesTerminacion, anioTerminacion, tarjetaProfesional', 'length', 'max'=>45),
			array('graduado', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idFormacionAcademica, modalidad, semestresAprobados, graduado, tituloObtenido, mesTerminacion, anioTerminacion, tarjetaProfesional', 'safe', 'on'=>'search'),
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
	 * @return array list "educacionsuperior".
	 */
	public function getListEducacionsuperiors()
	{
		return CHtml::listData(Educacionsuperior::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "educacionsuperior".
	 */
	public function getEducacionsuperior($id)
	{
		return CHtml::listData(Educacionsuperior::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idFormacionAcademica.': '.  $this->modalidad.': '.  $this->semestresAprobados.': '.  $this->graduado.': '.  $this->tituloObtenido.': '.  $this->mesTerminacion.': '.  $this->anioTerminacion.': '.  $this->tarjetaProfesional.': ' );
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
	public static function getTotalEducacionsuperior($id)
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
			'idFormacionAcademica' => 'Id Formacion Academica',
			'modalidad' => 'Modalidad',
			'semestresAprobados' => 'Semestres Aprobados',
			'graduado' => 'Graduado',
			'tituloObtenido' => 'Titulo Obtenido',
			'mesTerminacion' => 'Mes Terminacion',
			'anioTerminacion' => 'Anio Terminacion',
			'tarjetaProfesional' => 'Tarjeta Profesional',
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
		$criteria->compare('idFormacionAcademica',$this->idFormacionAcademica);
		$criteria->compare('modalidad',$this->modalidad,true);
		$criteria->compare('semestresAprobados',$this->semestresAprobados,true);
		$criteria->compare('graduado',$this->graduado,true);
		$criteria->compare('tituloObtenido',$this->tituloObtenido,true);
		$criteria->compare('mesTerminacion',$this->mesTerminacion,true);
		$criteria->compare('anioTerminacion',$this->anioTerminacion,true);
		$criteria->compare('tarjetaProfesional',$this->tarjetaProfesional,true);
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