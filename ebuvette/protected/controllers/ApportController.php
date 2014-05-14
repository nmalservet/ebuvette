<?php

class ApportController extends AbstractController
{



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Apport;
                $model->user_id=Yii::app()->user->id;
		if(isset($_POST['Apport']))
		{
			$model->attributes=$_POST['Apport'];
			if($model->save())
				$this->redirect(array('admin'));
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Apport('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Apport']))
			$model->attributes=$_GET['Apport'];

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
		$model=Apport::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
