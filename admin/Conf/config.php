<?php
return array(
	//'配置项'=>'配置值'
	//'DB_DSN' => 'mysql://maxia5_czshop:7482925@mysql21.100ws.com:3306/maxia5_czshop',

	// 添加数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	//'DB_HOST'   => '113.10.137.161', // 服务器地址
	//'DB_NAME'   => 'my02', // 数据库名
	//'DB_USER'   => 'my02', // 用户名
	//'DB_PWD'    => 'doushichao', // 密码
	'DB_HOST'   => '127.0.0.1',
	'DB_NAME'   => 'commerz',
	'DB_USER'   => 'root',
	'DB_PWD'    => '',
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

	'LAYOUT_ON'=>true,//模板布局开启

	'URL_MODEL'=>0,//URL普通模式

	'URL_CASE_INSENSITIVE' =>true,//URL不区分大小写

	'DB_FIELDTYPE_CHECK'=>true,  // 开启字段类型验证

	'SHOW_PAGE_TRACE'      => true, //显示页面Trace信息

	'USER_AUTH_ON' => true,
	'USER_AUTH_TYPE' => 2,		// 默认认证类型 1 登录认证 2 实时认证
	'USER_AUTH_KEY' => 'uid',

	'ADMIN_AUTH_KEY' => 'administrator',
	'USER_AUTH_MODEL' => 'AdminUser',	// 默认验证数据表模型
	'AUTH_PWD_ENCODER' => 'md5',	// 用户认证密码加密方式
	'USER_AUTH_GATEWAY' => '/login/index',	// 默认认证网关
	'NOT_AUTH_MODULE'	 => 'Public',		// 默认无需认证模块
	'REQUIRE_AUTH_MODULE' => '',		// 默认需要认证模块
	'NOT_AUTH_ACTION'	=> '',		// 默认无需认证操作
	'REQUIRE_AUTH_ACTION' => '',		// 默认需要认证操作
    	'GUEST_AUTH_ON'  => false,    // 是否开启游客授权访问
    	'GUEST_AUTH_ID' => 0,     // 游客的用户ID
	'DB_LIKE_FIELDS' => 'title|remark',
	'RBAC_ROLE_TABLE' => 'cz_role',
	'RBAC_USER_TABLE' => 'cz_admin_user',
	'RBAC_ACCESS_TABLE' => 'cz_access',
	'RBAC_NODE_TABLE' => 'cz_node',

	'LANG_SWITCH_ON'=>true,
	'DEFAULT_LANG'=>'zh-cn',
	'LANG_AUTO_DETECT'=>true,
	//'LANG_LIST'=>'en-us,zh-cn,zh-tw',
);
?>