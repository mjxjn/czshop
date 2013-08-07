<?php
return array(
	//'配置项'=>'配置值'
	//'DB_DSN' => 'mysql://maxia5_czshop:7482925@mysql21.100ws.com:3306/maxia5_czshop',

	// 添加数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'mysql21.100ws.com', // 服务器地址
	'DB_NAME'   => 'maxia5_czshop', // 数据库名
	'DB_USER'   => 'maxia5_czshop', // 用户名
	'DB_PWD'    => '7482925', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'cz_', // 数据库表前缀


	'TOKEN_ON'=>true,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true

	'VAR_FILTERS'=>'filter_vars,strip_tags,htmlspecialchars',//安全过滤方式

	//'URL_ROUTER_ON'   => true, //开启路由
	
	'APP_STATUS' => 'debug', //应用调试模式状态

	'DEFAULT_THEME'=>'admin', //模版主题

	'SESSION_PREFIX'=>'admin_',//SESSION前缀
);
?>