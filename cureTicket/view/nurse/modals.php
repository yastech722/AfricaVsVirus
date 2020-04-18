<!-- Reprint Card Modal content-->
<div id="admitPatient<?php echo $patient[7];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Admit Patient</h4>
      </div>
	      <div class="modal-body">
        <h5>Are you sure to admit this patient?</h5>
											
      </div>
      <div class="modal-footer">
	  <a href="../../controller/patient_controller.php?admit_patient=<?php echo $patient[7];?>" class="btn btn-primary">YES</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	 
    </div>

  </div>
</div>
<!-- Cancel admission Modal content-->
<div id="cancelAdmission<?php echo $patient[7];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cancel Admission</h4>
      </div>
	      <div class="modal-body">
        <h5>Are you sure to cancel admission?</h5>
											
      </div>
      <div class="modal-footer">
	  <a href="../../controller/patient_controller.php?cancel_admission=<?php echo $patient[7];?>" class="btn btn-primary">YES</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	 
    </div>

  </div>
</div>
<!-- Vital Signs Modal content-->
<div id="vitalSigns<?php echo $patient['emr_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Vital Signs</h4>
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php?emr_id=<?php echo $patient['emr_id']; ?>">
      <div class="modal-body">
        <div class="form-group">
        <label for="bld">Vital Sign Count</label>
                                                <select  name="count" class="form-control" id="bld" onchange="renderVitalSignForm(this.value)"  required>
												<option value="">Select an option</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												</select>
</div>
<div id="vitals">
 
</div>
      </div>
      <div class="modal-footer">
	  <input type="submit" value="Save" name="save_vital_sign" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>
<!-- Reprint Card Modal content-->
<div id="confirmInvoice<?php echo $transaction['transaction_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirm Transaction</h4>
      </div>
	      <div class="modal-body">
        <h5>Are you sure to commit transaction?</h5>
											
      </div>
      <div class="modal-footer">
          <a href="../../controller/transaction_controller.php?id=<?php echo $transaction['transaction_id'];?>&item=<?php echo $transaction['item_name'];?>&price=<?php echo $transaction['unit_price'];?>&quantity=<?php echo $transaction['quantity'];?>&emr_id=<?php echo $transaction['emr_id'];?>&location=<?php echo $transaction['location']; ?>&generate_receipt=1" class="btn btn-primary">YES</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	 
    </div>

  </div>
</div>

<!-- Reprint Card Modal content-->
<div id="reverseTransaction<?php echo $transaction['transaction_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reverse Transaction</h4>
      </div>
	      <div class="modal-body">
        <h5>Are you sure to reverse transaction?</h5>
											
      </div>
      <div class="modal-footer">
	  <a href="../../controller/transaction_controller.php?id=<?php echo $transaction['transaction_id'];?>&item=<?php echo $transaction['item_name'];?>&location=<?php echo $transaction['location'];?>&emr_id=<?php echo $transaction['emr_id'];?>&reverse_transaction=1" class="btn btn-primary">YES</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	 
    </div>

  </div>
</div>
<!-- Reprint Card Modal content-->
<div id="newCard<?php echo $patient['emr_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reprint Card</h4>
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php?location=record&service_name=<?php echo 'Card_Reprint'?>&emr_id=<?php echo $patient['emr_id'];?>&phone_number=<?php echo $patient['phone_number'];?>&age=<?php echo $patient['age'];?>&gender=<?php echo $patient['gender'];?>&date_registered=<?php echo $patient['date_registered'];?>&full_name=<?php echo $patient['full_name'];?> ">
      <div class="modal-body">
        <h5>Are you sure to reprint patient card</h5>
											
      </div>
      <div class="modal-footer">
	  <input type="submit" value="YES" name="reprint_card" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	  </form>
    </div>

  </div>
</div>


<!-- Update Patient Details Modal content-->
<div id="updatePatient<?php  echo $patient['emr_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Patient Details</h4>
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php">
      <div class="modal-body">
                                  
									<div class="col-xs-4">
									
                                        <div class="form-group">
                                            <label for="emr">EMR ID</label>
                                            <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $patient['emr_id'] ?>" readonly="true">
                                            </div>
											<div class="form-group">
                                                <label for="no">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control" id="no" value="<?php echo $patient['phone_number'] ?>" readonly="true">
                                                </div>
												
												        
												<div class="form-group">
                                                <label for="occ">Occupation</label>
                                                <input type="text" name="occupation" class="form-control" id="occ" value="<?php echo $patient['occupation']; ?>">
                                                </div>
												
											
											</div>
											
											<div class="col-xs-4">
											
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="name" value="<?php echo $patient['full_name'];;?>" readonly="true">
                                                </div>
												<div class="form-group">
                                                <label for="reg">Date Registered</label>
                                                <input type="date" name="date_registered" class="form-control" id="reg" value="<?php echo $patient['date_registered']; ?>" readonly="true">
                                                </div>
												<div class="form-group">
                                                <label for="bld">Blood Group</label>
                                                <input type="text"  name="blood_group" value="<?php echo $patient['blood_group']; ?>" class="form-control" id="bld" >
												
                                                </div>
												
                                                </div>
												
												<div class="col-xs-4">
												
                                            <div class="form-group">
                                                <label for="age">Date of Birth</label>
                                                <input type="date" name="age" class="form-control" id="age" value="<?php echo $patient['age'];?>">
                                                </div>
												<div class="form-group">
                                                <label for="gen">Gender</label>
                                                <input type="text"  name="gender" value="<?php echo $patient['gender']; ?>" class="form-control" id="gen"  readonly="true">
									
                                                </div>
												<div class="form-group">
                                                <label for="geno">Genotype</label>
                                                <input type="text" value="<?php echo $patient['genotype']; ?>" name="genotype" class="form-control" id="geno" >
												
                                                </div>
												                                                </div>
												
                                        
                                    
                                                        
                                                    
      </div>
      <div class="modal-footer">
	  <input type="submit" name="update_patient" value="Update"  class="btn btn-primary ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>


<!-- Change Admission Room Modal content-->
<div id="change_room<?php  echo $patient[7]; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Facility</h4>
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php?change_room=<?php  echo $patient[7]; ?>">
      <div class="modal-body">
                                  
									<div class="col-xs-12">
									
                                        <div class="form-group">
                                            <label for="emr">EMR ID</label>
                                            <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $patient['emr_id'] ?>" readonly="true">
                                            </div>
											<div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="name" value="<?php echo $patient['full_name'];;?>" readonly="true">
                                                </div>
												<div class="form-group">
                                                <label for="reg">Admission Date</label>
                                                <input type="date" name="admission_date" class="form-control" id="reg" value="<?php echo $patient[6]; ?>" readonly="true">
                                                </div>
												        
												<div class="form-group">
                                                <label for="occ">Facility</label>
                                                <select name="facility" class="form-control" id="occ"  required>
												<option value="">Select an option</option>
												<?php 
												$facilities=get_service_name('Admission');
												foreach($facilities as $facility){
												?>
												<option value="<?php echo $facility['name']; ?>"><?php echo $facility['name']; ?></option>
												<?php } ?>
												</select>
                                                </div>
												<div class="form-group">
                                                <label for="occ">Location</label>
                                                <input type="text" name="location" class="form-control" id="occ"  required>
                                                </div>
												
											
											</div>
											
											
												
                                        
                                    
                                                        
                                                    
      </div>
      <div class="modal-footer">
	  <input type="submit" name="change_room" value="Update"  class="btn btn-primary ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>
