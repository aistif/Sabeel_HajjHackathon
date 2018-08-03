<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/jquery.plugin.js" type="text/javascript"></script>
        <script src="../js/sabeelJS.js" type="text/javascript"></script>
        <link href="../style/bootstrap.css" rel="stylesheet">
        <link href="../style/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
	<?php $str = $_SERVER['REQUEST_URI'];?>
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
                <img src="../img/Sabeel-Logo-Green.png" width="90">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="brand" href="" disabled="disabled"></a> -->
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li class="<?php echo (strpos($str, 'index.php') == true ? "active" : "");?>"><a href="index.php">الرئيسية</a></li>
                  <li><a href="../logout.php">تسجيل خروج</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>
        <div class="container-fluid">
        <div class="row-fluid">
        <div class="span9">
          <div class="hero-unit-s" align="center">