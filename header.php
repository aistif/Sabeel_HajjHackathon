<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="style/bootstrap.css" rel="stylesheet">
        <link href="style//bootstrap-responsive.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.js"></script>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6/html5shiv.min.js"></script>
        <![endif]-->
        
        <script Language="JavaScript" src="js/sabeelJS.js"></script>
     
        <!-- Fav and touch icons
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/ico/favicon.png"> -->
    </head>
    <body>
	<?php $str = $_SERVER['REQUEST_URI'];?>
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="brand" href="" disabled="disabled"></a> -->
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li class="<?php echo (strpos($str, 'index.php') == true ? "active" : "");?>"><a href="index.php">الرئيسية</a></li>
                  <li class="<?php echo (strpos($str, 'support.php') == true ? "active" : "");?>"><a href="support.php">الدعم الفني</a></li>
                  <li class="<?php echo (strpos($str, 'contactus.php') == true ? "active" : "");?>"><a href="contactus.php">اتصل بنا</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>