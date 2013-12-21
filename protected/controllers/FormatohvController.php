<?php

class FormatohvController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('viewPublic','create'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'roles'=>array('rol_admin','rol_funcionario'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'roles'=>array('rol_admin','rol_funcionario'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','administracion','pdf','excel','txt'),
				'roles'=>array('rol_admin','rol_adminFuncDepend','rol_elaborar','rol_revisar','rol_aprobar','rol_crear'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('view',array(
				'model'=>$this->loadModel($id),
			),false,true);
		}
		else{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionViewPublic()
	{
		$model=new Formatohv;
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('viewPublic',array(
				'model'=>$model,
			),false,true);
		}
		else{
			$this->render('viewPublic',array(
				'model'=>$model,
			));
		}
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionAdministracion()
	{
		$model=new Formatohv;
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('administracion',array(
				'model'=>$model,
			),false,true);
		}
		else{
			$this->render('administracion',array(
				'model'=>$model,
			));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model               = new Formatohv;
		$datosPersonales     = new Datospersonales;
		$formacionAcademica  = new Formacionacademica;
		
		$educacionSuperior   = new Educacionsuperior;
		$educacionSuperior2  = new Educacionsuperior;
		$educacionSuperior3  = new Educacionsuperior;
		$educacionSuperior4  = new Educacionsuperior;
		$educacionSuperior5  = new Educacionsuperior;
		
		$idioma              = new Idioma;
		$idioma2             = new Idioma;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Formatohv']))
		{
			$model->attributes=$_POST['Formatohv'];
			if($model->save()){
				if(Yii::app()->request->isAjaxRequest){
					echo (1)."---".$model->id;
					Yii::app()->end();
				}
				else{
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}
		
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('create',array(
				'model'=>$model,
			),false,true);
		}
		else{
			$this->render('create',array(
				'model'=>$model,
				'datosPersonales'=>$datosPersonales,
				'formacionAcademica'=>$formacionAcademica,
				'educacionSuperior'=>$educacionSuperior,
				'educacionSuperior2'=>$educacionSuperior2,
				'educacionSuperior3'=>$educacionSuperior3,
				'educacionSuperior4'=>$educacionSuperior4,
				'educacionSuperior5'=>$educacionSuperior5,
				'idioma'=>$idioma,
				'idioma2'=>$idioma2,
			));
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Formatohv']))
		{
			$model->attributes=$_POST['Formatohv'];
			if($model->save()){
				if(Yii::app()->request->isAjaxRequest){
					echo (1)."---".$model->id;
					Yii::app()->end();
				}			
				else{
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}
		
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('update',array(
				'model'=>$model,
			),false,true);
		}
		else{
			$this->render('update',array(
				'model'=>$model,
			));
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Formatohv');
		
		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('index',array(
				'dataProvider'=>$dataProvider,
			),false,true);
		}
		else
		{
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Formatohv('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Formatohv']))
			$model->attributes=$_GET['Formatohv'];

		if(Yii::app()->request->isAjaxRequest){
			$this->renderPartial('admin',array(
				'model'=>$model,
			),false,true);
		}
		else
		{
			$this->render('admin',array(
				'model'=>$model,
			));
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Formatohv::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='formatohv-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionPdf() {
		//$model=new Formatohv('search');
		//$model->unsetAttributes();  // clear any default values
		//$dataProvider=new CActiveDataProvider('Formatohv');
		$model=Formatohv::model()->findAll();
		if(isset($_GET['pdf']))
		{
			$this->layout = "//layouts/pdf";
			# mPDF
			$mPDF1 = Yii::app()->ePdf->mpdf();
			//$mPDF1->SetWatermarkImage(Yii::app()->request->baseUrl."/images/logo.jpg", 0.1, '', array(70,80));
			//$mPDF1->showWatermarkImage = true;
			
			 # render (full page)
			$mPDF1->WriteHTML($this->render('pdf',array(
				'model' => $model,
			),true));
			
			# Outputs ready PDF
			$mPDF1->Output('Formatohv_'.date("Y-m-d"),EYiiPdf::OUTPUT_TO_DOWNLOAD);
		}
    }
	
	public function actionExcel() {
		
		$model=Formatohv::model()->findAll();
		
		if(isset($_GET['excel']))
		{
			$content = $this->renderPartial('excel', array(
				'model' => $model,
			),false,true);
		}
		Yii::app()->request->sendFile("Formatohv_".date("Y-m-d").".xls",$content);
    }
}
