<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property string $email
 * @property string $username
 * @property string $pasword
 * @property string $session
 */
class Usuario extends CActiveRecord
{
	private static $dboperar = NULL;
	public static $arrayTipos = array( 'id'=>'id' ,  'nombres'=>'nombres' ,  'apellidos'=>'apellidos' ,  'cedula'=>'cedula' ,  'email'=>'email' ,  'username'=>'username' ,  'pasword'=>'pasword' ,  'session'=>'session'  );
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, cedula, email, username, pasword', 'required'),
			array('nombres, apellidos, cedula, email, username, pasword, session', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombres, apellidos, cedula, email, username, pasword, session', 'safe', 'on'=>'search'),
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
	 * @return array list "usuario".
	 */
	public function getListUsuarios()
	{
		return CHtml::listData(Usuario::model()->findAll(),'id','concate');
	}
	
	/**
	 * @return array list "usuario".
	 */
	public function getUsuario($id)
	{
		return CHtml::listData(Usuario::model()->findByPk($id),'id','concate');
	}

	public function getConcate()
	{
		return ( $this->id.': '.  $this->nombres.': '.  $this->apellidos.': '.  $this->cedula.': '.  $this->email.': '.  $this->username.': '.  $this->pasword.': '.  $this->session.': ' );
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
	public static function getTotalUsuario($id)
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
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'cedula' => 'Cedula',
			'email' => 'Email',
			'username' => 'Username',
			'pasword' => 'Pasword',
			'session' => 'Session',
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
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('pasword',$this->pasword,true);
		$criteria->compare('session',$this->session,true);
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