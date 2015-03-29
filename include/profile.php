<?php
	$user_id = $_SESSION['active_user_id'];
	$users_fetch_query = " SELECT * FROM `users` WHERE `id` = '$user_id' LIMIT 1 ; " ;
	$users_fetch_result = mysqli_query($connection,$users_fetch_query);
	$users_fetch_row = mysqli_fetch_assoc($users_fetch_result);
?>
<div class="home">
	<?php include 'left_nav.php'; ?>
    
	<div class="col-md-8 profile">
    	<div class="col-sm-3 img-personaly" dir="ltr">
        	<img src="images/personaly/pic1.png" class="img-responsive img-thumbnail" style="margin:auto">
            <div  class="upload">
            <form method="post" enctype="multipart/form-data">
            	<input type="file">
            </form>
            </div>
        </div>
        <div class="col-sm-9">
        	<h2><?php echo $users_fetch_row['first_name'].' '.$users_fetch_row['last_name']; ?></h2>
        </div>
        <div class="clearfix"></div>
        <div class="row">
        <h3 class="title">اطلاعات شخصی</h3>
        <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
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
        </div>
        <div class="row">
        <h3 class="title">اطلاعات تماس</h3>
         <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
        </div>
        <div class="col-sm-5">
        	<h4>شهر : <span class="detail">تهران</span></h4>
            <h4>موبایل : <span class="detail">09376179571</span></h4>	
            <h4>وب سایت : <span class="detail"><a href="http://rayweb.ir">rayweb.ir</a></span></h4>
        </div>
        <div class="col-sm-5">
          <h4>استان : <span class="detail">تهران</span></h4>
          <h4>تلفن : <span class="detail">44455666</span></h4>
          <h4>ایمیل : <span class="detail">info@rayweb.ir</span></h4>
 		</div>
        <div class="col-xs-12">
        	<h4>آدرس : <span class="detail">جنت آباد - پایین تر از چهارباغ پ 55</span></h4>
        </div>
        </div>
        <div class="row">
        	<h3 class="title">اطلاعات شغلی<a href="#" class="add pull-left"><i class="fa fa-plus"></i> اضافه کردن  </a></h3>
             <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
        </div>
        <div class="col-sm-5">
        	<h4>سمت : <span class="detail">عضو هیئت مدیره</span></h4>
            <h4>آخرین حقوق دریافتی : <span class="detail">1000000 تومان</span></h4>	
            <h4>تلفن محل کار : <span class="detail">44141868 - 021</span></h4>
        </div>
        <div class="col-sm-5">
          <h4>نام شرکت : <span class="detail">رای وب</span></h4>
          <h4>مدت : <span class="detail">44455666</span></h4>
          <h4>دلیل خروج : <span class="detail">درآمد پایین</span></h4>
 		</div>
        </div>
        <div class="row">
        	<h3 class="title">اطلاعات تحصیلی<a href="#" class="add pull-left"><i class="fa fa-plus"></i> اضافه کردن  </a></h3>
             <div class="col-sm-2" style="padding-left:0 !important">
        	<a href="#" class="edit"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
        </div>
        <div class="col-sm-5">
        	<h4>نام دانشگاه : <span class="detail">دانشگاه آزاد اسلامی - پرند</span></h4>
            <h4>گرایش : <span class="detail">نرم افزار</span></h4>	
            <h4>سال فارغ التحصیلی : <span class="detail">1392</span></h4>
        </div>
        <div class="col-sm-5">
          <h4>مقطع تحصیلی : <span class="detail">لیسانس</span></h4>
          <h4>رشته : <span class="detail">کامپیوتر</span></h4>
          <h4>معدل : <span class="detail">14.00</span></h4>
 		</div>
        </div>
</div></div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> ویرایش اطلاعات شخصی </h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-default submit" value="ویرایش اطلاعات">
      </div>
    </div>
  </div>
</div>