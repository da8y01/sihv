<?php

/**
 * This is the model class for table "formacionacademica".
 *
 * The followings are the available columns in table 'formacionacademica':
 * @property integer $id
 * @property integer $idFormatoHV
 * @property string $educacionBasica
 * @property string $tituloObtenido
 * @property string $anioGrado
 * @property string $mesGrado
 */
class Formacionacademica extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'idFormatoHV'=>'idFormatoHV' ,  'educacionBasica'=>'educacionBasica' ,  'tituloObtenido'=>'tituloObtenido' ,  'anioGrado'=>'anioGrado' ,  'mesGrado'=>'mesGrado'  );
	public static $arrayMeses = array( '01'=>'Enero', '02'=>'Febrero', '03'=>'Marzo', '04'=>'Abril', '05'=>'Mayo', '06'=>'Junio', '07'=>'Julio', '08'=>'Agosto', '09'=>'Septiembre', '10'=>'Octubre', '11'=>'Noviembre', '12'=>'Diciembre' );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Formacionacademica the static model class
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
		return 'formacionacademica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idFormatoHV, educacionBasica, tituloObtenido, anioGrado, mesGrado', 'required'),
			array('idFormatoHV', 'numerical', 'integerOnly'=>true),
			array('educacionBasica', 'length', 'max'=>2),
			array('tituloObtenido, anioGrado, mesGrado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idFormatoHV, educacionBasica, tituloObtenido, anioGrado, mesGrado', 'safe', 'on'=>'search'),
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
	 * @return array list "formacionacademica".
	 */
	public function getListFormacionacademicas()
	{
		return CHtml::listData(Formacionacademica::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "formacionacademica".
	 */
	public function getFormacionacademica($id)
	{
		return CHtml::listData(Formacionacademica::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->idFormatoHV.': '.  $this->educacionBasica.': '.  $this->tituloObtenido.': '.  $this->anioGrado.': '.  $this->mesGrado.': ' );
	}
	
	public static function getListTipos($key=null)
	{
		if($key!=null)
			return self::$arrayTipos[$key];
		return self::$arrayTipos;
	}
	
	public static function getListMeses($key=null)
	{
		if($key!=null)
			return self::$arrayMeses[$key];
		return self::$arrayMeses;
	}
	
	/**
	 * @return entero modelo para consultas complejas
	 */
	public static function getTotalFormacionacademica($id)
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
			'educacionBasica' => 'Educacion Basica',
			'tituloObtenido' => 'TÍTULO OBTENIDO',
			'anioGrado' => 'AÑO',
			'mesGrado' => 'MES',
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
		$criteria->compare('educacionBasica',$this->educacionBasica,true);
		$criteria->compare('tituloObtenido',$this->tituloObtenido,true);
		$criteria->compare('anioGrado',$this->anioGrado,true);
		$criteria->compare('mesGrado',$this->mesGrado,true);
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