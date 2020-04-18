<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <div class="row" style="padding-top:20px">
  
									
									
                                        <div class="form-group">
                                             <h3>Presenting Complain, History and Examination</h3>
											<p>
                                            <textarea rows="10" cols="5" id='notes' name="clinical_notes" class="col-sm-12" placeholder="Presenting Complain, History and Examination....." ></textarea>
                                           </p> </div>
											<div class="form-group">
											
                                               </div>
												
                                        
                                    
                                                       
   
   
	</div>
  </div>
  <div id="menu1" class="tab-pane fade">
   
	<div class="row" style="padding-top:20px">
  
									
									
                                        <div class="form-group">
                                            <h3>Diagnosis</h3>
											<p>
                                            <textarea rows="10" cols="5"  name="details" class="col-sm-12" placeholder="Diagnosis....."></textarea>
                                           </p> </div>
											
												
                                        
                                    
                                                       
   
   
	</div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Investigation Required</h3>
	<p>
	<?php 
	foreach ($labs as $lab) {
	?>
	<div class="col-sm-2">
	<label class="checkbox inline"><input type="checkbox" name="test[]" value="<?php echo $lab['name'] ?>"><?php echo $lab['name'] ?></label>
		
				</div>
				
	<?php }?>	
				
               
				
</div>
          
   <div id="menu3" class="tab-pane fade">
    <h3>Treatment Plan</h3>
	<div class="row">
	<div class="col-xs-3">
	<div class="form-group">
                                                <label for="bld">Prescription Count</label>
                                                <select  name="count" class="form-control" id="bld" onchange="get_prescription_form(this.value)" >
												<option value="">Select an option</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												</select>
                                                </div> </div> </div>
												 <div class="row" id="p_form"></div>
												
			
</div>
<div id="menu4" class="tab-pane fade">
   
<input type="submit" name="save_visit" value="Sign & Close"  class="btn btn-success btn-block">
</div>
    </div>
   
  
