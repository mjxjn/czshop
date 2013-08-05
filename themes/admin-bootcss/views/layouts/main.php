<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="<?php echo F::themeUrl(); ?>/css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo F::themeUrl(); ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo F::themeUrl(); ?>/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo F::themeUrl(); ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo F::themeUrl(); ?>/css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo F::themeUrl(); ?>/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo F::themeUrl(); ?>/css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo F::themeUrl(); ?>/img/favicon.ico">
	
</head>

<body>

	<?php echo $content; ?>
	
</body>
</html>
	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery-1.7.2.min.js"></script>
	<!-- Bootstrap Min -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<!-- 此处删了一个js(<script src="js/bootstrap-modal.js"></script>) -->
	<!-- custom dropdown library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo F::themeUrl(); ?>/js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo F::themeUrl(); ?>/js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo F::themeUrl(); ?>/js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo F::themeUrl(); ?>/js/excanvas.js"></script>
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.flot.min.js"></script>
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.flot.stack.js"></script>
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo F::themeUrl(); ?>/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo F::themeUrl(); ?>/js/charisma.js"></script>