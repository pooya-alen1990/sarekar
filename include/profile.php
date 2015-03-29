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
            
            <?php include 'profile/user_info.php'; ?>
            <?php include 'profile/contact_info.php'; ?>
            <?php include 'profile/job_info.php'; ?>
            <?php include 'profile/education_info.php'; ?>
   
</div>
</div>
