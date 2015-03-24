<?php
$error = '';
if(isset($_POST['go_register'])){
	
	$activation_code = $_POST['activation_code'];
	
	$activation_query = "SELECT * FROM users WHERE activation_code = '$activation_code' LIMIT 1 ; ";
	$activation_result = mysqli_query($connection,$activation_query);
	$activation_row = mysqli_fetch_assoc($activation_result);

	if(isset($activation_row['activation_code']) && $activation_row['register_date'] == 0){
		
		//$_SESSION['signup_users'] = 3;
		//header('Location: ?page=signup');
		
	}else{
			$error = CODE_FAALSAZI;
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
                <option>معاف</option>
                <option>نرفته ام</option>
        </select>
        <span class="input-group-addon">خدمت سربازی</span>
    </div>
  </div>

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-success " value="تایید و ادامه >>" >
    </div>
</form>