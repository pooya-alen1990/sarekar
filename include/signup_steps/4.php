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
	
	$mobile = $_POST['mobile'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$city_id = $_POST['city_id'];
	
	$jobs_query = "INSERT INTO `jobs`(`jobs_id`, `user_id`, `job_name`, `job_position`, `job_duration`, `job_last_salary`, `job_exit_cause`, `job_tel`) VALUES ('','$id','$job_name','$job_position','$job_duration','$job_last_salary','$job_exit_cause','$job_tel') ; ";
										
	$jobs_result = mysqli_query($connection,$jobs_query);

	if($jobs_result){
		echo 'ok';
		//$_SESSION['signup_users'] = 5;
		//header('Location: ?page=signup');
		
	}else{
		$error = SIGNUP_FAILED;
	}

}

?>
<?php echo $error; ?>
<form method="post" role="form" class="form-horizontal" dir="ltr">
    
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" name="mobile" required autofocus>
        <span class="input-group-addon">نام آخرین شرکت</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="tel" required>
        <span class="input-group-addon">سمت</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="website" required>
        <span class="input-group-addon">(مدت (ماه</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="email" class="form-control"  name="email" required>
        <span class="input-group-addon">آخرین حقوق دریافتی</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="website" required>
        <span class="input-group-addon">دلیل خروج</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="email" class="form-control"  name="email" required>
        <span class="input-group-addon">تلفن محل کار</span>
    </div>
  </div>

  

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ادامه " >
    </div>
</form>