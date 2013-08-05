<?php

class SystemController extends Controller
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view','webinfo','saveSystem'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionWebinfo(){

	    $system_model = System::model();

	    $condition = "groupid = 1";
	    $list = $system_model->findAll($condition);
	    foreach ($list as $key => $value) {
	    	$array[$value['varname']]['varname'] = $value['varname'];
	    	$array[$value['varname']]['info'] = $value['info'];
	    	$array[$value['varname']]['groupid'] = $value['groupid'];
	    	$array[$value['varname']]['value'] = $value['value'];
	    	$array[$value['varname']]['lang'] = $value['lang'];
	    }
	    
	    $this->render('webinfo',array('list'=>$array));
	}
	public function actionSaveSystem(){

	    $system_model = System::model();

	    if(isset($_POST['groupid'])){
	    	foreach ($_POST as $key => $value) {
	    		$c=new CDbCriteria;
			$c->condition = "varname = '".$key."'";
			$a=array('value'=>$value);
			$result[$key] = $system_model->updateAll($a, $c);
	    	}
	    	$this->redirect(array('webinfo'));
	    }
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new System;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['System']))
		{
			$model->attributes=$_POST['System'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->varname));
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['System']))
		{
			$model->attributes=$_POST['System'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->varname));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('System');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new System('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['System']))
			$model->attributes=$_GET['System'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=System::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='system-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
