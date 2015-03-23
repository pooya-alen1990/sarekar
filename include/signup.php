<?php 
session_start(); 

if(!isset($_SESSION['signup_users'])){
				$_SESSION['signup_users'] = 1;
			}
			
			$step = $_SESSION['signup_users'];
			
			
function steps($step,$number){
					if($step > $number){
						echo '<li><img class="img-responsive" src="images/step'.$number.'_green.png"></li>';
						}elseif($step == $number){
						echo '<li><img class="img-responsive" src="images/step'.$number.'_blue.png"></li>';	
							}elseif($step < $number){
						echo '<li><img class="img-responsive" src="images/step'.$number.'_grey.png"></li>';	
					}
				}

?>
<div class="home">
	<div class="col-md-4">
    	<div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">آخرین کارجویان</h3>
          </div>
          <div class="panel-body last-user">
            <p><i class="fa fa-male"></i> اصغر فرهادی </p><p align="left">2 فروردین 1393</p>
            <p><i class="fa fa-female"></i> لیلا حاتمی </p><p align="left">6 دی 1923</p>
            <p><i class="fa fa-male"></i> مهرداد پارسا </p><p align="left">110</p>
            <p><i class="fa fa-female"></i> پویا صبرآموز </p><p align="left">110</p>
          </div>
        </div>
        <div>
        <img src="images/sidebar1.jpg" class="img-responsive">
        </div>
        
        <div class="panel panel-default stat">
          <div class="panel-heading">
            <h3 class="panel-title text-center">آمار سایت</h3>
            
          </div>
          <div class="panel-body">
            <p><i class="fa fa-arrow-left"></i> تعداد کارجویان : </p><p align="left">110</p>
            <p><i class="fa fa-arrow-left"></i> تعداد کارفرمایان :  </p><p align="left">1545</p>
            <p><i class="fa fa-arrow-left"></i> تعداد فرصت های شغلی :  </p><p align="left">48794</p>
            <p><i class="fa fa-arrow-left"></i> استخدام از طریق سایت :  </p><p align="left">215120</p>
          </div>
           <div class="panel-heading no-redius">
            <h3 class="panel-title text-center">آمار بازدید کنندگان</h3>
            
          </div>
          <div class="panel-body">
            <p><i class="fa fa-arrow-left"></i> تعداد افراد آنلاین :</p><p align="left">110</p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان امروز :  </p><p align="left">1545</p>
            <p><i class="fa fa-arrow-left"></i> بازدیدکنندگان این هفته :  </p><p align="left">48794</p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان این ماه :  </p><p align="left">215120</p>
            <p><i class="fa fa-arrow-left"></i> بازدید کنندگان این سال :  </p><p align="left">215120</p>
            <p><i class="fa fa-arrow-left"></i> بازدید کل :  </p><p align="left">215120</p>
          </div>
        </div>
    </div>
    
	<div class="col-md-8 signup">
    	<div class="col-xs-12">
        	<h3>ثبت نام کارجو</h3>
            <hr class="hr-beauty">
        	<ul class="text-center">
            <?php
				steps($step,1);
				steps($step,2);
				steps($step,3);
				steps($step,4);
				steps($step,5);
				steps($step,6);
			?> 
            </ul>
    	<div>
            <?php include("include/signup_steps/$step.php"); ?>
        </div>
    </div>
</div>
</div>