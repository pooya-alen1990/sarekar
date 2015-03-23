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
<form method="post" role="form" class="form-horizontal" dir="rtl">
    
    <div class="form-group">
            <label for="phone" class="col-sm-2 control-label pull-right">نام :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control pull-right" name="phone" required>
            </div>
            <label for="mobile" class="col-sm-2 control-label">نام خانوادگی :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control pull-right" name="mobile" required>
            </div>
    </div>
    
    <div class="form-group">
            <label for="phone" class="col-sm-2 control-label pull-right">جنسیت :</label>
            <div class="col-sm-4">
              <select class="form-control" type="text" name="activation_code" tabindex="1" autofocus>
            	<option>مرد</option>
                <option>زن</option>
              </select>
            </div>
            <label for="mobile" class="col-sm-2 control-label">مذهب :</label>
            <div class="col-sm-4">
              <select class="form-control" type="text" name="activation_code" tabindex="1" autofocus>
            	<option>اسلام</option>
                <option>مسحیت</option>
              </select>
            </div>
    </div>

    <div class="col-xs-12 text-center">
        <input type="submit" name="go_register" class="btn btn-success " value="تایید و ادامه >>" tabindex="2" >
    </div>
</form>