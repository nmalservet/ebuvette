<?php

class RetraitController extends AbstractController
{


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
		$model=new Retrait;
                $model->user_id=Yii::app()->user->id;
		if(isset($_POST['Retrait']))
		{
			$model->attributes=$_POST['Retrait'];
			if($model->save())
				$this->redirect(array('admin'));
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Retrait');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Retrait('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Retrait']))
			$model->attributes=$_GET['Retrait'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Retrait the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Retrait::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Retrait $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='retrait-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
