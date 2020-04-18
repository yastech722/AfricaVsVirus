
<?php if(isset($_SESSION['patients'])){ ?>
<!-- Prescriptions Acknowledgement Modal content-->

<div id="fillAll" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fill Quantity</h4>
      </div>
	 <form  method="post"  action="../../controller/patient_controller.php?location=Pharmacy">
      <div class="modal-body">
        

			<?php
                        $patients=$_SESSION['patients'];
                        foreach ($patients as $patient){
                           
                           if($patient[4]==0){?>	
          
                                        <div class="form-group">
                                            <input type="hidden" name="emr_id[]" id="child" value="<?php echo $patient['emr_id'];?>">
                                            <input type="hidden" name="prescription_id[]" id="child" value="<?php echo $patient['prescription_id'];?>">
                                            <label for="emr"><input type="hidden" name="drug_name[]" value="<?php echo $patient['drug_name'];  ?>"><?php echo $patient['drug_name']; ?></label>
                                            <input type="number" name="quantity[]" class="form-control" id="emr" placeholder="<?php echo 'Quantity of '.$patient['drug_name'].' in '.get_drug_unit_of_measure($patient['drug_name']); ?>" >
                                            </div>
														
                           <?php  }}?>                  
											
      </div>
      <div class="modal-footer">
	  <input type="submit" value="Save" name="acknowledge_prescriptions" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>

<div id="dispenseAll" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Dispense All</h4>
      </div>
         <form  method="post"  action="../../controller/patient_controller.php?location=Pharmacy">
	        <div class="modal-body">
                    
        <?php
                        $patients=$_SESSION['patients'];
                        $count=0;
                        foreach ($patients as $patient){
                           
                           if($patient[4]==1){
                               $count++;
                               ?>	
          
                                        <div class="form-group">
                                            
                                            <input type="hidden" name="prescription_id[]" id="child" value="<?php echo $patient['prescription_id'];?>">
                                                                                    </div>
														
                           <?php  }}if($count==0){
                               echo 'You have not made a selection';
                           ?>
                    </div>
      <div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
                           <?php }else {
                                   echo 'Are you sure to dispense all prescription for this patient?'; ?>
             
      <div class="modal-footer">
	  <input type="submit" value="YES" name='dispense_prescription' class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
                             <?php  } ?>
                            
											
      
    </form>
    </div>
</div>
  </div>
<?php } ?>
<!-- Update Drug Modal content-->
<div id="new_drug" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Drug</h4>
            </div>
            <form  method="post"  action="../../controller/service_controller.php">
                <input type="hidden" name="stock_id" value="<?php echo $stock['stock_id'] ?>">
                <div class="modal-body">

                    <div class="">

                        <div class="form-group">
                            <label for="emr">Drug Name</label>
                            <input type="text" name="drug_name"  class="form-control" id="emr" required>
                        </div>
                        <div class="form-group">
                            <label for="no">Unit of Measure</label>
                            <select name="unit_of_measure"  class="form-control" id="no" required>
                                <option value="">Select an option</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Bottle">Bottle</option>
                                <option value="Packet">Packet</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Sachet">Sachet</option>
                                <option value="Jar">Jar</option>
                                <option value="Injection">Injection</option>
                                <option value="Patch">Patch</option>
                                <option value="Leather">Leather</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no">Quantity</label>
                            <input type="number" name="quantity"  class="form-control" id="no" required>
                        </div>
                        <div class="form-group">
                            <label for="no">Price</label>
                            <input type="number" name="unit_price"  class="form-control" id="no" required>
                        </div>
                    </div>							

                </div>
                <div class="modal-footer">
                    <input type="submit" name="add_drug" value="Add"  class="btn btn-primary ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>