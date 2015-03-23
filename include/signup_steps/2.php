<?php
if(isset($_POST['go_register'])){
	
	$_SESSION['signup_users'] = 3;
	header('Location: ?page=signup');
	}

?>
<form method="post" role="form" class="form-horizontal" dir="rtl">
    <div class="form-group">
        <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">نام : </label>
        <div class="col-sm-8 col-xs-12 pull-right">
            <input class="form-control" type="text" name="activation_code" tabindex="1" autofocus>
        </div>  
    </div>
    <div class="form-group">
        <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">نام خانوادگی : </label>
        <div class="col-sm-8 col-xs-12 pull-right">
            <input class="form-control" type="text" name="activation_code" tabindex="1" autofocus>
        </div>  
    </div>
    <div class="form-group">
        <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">جنسیت : </label>
        <div class="col-sm-8 col-xs-12 pull-right">
            <select class="form-control" type="text" name="activation_code" tabindex="1" autofocus>
            	<option>مرد</option>
                <option>زن</option>
            </select>
        </div>  
    </div>
    <div class="form-group">
        <label for="activation_code" class="col-sm-2 col-xs-12 control-label pull-right">مذهب : </label>
        <div class="col-sm-8 col-xs-12 pull-right">
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