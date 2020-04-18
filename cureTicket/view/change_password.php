<!-- Update Lab Service Modal content-->
<div id="change_password" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password</h4>
      </div>
	  <form  method="post"  action="../../controller/account_controller.php">
	        <div class="modal-body">
                                  
		<div class="">
									
                                        <div class="form-group">
                                            <label for="emr">Old Password</label>
                                            <input type="password" name="old_password"  class="form-control" id="emr" required>
                                            </div>
											<div class="form-group">
                                                <label for="no">New Password</label>
                                                <input type="password" name="password" class="form-control" id="no" required>
                                                </div>
												<div class="form-group">
                                                <label for="no">Confirm Password</label>
                                                <input type="password" name="cpassword" class="form-control" id="no" required>
                                                </div>
												</div>							
		                                        
      </div>
      <div class="modal-footer">
	  <input type="submit" name="change_password" value="Change Password"  class="btn btn-primary ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>