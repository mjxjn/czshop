<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	// maximum number of login attempts before display captcha
	const MAX_LOGIN_ATTEMPTS = 3;

	public $username;
	public $password;
	public $verifyCode;
	public $rememberMe;
	private $_user = null;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username', 'required','message'=>'用户名必填'),
			array('password', 'required','message'=>'密码必填'),

			array('username', 'length', 'min'=>5, 'max'=>12),
			array('password', 'length', 'min'=>5, 'max'=>12),
			array('password', 'compare', 'compareAttribute'=>'password2', 'on'=>'register'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean', 'on'=>'login'),
			// password needs to be authenticated
			array('password', 'authenticate', 'on'=>'login'),
			array('verifyCode', 'validateCaptcha'),
			array('verifyCode','required','message'=>'验证码必填'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on'=>'login'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username' => '用户名',
			'password' => '密码',
			'rememberMe'=>'下次登录记住密码',
			'verifyCode'=>'验证码',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate()){
				if (($user = $this->user) !== null && $user->login_attempts < 100)
					$user->saveAttributes(array('login_attempts' => $user->login_attempts + 1));
				$this->addError('password','用户名或密码错误.');
			}
		}
	}

	/**
	 * Validates captcha code
	 * @param $attribute
	 * @param $params
	 */
	public function validateCaptcha($attribute, $params) {
		if ($this->getRequireCaptcha())
			CValidator::createValidator('captcha', $this, $attribute, $params)->validate($this);
	}

	/**
	 * Returns whether it requires captcha or not
	 * @return bool
	 */
	public function getRequireCaptcha() {
		return ($user = $this->user) !== null && $user->login_attempts >= self::MAX_LOGIN_ATTEMPTS;
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}

	/**
	 * Returns
	 * @return null
	 */
	public function getUser() {
		if ($this->_user === null) {
			$this->_user = Admin::model()->find(array('condition' => 'LOWER(admin_name)=:loginname', 'params' => array(':loginname' => strtolower($this->username))));
		}
		return $this->_user;
	}
}
