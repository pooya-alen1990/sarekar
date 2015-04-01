<?php
	
	$education_info_query = " SELECT * FROM `educations` WHERE `user_id` = '$user_id' ; " ;
	$education_info_result = mysqli_query($connection,$education_info_query);
		
?>
<div class="row">
        <h3 class="title">اطلاعات تحصیلی
<?php
	  if(!$visit){
		  echo '<a href="#" class="add pull-left"><i class="fa fa-plus"></i> اضافه کردن  </a>';
	  }
?>
    	</h3>        
<?php
	while($education_info_row = mysqli_fetch_assoc($education_info_result)){ 
	    echo " 
        <div class='col-sm-2' style='padding-left:0 !important'>";
		if(!$visit){
        	echo "<a href='#' class='edit'><i class='fa fa-edit'></i> ویرایش اطلاعات </a>";
		}
		echo "
        </div>
			<div class='col-sm-5'>
				<h4 class='title-info'>نام دانشگاه : <span class='detail'>$education_info_row[education_university]</span></h4>
				<h4 class='title-info'>گرایش : <span class='detail'>$education_info_row[education_sub_branch]</span></h4>	
				<h4 class='title-info'>سال فارغ التحصیلی : <span class='detail'>$education_info_row[education_graduation_date]</span></h4>
			</div>
			<div class='col-sm-5'>
			  <h4 class='title-info'>مقطع تحصیلی : <span class='detail'>$education_info_row[education_level]</span></h4>
			  <h4 class='title-info'>رشته : <span class='detail'>$education_info_row[education_branch]</span></h4>
			  <h4 class='title-info'>معدل : <span class='detail'>$education_info_row[education_average]</span></h4>
			</div>
        
        <div class='clearfix'></div>
        <hr class='hr-orange'>";
        
        }
?>
        
</div>