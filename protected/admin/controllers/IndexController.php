<?php

class IndexController extends Controller
{

	public function filters()
	{
		return array(
		    'accessControl',
		);
	}

	/**
actions: 设置哪个动作匹配此规则。
users: 设置哪个用户匹配此规则。 此当前用户的name 被用来匹配. 三种设定字符在这里可以用：
	*: 任何用户，包括匿名和验证通过的用户。
	?: 匿名用户。
	@: 验证通过的用户。
roles: 设定哪个角色匹配此规则。 这里用到了将在后面描述的role-based access control技术。In particular, the rule is applied if CWebUser::checkAccess returns true for one of the roles.提示，用户角色应该被设置成allow规则，因为角色代表能做某些事情。
ips: 设定哪个客户端IP匹配此规则。
verbs: 设定哪种请求类型(例如：GET, POST)匹配此规则。
expression: 设定一个PHP表达式。它的值用来表明这条规则是否适用。在表达式，你可以使用一个叫$user的变量，它代表的是Yii::app()->user。这个选项是在1.0.3版本里引入的。
	 * @return [type] [description]
	 */
	public function accessRules() {
	        return array(
	            array('allow', // Allow registration form for anyone
			'actions' => array('login', 'captcha', 'error'),
			'users' => array('*'),
		),
		array('allow', // Allow all actions for logged in users ("@")
			'actions' => array('index', 'logout'),
			'users' => array('@'),
		),
		array('deny',
			'users' => array('*'),
		), 
	        );
	}

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
				'foreColor' => 0x0099CC,
				'minLength' => 4,
				'maxLength' => 4,
				'width' => 80,
				'height' => 28,
				'padding' => 0,
				'offset' => 5,
				'transparent'=>true,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}