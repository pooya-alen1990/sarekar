<?php
  $error = '';
  if(isset($_POST['go_login'])){
	  
	  $melli_code = $_POST['melli_code'];
	  $password = sha1($_POST['password']);
	  
	  $login_query = "SELECT * FROM users WHERE melli_code = '$melli_code' AND password = '$password' LIMIT 1 ; ";
	  $login_result = mysqli_query($connection,$login_query);
	  $login_row = mysqli_fetch_assoc($login_result);
  
	  if(isset($login_row['id'])){
		  
		  $_SESSION['active_user_id'] = $login_row['id'];
		  header('Location: ?page=profile');
		  
	  }else{
			  $error = LOGIN_FAILED;
	  }
  
  }
        
?>
<div class="home">
	<?php include 'left_nav.php'; ?>
    
	<div class="col-md-8 signup">
    	<div class="col-xs-12">
        	<h3>ورود کارجو</h3>
            <hr class="hr-beauty">
    	<div>
        <?php echo $error; ?>
        <form method="post" role="form" class="form-horizontal" dir="rtl">
        
            <div class="form-group">
                <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">کد ملی : </label>
                <div class="col-sm-5 col-xs-12 pull-right">
                    <input class="form-control" type="text" name="melli_code" tabindex="1" autofocus>
                </div>  
            </div>
            
            <div class="form-group">
                <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">کلمه عبور : </label>
                <div class="col-sm-5 col-xs-12 pull-right">
                    <input class="form-control" type="password" name="password" tabindex="2">
                </div>  
            </div>
            
            <div class="col-xs-12 text-center margin-bottom-20">
                <input type="submit" name="go_login" class="btn btn-warning submit " value="ورود" tabindex="3" >
            </div>
        </form>
        <ul>
            <li style="display:block"><a href="?page=signup"><i class="fa fa-user"></i> ثبت نام </a></li>
            <li style="display:block"><a href="?page=remember"><i class="fa fa-question"></i> فراموشی کلمه عبور </a></li>
        </ul>
        </div>
    </div>
</div>
</div>