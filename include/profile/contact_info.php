<?php
$error = '';

$provinces = '';
$provinces_query = " SELECT * FROM `province`" ;
$provinces_result = mysqli_query($connection,$provinces_query);
while($provinces_row = mysqli_fetch_assoc($provinces_result)){
		$provinces .="<option value='$provinces_row[id]'>$provinces_row[name]</a>";
	}
	
	
if(isset($_POST['contact'])){
	
	$id = $_SESSION['active_user_id'];
	
	$mobile = $_POST['mobile'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	//$city_id = $_POST['city_id'];
	
	$users_query = "UPDATE `users` SET `mobile`='$mobile',`tel`='$tel',`address`='$address',`email`='$email',
													`website`='$website' WHERE `id` = '$id' ; ";
										
	$users_result = mysqli_query($connection,$users_query);

	if($users_result){
		
		$error = SIGNUP_SUCCESS;
		
	}else{
		$error = SIGNUP_FAILED;
	}

}
	
	
	$contact_info_query = " SELECT users.mobile,users.website,users.tel,users.email,users.address,city.name AS city_name , province.name AS province_name FROM `users` INNER JOIN city ON users.city_id = city.id INNER JOIN
							province ON city.province = province.id WHERE users.id = '$user_id' LIMIT 1 ; " ;

	$contact_info_result = mysqli_query($connection,$contact_info_query);
	$contact_info_row = mysqli_fetch_assoc($contact_info_result);

?>
<div class="row">
        <h3 class="title">اطلاعات تماس</h3>
         <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit" data-toggle="modal" data-target="#contact_info"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
        </div>
        <div class="col-sm-5">
        	<h4 class="title-info">شهر : <span class="detail"><?php echo $contact_info_row['city_name']; ?></span></h4>
            <h4 class="title-info">موبایل : <span class="detail"><?php echo $contact_info_row['mobile']; ?></span></h4>	
            <h4 class="title-info">وب سایت : <span class="detail"><a target="_blank" href="<?php echo $contact_info_row['website']; ?>"><?php echo $contact_info_row['website']; ?></a></span></h4>
        </div>
        <div class="col-sm-5">
          <h4 class="title-info">استان : <span class="detail"><?php echo $contact_info_row['province_name']; ?></span></h4>
          <h4 class="title-info">تلفن : <span class="detail"><?php echo $contact_info_row['tel']; ?></span></h4>
          <h4 class="title-info">ایمیل : <span class="detail"><?php echo $contact_info_row['email']; ?></span></h4>
 		</div>
        <div class="col-xs-12">
        	<h4 class="title-info">آدرس : <span class="detail"><?php echo $contact_info_row['address']; ?></span></h4>
        </div>
        <?php echo $error; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="contact_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" value="<?php echo $contact_info_row['mobile']; ?>" name="mobile" required autofocus>
                    <span class="input-group-addon">موبایل</span>
                </div>
              </div>
              
               <div class="col-md-6 col-md-pull-6 margin-bottom-20">
                <div class="input-group">
                    <input type="text" class="form-control" value="<?php echo $contact_info_row['tel']; ?>"  name="tel" required>
                    <span class="input-group-addon">تلفن</span>
                </div>
              </div>
              
              <div class="col-md-6 col-md-push-6 margin-bottom-20">
                <div class="input-group">
                    <input type="text" class="form-control" value="<?php echo $contact_info_row['website']; ?>"  name="website" required>
                    <span class="input-group-addon">وب سایت</span>
                </div>
              </div>
              
              <div class="col-md-6 col-md-pull-6 margin-bottom-20">
                <div class="input-group">
                    <input type="email" class="form-control" value="<?php echo $contact_info_row['email']; ?>"  name="email" required>
                    <span class="input-group-addon">ایمیل</span>
                </div>
              </div>
            
              <!--<div class="col-md-6 col-md-push-6 margin-bottom-20">
                <div class="input-group">
                    <select class="form-control" name="province_id" id="province">
                    <option value="-1">استان را انتخاب کنید</option>
                    <?php //echo $provinces; ?>
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
              </div>-->
              
              <div class="col-md-12 margin-bottom-20">
                <div class="input-group">
                    <input type="text" class="form-control" value="<?php echo $contact_info_row['address']; ?>" name="address" required>
                    <span class="input-group-addon">آدرس</span>
                </div>
              </div>
         
         
        
        
      </div>
      <div class="modal-footer">
            <div class="col-xs-12 text-center margin-bottom-20">
                    <input type="submit" name="contact" class="btn btn-warning submit " value="ویرایش" >
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
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
        