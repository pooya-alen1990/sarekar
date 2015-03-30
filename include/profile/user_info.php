<?php
$error = '';
if(isset($_POST['go_register'])){
	
	$id = $_SESSION['active_user_id'];
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	//$melli_code = $_POST['melli_code'];
	//$password = $_POST['password'];
	$religion = $_POST['religion'];
	$gender = $_POST['gender'];
	$soldiering_state = $_POST['soldiering_state'];
	$marriage_state = $_POST['marriage_state'];
	
	$users_query = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name', 
						`religion`='$religion',`gender`='$gender', 
								`soldiering_state`='$soldiering_state' ,`marriage_state`='$marriage_state'
										WHERE `id` = '$id' ; ";
										
	$users_result = mysqli_query($connection,$users_query);

	if($users_result){
		
		$error = SIGNUP_SUCCESS;
		
	}else{
		$error = SIGNUP_FAILED;
	}

}
?>
<div class="row">
            <h3 class="title">اطلاعات شخصی</h3>
            <div class="col-sm-2" style="padding-left:0 !important">
                <a href="#" class="edit" data-toggle="modal" data-target="#user_info"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
            </div>
            <div class="col-sm-5">
                <h4>وضعیت تاهل : <span class="detail"><?php echo $users_fetch_row['marriage_state']; ?></span></h4>
                <h4>وضعیت سربازی : <span class="detail"><?php echo $users_fetch_row['soldiering_state']; ?></span></h4>	
            </div>
            <div class="col-sm-5">
              <h4>نام و نام خانوادگی : <span class="detail"><?php echo $users_fetch_row['first_name'].' '.$users_fetch_row['last_name']; ?></span></h4>
              <h4>کد ملی : <span class="detail"><?php echo $users_fetch_row['melli_code']; ?></span></h4>
              <h4>مذهب : <span class="detail"><?php echo $users_fetch_row['religion']; ?></span></h4>
              <h4>جنسیت : <span class="detail"><?php echo $users_fetch_row['gender']; ?></span></h4>
              
            </div>
             <?php echo $error; ?>  
</div>


<!-- Modal -->
<div class="modal fade" id="user_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> &times; </span></button>
        <h4 class="modal-title" id="myModalLabel"> ویرایش اطلاعات تماس </h4>
      </div>
      <div class="modal-body">
        
        
          <form method="post" role="form" class="form-horizontal" dir="ltr">
                
              <div class="col-md-6 col-md-push-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $users_fetch_row['first_name']; ?>" name="first_name" required autofocus>
        <span class="input-group-addon">نام</span>
    </div>
  </div>
  
   <div class="col-md-6 col-md-pull-6 margin-bottom-20">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo $users_fetch_row['last_name']; ?>"  name="last_name" required>
        <span class="input-group-addon">نام خانوادگی</span>
    </div>
  </div>
  
  <!--<div class="col-md-6 col-md-push-6 margin-bottom-20">
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
  </div>-->

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
         
         
        
        
      </div>
      <div class="modal-footer">
            <div class="col-xs-12 text-center margin-bottom-20">
                    <input type="submit" name="go_register" class="btn btn-warning submit " value="ویرایش" >
            </div>
        </form>
      </div>
    </div>
  </div>
</div>