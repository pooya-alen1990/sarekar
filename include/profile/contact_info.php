<?php
	$contact_info_query = " SELECT users.mobile,users.website,users.tel,users.email,users.address,city.name AS city_name , province.name AS province_name FROM `users` INNER JOIN city ON users.city_id = city.id INNER JOIN
							province ON city.province = province.id WHERE users.id = '$user_id' LIMIT 1 ; " ;
	$contact_info_result = mysqli_query($connection,$contact_info_query);
	$contact_info_row = mysqli_fetch_assoc($contact_info_result);

?>
<div class="row">
        <h3 class="title">اطلاعات تماس</h3>
         <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
        </div>
        <div class="col-sm-5">
        	<h4>شهر : <span class="detail"><?php echo $contact_info_row['city_name']; ?></span></h4>
            <h4>موبایل : <span class="detail"><?php echo $contact_info_row['mobile']; ?></span></h4>	
            <h4>وب سایت : <span class="detail"><a target="_blank" href="<?php echo $contact_info_row['website']; ?>"><?php echo $contact_info_row['website']; ?></a></span></h4>
        </div>
        <div class="col-sm-5">
          <h4>استان : <span class="detail"><?php echo $contact_info_row['province_name']; ?></span></h4>
          <h4>تلفن : <span class="detail"><?php echo $contact_info_row['tel']; ?></span></h4>
          <h4>ایمیل : <span class="detail"><?php echo $contact_info_row['email']; ?></span></h4>
 		</div>
        <div class="col-xs-12">
        	<h4>آدرس : <span class="detail"><?php echo $contact_info_row['address']; ?></span></h4>
        </div>
        </div>