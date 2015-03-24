<?php
$error = '';	
	
if(isset($_POST['go_register'])){
	
	$id = $_SESSION['user_id'];
	
	$job_name = $_POST['job_name'];
	$job_position = $_POST['job_position'];
	$job_duration = $_POST['job_duration'];
	$job_last_salary = $_POST['job_last_salary'];
	$job_exit_cause = $_POST['job_exit_cause'];
	$job_tel = $_POST['job_tel'];
	
	$jobs_query = "INSERT INTO `jobs`(`jobs_id`, `user_id`, `job_name`, `job_position`, `job_duration`, `job_last_salary`, `job_exit_cause`, `job_tel`) VALUES ('','$id','$job_name','$job_position','$job_duration','$job_last_salary','$job_exit_cause','$job_tel') ; ";
										
	$jobs_result = mysqli_query($connection,$jobs_query);

	if($jobs_result){
		
		$_SESSION['signup_users'] = 5;
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
        <input type="text" class="form-control" name="job_name" required autofocus>
        <span class="input-group-addon">نام آخرین شرکت</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_position" required>
        <span class="input-group-addon">سمت</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_duration" placeholder="مثلا : 12" required>
        <span class="input-group-addon">(مدت (ماه</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_last_salary" placeholder="مثلا : 1000000" required>
        <span class="input-group-addon">(آخرین حقوق دریافتی (تومان</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_exit_cause" required>
        <span class="input-group-addon">دلیل خروج</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_tel" required>
        <span class="input-group-addon">تلفن محل کار</span>
    </div>
  </div>

  

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ادامه " >
    </div>
</form>