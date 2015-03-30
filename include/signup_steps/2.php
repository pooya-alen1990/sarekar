<?php
$error = '';
if(isset($_POST['go_register'])){
	
	$id = $_SESSION['user_id'];
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$melli_code = $_POST['melli_code'];
	$password = $_POST['password'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$soldiering_state = $_POST['soldiering_state'];
	$marriage_state = $_POST['marriage_state'];
	
	$users_query = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name', 
						`melli_code`='$melli_code',`password`=SHA1('$password'),`religion`='$religion',`gender`='$gender', 
								`soldiering_state`='$soldiering_state' ,`marriage_state`='$marriage_state'
										WHERE `id` = '$id' ; ";
										
	$users_result = mysqli_query($connection,$users_query);

	if($users_result){
		
		$_SESSION['signup_users'] = 3;
		header('Location: ?page=signup');
		
	}else{
		$error = SIGNUP_FAILED;
	}

}

?>
<?php echo $error; ?>
<form method="post" role="form" class="form-horizontal" dir="ltr">
    
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" name="first_name" required autofocus>
        <span class="input-group-addon">نام</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="last_name" required>
        <span class="input-group-addon">نام خانوادگی</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="melli_code" required>
        <span class="input-group-addon">کد ملی</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="password" class="form-control"  name="password" required>
        <span class="input-group-addon">کلمه عبور</span>
    </div>
  </div>

  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="religion">
            	<option>اسلام</option>
                <option>مسیحیت</option>
                <option>زرتشت</option>
                <option>یهودیت</option>
                <option>سایر</option>
       </select>
        <span class="input-group-addon">مذهب</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="gender">
            	<option>مرد</option>
                <option>زن</option>
        </select>
        <span class="input-group-addon">جنسیت</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="marriage_state">
            	<option>مجرد</option>
                <option>متاهل</option>
       </select>
        <span class="input-group-addon">وضعیت تاهل</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="soldiering_state">
            	<option>رفته ام</option>
                <option>غایب</option>
                <option>در حال خدمت</option>
                <option>مشمول خدمت</option>
                <option>معافیت پزشکی</option>
                <option>معافیت کفالت</option>
                <option>معافیت تحصیلی</option>
        </select>
        <span class="input-group-addon">خدمت سربازی</span>
    </div>
  </div>

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ادامه" >
    </div>
</form>