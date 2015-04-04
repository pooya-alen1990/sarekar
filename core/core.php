<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
date_default_timezone_set('Asia/Tehran');

session_start();
ob_start();

if($_SERVER['SERVER_ADDR'] == '127.0.0.1'){
	define("LOCAL_MODE" , 1);
	}else{
	define("LOCAL_MODE" , 0);
}



##### Configs ######
if(LOCAL_MODE == 0){
	define('HOST_NAME','localhost');
	define('USER_NAME','sarekar');
	define('PASSWORD','sarekar1394');
	define('DB_NAME','sarekar');
	$prefix = '';
}else if(LOCAL_MODE == 1){
	define('HOST_NAME','localhost');
	define('USER_NAME','root');
	define('PASSWORD','');
	define('DB_NAME','sarekar');
	$prefix = '/sarekar';
}


##### CONNECT TO DB ######
$connection = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME) or die('CONNECTION FAILED!!!');
mysqli_set_charset($connection,'utf8');

### multi step #########

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

##### includes #####
include 'counter.php';
include 'jdf.php';
include 'messages/msg.php';