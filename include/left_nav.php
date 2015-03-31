<?php
	$last_users = '';
	$last_users_query = " SELECT * FROM `users` LIMIT 5 ; " ;
	$last_users_result = mysqli_query($connection,$last_users_query);
	while($last_users_row = mysqli_fetch_assoc($last_users_result)){
		$gender = 'male';
		if($last_users_row['gender'] == 'زن'){
		$gender = 'female';	
			}
			$last_users_row['register_date'] = jdate("d F Y" , $last_users_row['register_date']);
			$last_users .= "<p><i class='fa fa-$gender'></i><a href='#'> $last_users_row[first_name] $last_users_row[last_name] </a>
							</p><p align='left'>$last_users_row[register_date]</p>";
		}
?>
<div class="col-md-4">
    	<div class="panel panel-default border">
          <div class="panel-heading">
            <h3 class="panel-title text-center">آخرین کارجویان</h3>
          </div>
          <div class="panel-body last-user">
            <?php echo $last_users; ?>
          </div>
        </div>
        <div>
        <img src="images/sidebar1.jpg" class="img-responsive">
        </div>
        
        <div class="panel panel-default stat border">
          <div class="panel-heading">
            <h2 class="panel-title text-center">آمار سایت</h2>
            
          </div>
          <div class="panel-body">
          	<h4 class="text-center">اعضا</h4>
            <hr class="hr-light">
            <p><i class="fa fa-arrow-left"></i> تعداد کارجویان : </p><p align="left">110</p>
            <p><i class="fa fa-arrow-left"></i> تعداد کارفرمایان :  </p><p align="left">1545</p>
            <p><i class="fa fa-arrow-left"></i> تعداد فرصت های شغلی :  </p><p align="left">48794</p>
            <p><i class="fa fa-arrow-left"></i> استخدام از طریق سایت :  </p><p align="left">215120</p>
          </div>
           <h4 class="text-center">وب سایت</h4>
            <hr class="hr-light">
          <div class="panel-body">
            <p><i class="fa fa-arrow-left"></i> تعداد افراد آنلاین :</p><p align="left"><?php echo $online; ?></p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان امروز :  </p><p align="left"><?php echo $day; ?></p>
            <p><i class="fa fa-arrow-left"></i> بازدیدکنندگان این هفته :  </p><p align="left"><?php echo $week; ?></p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان این ماه :  </p><p align="left"><?php echo $month; ?></p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان این سال :  </p><p align="left"><?php echo $year; ?></p>
            <p><i class="fa fa-arrow-left"></i> بازدید کل :  </p><p align="left"><?php echo $all; ?></p>
          </div>
        </div>
    </div>