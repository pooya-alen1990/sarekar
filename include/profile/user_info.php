<?php
	
?>
<div class="row">
            <h3 class="title">اطلاعات شخصی</h3>
            <div class="col-sm-2" style="padding-left:0 !important">
                <a href="#" class="edit" data-toggle="modal" data-target="#user_info"><i class="fa fa-edit"></i> ویرایش اطلاعات </a>
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
            
            <!-- Modal -->
            <div class="modal fade" id="user_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <form method="post">
                    	<input type="submit" class="btn btn-default submit" value="ویرایش اطلاعات">
                    </form>
                  </div>
                </div>
              </div>
            </div>     
</div>