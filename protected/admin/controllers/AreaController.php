<?php
/**
 * Regional Settings
 * @author DouShiChao <coolboydsc@163.com>
*/
class AreaController extends Controller
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
				'actions'=>array('index','view','ajaxregion','ajaxArea','ajaxList'),
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
		$model=new Area;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Area']))
		{
			$model->attributes=$_POST['Area'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->area_id));
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

		if(isset($_POST['Area']))
		{
			$model->attributes=$_POST['Area'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->area_id));
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
	 * Region List
	 * @author DouShiChao <coolboydsc@163.com>
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Area',array(
		    'criteria'=>array(
		        'condition'=>'grade = 1',
		        'order'=>'area_id ASC',
		    ),
		    'pagination'=>array(
		        'pageSize'=>15,
		    ),
		));
		
		//获取所有的省份
		$area_model = Area::model();
		$condition = "grade = 1";
		$list = $area_model->findAll($condition);
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'list'=>$list,
		));

	}
	/**
	 * Ajax get level 2 and level 3 region List
	 * @param int grade level
	 * @param int id get region list of parent id
	 * @return html region List
	 * @author DouShiChao <coolboydsc@163.com>
	*/
	public function actionAjaxregion(){
		if(isset($_POST['id']) && $_POST['ajax'] ==='ajax' && isset($_POST['grade']))
        {
            $area_model = Area::model();

            $criteria = new CDbCriteria();

        	$criteria->condition = "grade = ".$_POST['grade']." and pid = ".$_POST['id'];

        	$area_list = $area_model->findAll($criteria);

        	foreach ($area_list as $key => $value) {
        		if($_POST['grade'] === "2"){
        			$span = '
						<td width="20"></td>
						<td width="20">
							<span class="icon icon-color icon-add" onclick="show_region('.$value['area_id'].',3)"></span>
						</td>';
					$other = '<a class="btn btn-success" href="#"><i class="icon-edit icon-white"></i>添加子地区</a>';
        		}elseif ($_POST['grade'] === "3") {
        			$span = '<td width="20" colspan=2></td>';
			    }
			    $html .= '<tr id="area_'.$value['area_id'].'" class="area_'.$_POST['id'].'">'.$span.'
						<td>'.$value['area_id'].'</td>
						<td class="center">'.$value['area_name'].'</td>
						<td class="center">'.$value['grade'].'</td>
						<td class="center">'.$value['sort'].'</td>
						<td class="center">'.$other.'
							<a class="btn btn-info" href="#"> <i class="icon-edit icon-white"></i>
								编辑
							</a>
							<a class="btn btn-danger" href="#">
								<i class="icon-trash icon-white"></i>
								删除
							</a>
						</td>
					</tr>';
        		}
        	echo $html;
        }
	}
	/**
	 * Ajax get level 2 and level 3 region List
	 * @param int grade level
	 * @param int id get region list of parent id
	 * @return html region List
	 * @author DouShiChao <coolboydsc@163.com>
	*/
	public function actionAjaxList(){
		if(isset($_POST['id']) && $_POST['ajax'] ==='ajax')
        {
            $area_model = Area::model();

            $criteria = new CDbCriteria();

        	$criteria->condition = "grade = 2 and pid = ".$_POST['id'];

        	$area_list = $area_model->findAll($criteria);

        	foreach ($area_list as $key => $value) {
			    $html .= '<p class="List_area_'.$_POST['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon icon-color icon-treeview-vertical-line"></span>&nbsp;<button class="btn" type="button" id="parent_area">'.$value['area_name'].'</button></p>';
        	}

        	echo $html;
        }
	}
	/**
	 * Ajax Get A Area Data
	 * @param integer $id the ID of the model to be displayed
	 * @return json Area Data
	 */
	public function actionAjaxArea()
	{
		if (isset($_POST['id']) && $_POST['ajax'] ==='ajax') {

			$area_model = Area::model();

			$area = $area_model->findByPk($_POST['id']);

			echo CJSON::encode( $area );
		}
		
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Area('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Area']))
			$model->attributes=$_GET['Area'];

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
		$model=Area::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='area-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}