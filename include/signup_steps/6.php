<?php
$error = '';	

$provinces = '';
$provinces_query = " SELECT * FROM `province`" ;
$provinces_result = mysqli_query($connection,$provinces_query);
while($provinces_row = mysqli_fetch_assoc($provinces_result)){
		$provinces .="<option value='$provinces_row[id]'>$provinces_row[name]</a>";
	}	
		
if(isset($_POST['go_register'])){
	
	$id = $_SESSION['user_id'];
	
	$job_kind = $_POST['job_kind'];
	$province_id_2 = $_POST['province_id_2'];
	$job_state = $_POST['job_state'];
	$salary = $_POST['salary'];
	$register_date = time();
	
	$users_query = "UPDATE `users` SET `job_state`='$job_state',`job_kind`='$job_kind',`salary`='$salary',`province_id_2`='$province_id_2',`register_date`='$register_date' WHERE `id` = '$id' ; ";
										
	$users_result = mysqli_query($connection,$users_query);

	if($users_result){
		
		
		$_SESSION['signup_users'] = NULL;
 		unset($_SESSION['signup_users']);
		$_SESSION['active_user_id'] = $id;
		
		header('Location: ?page=profile');
		
	}else{
		$error = SIGNUP_FAILED;
	}

}

?>
<?php echo $error; ?>
<form method="post" role="form" class="form-horizontal" dir="ltr">
    
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="job_kind">
            	<option>فرقی نمیکند</option>
                <option>پاره وقت</option>
                <option>تمام وقت</option>
                <option>پروژه ای</option>
       </select>
        <span class="input-group-addon">نوع همکاری</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" name="province_id_2" id="province">
      	<option value="0">در استان خودم فقط مایل به کار هستم</option>
        <?php echo $provinces; ?>
      	</select>
        <span class="input-group-addon">کار در استانی دیگر</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="job_state">
            	<option>بیکار</option>
                <option>سر کار میروم</option>
       </select>
        <span class="input-group-addon">وضعیت شغلی کنونی</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" type="text" name="salary">
        		<option>توافقی</option>
            	<option>تا 1 میلیون تومان</option>
                <option>تا 1.5 میلیون تومان</option>
                <option>تا 2 میلیون تومان</option>
                <option>بیش از 2 میلیون تومان</option>
       </select>
        <span class="input-group-addon">میزان حقوق درخواستی</span>
    </div>
  </div>
  
  
    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ورود به پروفایل " >
    </div>
</form>