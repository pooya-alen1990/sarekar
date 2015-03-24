<?php
$error = '';	
	
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
		
		$_SESSION['signup_users'] = 6;
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
        <select class="form-control" type="text" name="education_level">
            	<option>فوق دیپلم</option>
                <option>دیپلم</option>
                <option>لیسانس</option>
                <option>فوق لیسانس</option>
                <option>دکترا</option>
       </select>
        <span class="input-group-addon">مقطع</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="education_university" required>
        <span class="input-group-addon">نام دانشگاه</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="education_branch" required>
        <span class="input-group-addon">رشته</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="education_sub_branch" required>
        <span class="input-group-addon">گرایش</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="education_average"  placeholder="مثلا : 17.30" required>
        <span class="input-group-addon">معدل</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="education_graduation_date" placeholder="مثلا : 90"  required>
        <span class="input-group-addon">سال فارغ التحصیلی</span>
    </div>
  </div>

  

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ادامه " >
    </div>
</form>