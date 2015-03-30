<?php
	
	$job_info_query = " SELECT * FROM `jobs` WHERE `user_id` = '$user_id' ; " ;
	$job_info_result = mysqli_query($connection,$job_info_query);
		
?>
<div class="row">
        <h3 class="title">اطلاعات شغلی<a href="#" class="add pull-left"><i class="fa fa-plus"></i> اضافه کردن  </a></h3>

<?php
	while($job_info_row = mysqli_fetch_assoc($job_info_result)){ 
	    echo "   
        <div class='col-sm-2' style='padding-left:0 !important'>
        	<a href='#' class='edit'><i class='fa fa-edit'></i> ویرایش اطلاعات </a>
        </div>
        <div class='col-sm-5'>
        	<h4>سمت : <span class='detail'>$job_info_row[job_position]</span></h4>
            <h4>آخرین حقوق دریافتی : <span class='detail'>$job_info_row[job_last_salary] تومان</span></h4>	
            <h4>تلفن محل کار : <span class='detail'>$job_info_row[job_tel]</span></h4>
        </div>
        <div class='col-sm-5'>
          <h4>نام شرکت : <span class='detail'>$job_info_row[job_name]</span></h4>
          <h4>مدت : <span class='detail'>$job_info_row[job_duration] ماه</span></h4>
          <h4>دلیل خروج : <span class='detail'>$job_info_row[job_exit_cause]</span></h4>
 		</div>
        
        <div class='clearfix'></div>
        <hr class='hr-orange'>";
        
        }
?>
        
</div>