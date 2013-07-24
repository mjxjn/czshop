<?php
//兼容win和linux目录分隔符
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
/**
 * 公共方法Commerz Function
 * User: maxiang
 */

class CF {

	/**
	  +----------------------------------------------------------
	 * 取baseUrl根目录下images/Css/Js/Assets的路径
	  +----------------------------------------------------------
	 * @static
	 * @access public
	  +----------------------------------------------------------
	 * @param  string  $url
	 * @param  boolean $useBaseDir 
	 * @param  string  $defaultDir
	  +---------------------------------------------------------- 
	 * @return string  
	  +----------------------------------------------------------            
	 */
	static public function imageUrl($url, $useBaseDir = false, $defaultDir = 'images')
	{
	    if (module() && !$useBaseDir)
	        $imgPath = getAssetsUrl();
	    else
	        $imgPath = Yii::app()->baseUrl;
	    return $imgPath . '/' . $defaultDir . '/' . $url;
	}

	static public function cssUrl($url, $useBaseDir = false, $defaultDir = 'css')
	{
	    if (module() && !$useBaseDir)
	        $cssPath = getAssetsUrl();
	    else
	        $cssPath = Yii::app()->baseUrl;
	    return $cssPath . '/' . $defaultDir . '/' . $url;
	}

	static public function jsUrl($url, $useBaseDir = false, $defaultDir = 'js')
	{
	    if (module() && !$useBaseDir)
	        $jsPath = getAssetsUrl();
	    else
	        $jsPath = Yii::app()->baseUrl;
	    return $jsPath . '/' . $defaultDir . '/' . $url;
	}

	static public function assetsUrl($url, $useBaseDir = false, $defaultDir = 'assets')
	{
	    if (module() && !$useBaseDir)
	        $assetsPath = getAssetsUrl();
	    else
	        $assetsPath = Yii::app()->baseUrl;
	    return $assetsPath . '/' . $defaultDir . '/' . $url;
	}

	/**
	  +----------------------------------------------------------
	 * @return LBaseModule 没有则返回null
	  +----------------------------------------------------------
	 */
	function module()
	{
	    return Yii::app()->getController()->getModule();
	}

	/**
	  +----------------------------------------------------------
	 * CHtml::asset() 方法的意义！
	  +----------------------------------------------------------
	 * @param string $moduleName
	  +----------------------------------------------------------
	 * @return string
	  +---------------------------------------------------------- 
	 */
	function getAssetsUrl($moduleName = '')
	{
	    if ($moduleName)
	        return Yii::app()->getModule($moduleName)->getAssetsUrl();
	    else
	        return module()->getAssetsUrl();
	}

	/**
	  +----------------------------------------------------------
	 * 取得字符串的长度，包括中英文。
	  +----------------------------------------------------------
	 * @param  string    $text 
	  +----------------------------------------------------------
	 * @return integer   字符串长度
	  +----------------------------------------------------------
	 */
    function getStringLength($text) {
        if (function_exists('mb_substr')) {
            $length = mb_strlen($text, 'UTF-8');
        } elseif (function_exists('iconv_substr')) {
            $length = iconv_strlen($text, 'UTF-8');
        } else {
            preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $text, $ar);
            $length = count($ar[0]);
        }
        return $length;
    }

	/**
      +----------------------------------------------------------
     * 字符串截取，支持中文和其他编码
      +----------------------------------------------------------
     * @static
     * @access public
      +----------------------------------------------------------
     * @param string $str 需要转换的字符串
     * @param string $start 开始位置
     * @param string $length 截取长度
     * @param string $charset 编码格式
     * @param string $suffix 截断显示字符
      +----------------------------------------------------------
     * @return string
      +----------------------------------------------------------
     */
    static public function msubstr($str, $start = 0, $length, $charset = "utf-8", $suffix = true) {
        if (function_exists("mb_substr"))
            return mb_substr($str, $start, $length, $charset);
        elseif (function_exists('iconv_substr')) {
            return iconv_substr($str, $start, $length, $charset);
        }
        $re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("", array_slice($match[0], $start, $length));
        if ($suffix)
            return $slice . "…";
        return $slice;
    }

    /**
      +----------------------------------------------------------
     * 获取客户端ip地址
      +----------------------------------------------------------
     * @static
     * @access public
      +----------------------------------------------------------
     * @return string
      +----------------------------------------------------------
     */
    static public function getClientIp()
	{
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
	        $ip = getenv("HTTP_CLIENT_IP");
	    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
	        $ip = getenv("HTTP_X_FORWARDED_FOR");
	    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
	        $ip = getenv("REMOTE_ADDR");
	    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
	        $ip = $_SERVER['REMOTE_ADDR'];
	    else
	        $ip = "unknown";
	    return ($ip);
	}

	/**
	  +----------------------------------------------------------
     * 获得当前格林威治时间的时间戳
      +----------------------------------------------------------
     * @return  integer
      +----------------------------------------------------------
     */
    function gmtime() {
        return (time() - date('Z'));
    }

    /**
      +----------------------------------------------------------
     * 得到新订单号
      +----------------------------------------------------------
     * @return  string
      +----------------------------------------------------------
     */
    static public function get_order_id() {
        /* 选择一个随机的方案 */
        mt_srand((double) microtime() * 1000000);
        return date('Ymd') . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
    }
}