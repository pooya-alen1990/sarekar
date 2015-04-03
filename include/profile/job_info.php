<?php
$error = '';	
	
if(isset($_POST['job_add'])){
	
	$id = $_SESSION['active_user_id'];
	
	$job_name = $_POST['job_name'];
	$job_position = $_POST['job_position'];
	$job_duration = $_POST['job_duration'];
	$job_last_salary = $_POST['job_last_salary'];
	$job_exit_cause = $_POST['job_exit_cause'];
	$job_tel = $_POST['job_tel'];
	
	
			$jobs_query = "INSERT INTO `jobs`(`jobs_id`, `user_id`, `job_name`, `job_position`, `job_duration`, `job_last_salary`, `job_exit_cause`, `job_tel`) VALUES ('','$id','$job_name','$job_position','$job_duration','$job_last_salary','$job_exit_cause','$job_tel') ; ";
												
			$jobs_result = mysqli_query($connection,$jobs_query);

			if($jobs_result){
				
				$error = SIGNUP_SUCCESS;
				
			}else{
				$error = SIGNUP_FAILED;
			}
}


if(isset($_POST['job_edit'])){
		
		$id = $_SESSION['active_user_id'];
	
		$job_hidden_id = $_POST['job_hidden_id'];
		
		$job_name = $_POST['job_name'];
		$job_position = $_POST['job_position'];
		$job_duration = $_POST['job_duration'];
		$job_last_salary = $_POST['job_last_salary'];
		$job_exit_cause = $_POST['job_exit_cause'];
		$job_tel = $_POST['job_tel'];
		
		$jobs_query = "UPDATE `jobs` SET `job_name`='$job_name',`job_position`='$job_position',`job_duration`='$job_duration',`job_last_salary`='$job_last_salary',`job_exit_cause`='$job_exit_cause',`job_tel`='$job_tel' WHERE `jobs_id` = '$job_hidden_id' ; ";
												
			$jobs_result = mysqli_query($connection,$jobs_query);

			if($jobs_result){
				
				$error = SIGNUP_SUCCESS;
				
			}else{
				$error = SIGNUP_FAILED;
			}
		
		
}


?>
<?php
	
	$job_info_query = " SELECT * FROM `jobs` WHERE `user_id` = '$user_id' ; " ;
	$job_info_result = mysqli_query($connection,$job_info_query);
		
?>
<div class="row">
	<h3 class="title">اطلاعات شغلی
	<?php
		if(!$visit){
        	echo '<a href="#" data-toggle="modal" data-target="#job_add" class="add pull-left"><i class="fa fa-plus"></i> اضافه کردن  </a>';
		}
	?>
	</h3>
<?php
	while($job_info_row = mysqli_fetch_assoc($job_info_result)){ 
	    echo "   
        <div class='col-sm-2' style='padding-left:0 !important'>";
		if(!$visit){
        	echo "<a href='#'  data-toggle='modal' data-target='#job$job_info_row[jobs_id]' class='edit'><i class='fa fa-edit'></i> ویرایش اطلاعات </a>";
		}
		echo "
        </div>
        <div class='col-sm-5'>
        	<h4 class='title-info'>سمت : <span class='detail'>$job_info_row[job_position]</span></h4>
            <h4 class='title-info'>آخرین حقوق دریافتی : <span class='detail'>$job_info_row[job_last_salary] تومان</span></h4>	
            <h4 class='title-info'>تلفن محل کار : <span class='detail'>$job_info_row[job_tel]</span></h4>
        </div>
        <div class='col-sm-5'>
          <h4 class='title-info'>نام شرکت : <span class='detail'>$job_info_row[job_name]</span></h4>
          <h4 class='title-info'>مدت : <span class='detail'>$job_info_row[job_duration] ماه</span></h4>
          <h4 class='title-info'>دلیل خروج : <span class='detail'>$job_info_row[job_exit_cause]</span></h4>
 		</div>
        
        <div class='clearfix'></div>
        <hr class='hr-orange'>";
		
        ?>
<!-- Modal -->
<div class="modal fade" id="job<?php echo $job_info_row['jobs_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
        <h4 class="modal-title" id="myModalLabel"> ویرایش اطلاعات شخصی </h4>
      </div>
      <div class="modal-body">
        
        
          <form method="post" role="form" class="form-horizontal" dir="ltr">
                
              <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $job_info_row['job_name']; ?>" name="job_name" required autofocus>
        <span class="input-group-addon">نام آخرین شرکت</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $job_info_row['job_position']; ?>"  name="job_position" required>
        <span class="input-group-addon">سمت</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_duration" value="<?php echo $job_info_row['job_duration']; ?>" required>
        <span class="input-group-addon">(مدت (ماه</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_last_salary" value="<?php echo $job_info_row['job_last_salary']; ?>" required>
        <span class="input-group-addon">(آخرین حقوق دریافتی (تومان</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="job_exit_cause" value="<?php echo $job_info_row['job_exit_cause']; ?>" required>
        <span class="input-group-addon">دلیل خروج</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $job_info_row['job_tel']; ?>"  name="job_tel" required>
        <span class="input-group-addon">تلفن محل کار</span>
    </div>
  </div>
         <input type="hidden" name="job_hidden_id" value="<?php echo $job_info_row['jobs_id']; ?>">

      </div>
      <div class="modal-footer">
            <div class="col-xs-12 text-center margin-bottom-20">
                    <input type="submit" name="job_edit" class="btn btn-warning submit " value="ویرایش" >
                    <button type="button" class="btn btn-primary" data-dismiss="modal">انصراف</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <?php
        }
		echo $error;
?>

<!-- Modal -->
<div class="modal fade" id="job_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
        <h4 class="modal-title" id="myModalLabel"> ویرایش اطلاعات شخصی </h4>
      </div>
      <div class="modal-body">
        
        
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

      </div>
      <div class="modal-footer">
            <div class="col-xs-12 text-center margin-bottom-20">
                    <input type="submit" name="job_add" class="btn btn-warning submit " value="تایید" >
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
       
</div>