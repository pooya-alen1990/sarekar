<!DOCTYPE HTML> <!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="en"><![endif]--> <!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="en"><![endif]--> <!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"><![endif]--> <!--[if gt IE 8]>
<html class="no-js ie9" lang="en"><![endif]-->
<html>
<head>
    <meta charset="utf-8"/>
    <title>داروخانه</title>
    <meta name="description" content="">
    <meta name="author" content="rayweb.ir | شرکت طراحی وب سایت رای وب">
    <meta name="robots" content="index,follow"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"
    type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/master.css"/>-->
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
        
<script type="text/javascript"
        src="js/jquery.js"></script>
<script type="text/javascript"
        src="js/bootstrap.min.js"></script>
    <!--[if IE 8]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> <![endif]--></head>
<body>
<div class="container-fluid header-bg">
	<div class="col-md-10 col-md-offset-1">
    	<div class="logo col-md-3">
        	<img class="img-responsive" src="images/logo.png">
        </div>
        <div class="col-md-9 top-header">
        	<ul>
            	<li><a href="#">ثبت نام</a></li>
                <li><a href="#">ورود</a></li>
            </ul>
            <h3>اولین سایت خوب</h3>
        </div>
        <div class="clearfix"></div>
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">جستجو</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">صفحه اصلی</a></li>
        <li><a href="#">کارجو</a></li>
        <li><a href="#">کارفرما</a></li>
        <li><a href="#">درباره ما</a></li>
        <li><a href="#">تماس با ما</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>
</div>
	<div class="container-fluid header-bg1">
    <div class="col-md-10 col-md-offset-1" style="padding:0 17px;">
		<div class="header-bottom">
        	<ul>
            	<li><a href="#">راهنما</a></li>
                <li><a href="#">نقشه سایت</a></li>
                <li class="pull-left"><a><i class="fa fa-users"></i> تعداد کارجو : 1000 نفر</a></li>
                
                
            </ul>
        </div>
        </div>
    </div>
	<div class="col-md-10 col-md-offset-1">
<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}


?>
	</div>
    <div class="clearfix"></div>
    <div class="footer">
    
    </div>
    <div class="footer-end">
    
    </div>

</body>
</html>