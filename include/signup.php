<div class="home">
	<?php include 'left_nav.php'; ?>
    
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