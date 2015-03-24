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
	
	$education_level = $_POST['education_level'];
	$education_average = $_POST['education_average'];
	$education_university = $_POST['education_university'];
	$education_branch = $_POST['education_branch'];
	$education_sub_branch = $_POST['education_sub_branch'];
	$education_graduation_date = $_POST['education_graduation_date'];
	
	$educations_query = "INSERT INTO `educations`(`education_id`, `user_id`, `education_level`, `education_average`, `education_university`, `education_branch`, `education_sub_branch`, `education_graduation_date`) VALUES ('','$id','$education_level','$education_average','$education_university','$education_branch','$education_sub_branch','$education_graduation_date') ; ";
										
	$educations_result = mysqli_query($connection,$educations_query);

	if($educations_result){
		
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
        <select class="form-control" type="text" name="education_level">
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
        <select class="form-control" name="province_id" id="province">
      	<option value="-1">در استان خودم فقط مایل به کار هستم</option>
        <?php echo $provinces; ?>
      	</select>
        <span class="input-group-addon">کار در استانی دیگر</span>
    </div>
  </div>
  
    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ورود به پروفایل " >
    </div>
</form>