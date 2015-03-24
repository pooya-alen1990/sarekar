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
	
	$users_query = "UPDATE `users` SET `mobile`='$mobile',`tel`='$tel',`address`='$address',`email`='$email',
													`website`='$website',`city_id`='$city_id' WHERE `id` = '$id' ; ";
										
	$users_result = mysqli_query($connection,$users_query);

	if($users_result){
		
		$_SESSION['signup_users'] = 4;
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
        <input type="text" class="form-control" name="mobile" required autofocus>
        <span class="input-group-addon">موبایل</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="tel" required>
        <span class="input-group-addon">تلفن</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control"  name="website" required>
        <span class="input-group-addon">وب سایت</span>
    </div>
  </div>
  
  <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="email" class="form-control"  name="email" required>
        <span class="input-group-addon">ایمیل</span>
    </div>
  </div>

  <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" name="province_id" id="province">
      	<option value="-1">استان را انتخاب کنید</option>
        <?php echo $provinces; ?>
      	</select>
        <span class="input-group-addon">استان</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <select class="form-control" disabled name="city_id" id="city" required>
      	</select>
        <span class="input-group-addon">شهر</span>
    </div>
  </div>
  
  <div class="col-md-12 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" name="address" required>
        <span class="input-group-addon">آدرس</span>
    </div>
  </div>

    <div class="col-xs-12 text-center margin-bottom-20">
        <input type="submit" name="go_register" class="btn btn-warning submit " value="تایید و ادامه " >
    </div>
</form>
<script>
	$("#province").change(function(){
		val = $("#province").val();
    $.post("include/signup_steps/province_ajax.php",{province : val},
    function(data, status){
		$('#city').removeAttr('disabled');
		$('#city').html(data);
    });
});	
</script>