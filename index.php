<?php require 'core/core.php'; ?>
<!DOCTYPE HTML> <!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="en"><![endif]--> <!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="en"><![endif]--> <!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"><![endif]--> <!--[if gt IE 8]>
<html class="no-js ie9" lang="en"><![endif]-->
<html>
<head>
    <meta charset="utf-8"/>
    <title>اولین وب سایت استخدام در کل کشور</title>
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
    	<div class="logo col-md-3 text-left">
        	<img src="images/logo.png">
        </div>
        <div class="col-md-9 top-header">
        	<ul>
            <?php
				if(!isset($_SESSION['active_user_id'])){
					echo '
					<li><a href="?page=signup"><i class="fa fa-user-plus"></i> ثبت نام </a></li>
					<li><a href="?page=login"><i class="fa fa-sign-in"></i> ورود </a></li>';
					
				}else{
					
					$user_login_id = $_SESSION['active_user_id'];
	
					$user_login_fetch_query = " SELECT * FROM `users` WHERE `id` = '$user_login_id' LIMIT 1 ; " ;
					$user_login_fetch_result = mysqli_query($connection,$user_login_fetch_query);
					$user_login_fetch_row = mysqli_fetch_assoc($user_login_fetch_result);
					
					echo '
					<li><a href="?page=profile"> '.$user_login_fetch_row['first_name'].' '.$user_login_fetch_row['last_name'].' </a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out"></i> خروج </a></li>';
					}
			?>
            </ul>
            <h3>اولین وب سایت استخدام در کل کشور</h3>
            <h5>با مجوز رسمی وزرات کار، تعاون و تامین اجتماعی</h5>
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
          <input type="text" class="form-control" placeholder="جستجو">
        </div>
        <button type="submit" class="btn btn-default submit">جستجو</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="pull-right bg"><a href="?page=home">صفحه اصلی</a></li>
        <li class="pull-right bg"><a href="#">کارجو</a></li>
        <li class="pull-right bg"><a href="#">کارفرما</a></li>
        <li class="pull-right bg"><a href="?page=about">درباره ما</a></li>
        <li class="pull-right"><a href="?page=contact">تماس با ما</a></li>
        
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
    	<div class="container">
        <div class="row">
            <div class="col-md-4">
            	<div>
                   <h4>ارتباط با ما</h4>
                   <hr class="hr-beauty">
                   <ul>
                        <li><i class="fa fa-taxi"></i> آدرس : خیابان شهید بهشتی ، بعد از خیابان میر عماد ، پلاک 294 ، طبقه پنجم ، واحد 501 </li>
                        <li><i class="fa fa-phone"></i> 88759591 (5 خط) - 021 </li>
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@barincard.com" title="Email Us"> info@barincard.com </a></li>
                        
                    </ul>
                 </div>
            </div>
            
            
            <div class="col-md-4">
            	<div class="col">
                    <h4>درباره ما</h4>
                    <hr class="hr-beauty">
                    <p align="justify">مجموعه رای وب از سال 1390 با هدف فعالیت در زمینه نرم افزار پا به عرصه وجود نهاد و به طور تخصصی فعالیت خود را به اینترنت و وب متمرکز ساخت. در این گذار ، چالش عمده ای پیش روی ما بود ، از طرفی می بایست کاری را عرضه می کردیم که در مقایسه با دیگر هم قطاران از سراسر دنیا بر یک محمل قرار گیرد ، همینطور توقعات روزافزون مشتریانمان را بر آورده سازد. </p>
                </div>
            </div>

             <div class="col-md-4">
             	<div class="col">
                    <h4>لینک های مرتبط</h4>
                    <hr class="hr-beauty">
                    <ul>
                    	<li><a href="/home/"><i class="fa fa-arrow-circle-o-left"></i> صفحه اصلی </a></li>
                        <li><a href="/article/"><i class="fa fa-arrow-circle-o-left"></i> کارجو</a></li>
                        <li><a href="/hire/"><i class="fa fa-arrow-circle-o-left"></i> کارفرما</a></li>
                        <li><a href="/courses/"><i class="fa fa-arrow-circle-o-left"></i> درباره ما</a></li>
                        <li><a href="/works/"><i class="fa fa-arrow-circle-o-left"></i> تماس با ما</a></li>
                        <li><a href="/about/"><i class="fa fa-arrow-circle-o-left"></i> شرایط استفاده</a></li>
                        <li><a href="/contact/"><i class="fa fa-arrow-circle-o-left"></i> نحوه خرید کارت</a></li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        
        <div class="container text-center col col-social-icons">
        <a href="https://www.facebook.com/raywebco" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://plus.google.com/communities/107271610650119455714"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <br>
        
        </div>
        
       
         
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="footer-end">
    	<p class="text-center">تمامی حقوق مادی و معنوی این وب سایت متعلق به شرکت یگانه نوآوران پویا می باشد.</p>
   		<p class="text-center">طراحی : <a href="http://rayweb.ir">رای وب</a></p>
    </div>
<a class="top_button" href="#" style="display:none;">&nbsp;</a>
<script>
	$(window).scroll(function() {
		if ($(this).scrollTop() > 500) {
			$('.top_button').fadeIn(500);
		} else {
			$('.top_button').fadeOut(500);
		}
	});							
	$('.top_button').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 800);
	});	

</script>
</body>
</html>