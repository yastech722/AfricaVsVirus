
<!-- Lab Result Modal content-->
<div id="fill_result<?php echo $patient[0];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fill Result</h4>
		Please ensure you tick the name of the test whose result you filled
      </div>
	  <form  method="post"  action="../../controller/patient_controller.php?visit_id=<?php echo $patient[0];?>">
      <div class="modal-body">
        <?php foreach ($tests as $test) {
	
?>
									
                                        <div class="form-group">
                                            <label for="emr"><input type="hidden" name="test[]" value="<?php echo $test[0];  ?>"><?php echo $test[0]; ?></label>
                                            <input type="text" name="result[]" class="form-control" id="emr" placeholder="<?php echo 'Fill Result For '.$test[0]; ?>" >
                                            </div>
		<?php } ?>
											
												
											
											
      </div>
      <div class="modal-footer">
	  <input type="submit" name="fill_lab_result" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>

<!-- Lab Investigation Modal -->
<div id="lab<?php echo $visit['visit_id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Investigation Required</h4>
      </div>
	   <form  method="post"  action="../../controller/patient_controller.php?visit_id=<?php echo $visit['visit_id']; ?>&visit_date=<?php echo $visit['visit_date']; ?>&emr_id=<?php echo $patient['emr_id'] ?>">
      <div class="modal-body">
	  <div class="row" style="padding-left:20px">
   <?php 

   foreach ($labs as $lab) {
	?>
	<div class="col-sm-2">
	<label class="checkbox inline"><input type="checkbox" name="test[]" value="<?php echo $lab['name'] ?>"><?php echo $lab['name'] ?></label>
		
				</div>
				
	<?php }?>
				
				
               </div>
				

      </div>
      
      
      <div class="modal-footer">
	  <input type="submit" name="order_investigation" value="Order" class="btn btn-default">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>