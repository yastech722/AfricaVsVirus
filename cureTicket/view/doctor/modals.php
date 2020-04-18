<!-- Open Procedure Modal -->
<div id="openProcedure<?php echo $patient['procedure_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">PRE ANAESTHETIC EVALUATION</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?">
                
                <input type="hidden" name="procedure_id" value="<?php echo $patient['procedure_id'] ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Past Medical History</label>
                                <input type="text"  name="past_medical_history" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Present Medical History</label>
                                <input type="text" name="present_medical_history" class="form-control" id="bld">

                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Anaesthetic History</label>
                                <input type="text" name="anesthetic_medical_history" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Current Medication</label>
                                <input type="text" name="current_medication" class="form-control" id="bld">
                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">Allergy Reaction</label>
                                <input type="text" name="allergy_reaction"  class="form-control" id="bd">
                            </div> 
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">Dental History</label>
                                <input type="text" name="dental_history"  class="form-control" id="bd">
                            </div> 
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">Family/Other History</label>
                                <input type="text" name="family_social_gynea_history"  class="form-control" id="bd">


                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Physical/Systemic: Examination:</label>
                                <textarea name="examination" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div>
                    </div>		
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Airway Assesement</label>
                                <input type="text"  name="airway_assessment" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Mouth</label>
                                <input type="text" name="mouth" class="form-control" id="bld">

                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Neck</label>
                                <input type="text" name="neck" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Thyroid Mental Distance</label>
                                <input type="text" name="thyroid_mental_distance" class="form-control" id="bld">
                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Mallamphati Score</label>
                                <input type="text" name="mallamphati_score" class="form-control" id="bld">
                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Plan</label>
                                <textarea name="Plan" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Anaesthetist Name</label>
                                <input type="text" name="anesthetist" class="form-control" id="bld">
                            </div> </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="submit" name="open_procedure" value="Save" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Open Procedure Modal -->
<div id="concludeAnesthesia<?php echo $patient['procedure_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ANAESTHESIA RECORD</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?procedure_id=<?php echo $patient['procedure_id'] ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Theatre</label>
                                <input type="text"  name="theater" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Position</label>
                                <input type="text" name="position" class="form-control" id="bld">

                            </div> </div>
                    </div><div class="row">
                        <h4>PRE-OP ASSESSMENT:</h4>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld"> B/P</label>
                                <input type="text"  name="pre_op_assessment" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">HR/PR</label>
                                <input type="text" name="HR_PR" class="form-control" id="bld">

                            </div> </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">URINALYSIS</label>
                                <input type="text"  name="urinalysis" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">HB/PVC</label>
                                <input type="text" name="HR_PVC" class="form-control" id="bld">

                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">ALLERGIES</label>
                                <input type="text" name="allergies" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">WEIGHT</label>
                                <input type="text" name="weight" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">ASA</label>
                                <input type="text" name="asa" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">TEMPERATURE</label>
                                <input type="text" name="temperature" class="form-control" id="bld">
                            </div> </div>
                    </div>
                    <div class="row">
                        <h4>PREMEDICATION</h4>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bd">TIME GIVEN</label>
                                <input type="text" name="time_given"  class="form-control" id="bd">
                            </div> 
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bd">TIME:LAST FOOD</label>
                                <input type="text" name="time_of_last_food"  class="form-control" id="bd">
                            </div> 
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bd">IV-LINE SITE</label>
                                <input type="text" name="iv_line_site"  class="form-control" id="bd">
                            </div> 
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bd">CANULA SIZE</label>
                                <input type="text" name="canula_size"  class="form-control" id="bd">
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">OTHER LAB RESULT</label>
                                <input type="text" name="other_result"  class="form-control" id="bd">
                            </div> 
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Techniques:</label>
                                <textarea name="techniques" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div>
                    </div>		
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">Fluid and Blood</label>
                                <input type="text"  name="fluid_and_blood" class="form-control" id="bld">
                            </div> </div> 
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">Total Input</label>
                                <input type="text" name="total_input" class="form-control" id="bld">

                            </div> </div>

                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">Urine Output</label>
                                <input type="text" name="urine_input" class="form-control" id="bld">
                            </div> </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="bld">Blood Loss</label>
                                <input type="text" name="blood_loss" class="form-control" id="bld">
                            </div> </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Post Operative Instructions:</label>
                                <textarea type="text" name="post_operative_instruction" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <input type="submit" name="conclude_anesthesia" value="Save" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Conclude Procedure Modal -->
<div id="concludeProcedure<?php echo $patient['procedure_id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">OPERATION NOTES</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?procedure_id=<?php echo $patient['procedure_id'] ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Diagnosis(operative)</label>
                                <input type="text"  name="operative_diagnosis" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Surgeon</label>
                                <input type="text" name="surgeon" class="form-control" id="bld">

                            </div> </div>
                    </div><div class="row">

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld"> Assistant</label>
                                <input type="text"  name="assistant" class="form-control" id="bld">

                            </div> </div> 
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="bld">Operation Date</label>
                                <input type="text" name="operation_date" class="form-control" id="bld">

                            </div> </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Findings/Post operative treatment</label>
                                <textarea name="post_operative_treatment" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div>
                    </div>		
                </div>

                <div class="modal-footer">
                    <input type="submit" name="conclude_procedure" value="Save" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Lab Investigation Modal -->
<div id="lab" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Investigation Required</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?visit_id=<?php echo $_SESSION['VISIT_ID'] ?>&visit_date=<?php echo $_SESSION['visit_date'] ?>&emr_id=<?php echo $_SESSION['EMR_ID'] ?>">
                <div class="modal-body">
                    <div class="row" style="padding-left:20px">
                        <?php foreach ($labs as $lab) {
                            ?>
                            <div class="col-sm-2">
                                <label class="checkbox inline"><input type="checkbox" name="test[]" value="<?php echo $lab['name'] ?>"><?php echo $lab['name'] ?></label>

                            </div>

                        <?php } ?>


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
<?php if (isset($_SESSION['VISIT_ID']) && is_admited($_SESSION['VISIT_ID']) != 0) { ?>
    <!-- Admission Modal -->
    <div id="admission" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ORDER ADMISSION OF THIS PATIENT</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                    <div class="modal-body">

                        Admission has been ordered for this patient already
                    </div>



                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>

        </div>
    </div>
<?php } else { ?>

    <!-- Admission Modal -->
    <div id="admission" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ORDER ADMISSION OF THIS PATIENT</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="bld">Facility</label>
                                    <select  name="facility" class="form-control" id="bld">
                                        <option value="">Select an option</option>
                                        <?php
                                        $facilities = get_service_name('Admission');
                                        foreach ($facilities as $facility) {
                                            ?>
                                            <option value="<?php echo $facility['name']; ?>"><?php echo $facility['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div> </div> </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="bld">Location</label>
                                    <input type="text"  name="location" placeholder="eg Aminity Room 1 or Antinantal Ward" class="form-control" id="bld">


                                </div> </div> </div>
                        <div class="row" id="p_form"></div>


                        <div class="modal-footer">
                            <input type="submit" name="order_admission" value="Order" class="btn btn-default" >
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
    </div> <?php } ?>


<!-- Procedure Modal -->
<div id="procedure" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ORDER PROCEDURE FOR THIS PATIENT</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Procedure Name</label>
                                <select  name="procedure_name" class="form-control" id="bld">
                                    <option value="">Select an option</option>
                                    <?php
                                    $procedures = get_service_name('Procedure');
                                    foreach ($procedures as $procedure) {
                                        ?>
                                        <option value="<?php echo $procedure['name']; ?>"><?php echo $procedure['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div> </div> </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Primary Diagnoses</label>
                                <textarea name="primary_diagnoses" rows='3' maxlength="200" cols='12' class="form-control" id="bld"></textarea>
                            </div> </div> </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">Procedure Fee</label>
                                <input type="number" name="procedure_fee"  class="form-control" id="bd">
                            </div> 
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bd">Schedule Date</label>
                                <input type="date" name="start_date"  class="form-control" id="bd">


                            </div> </div> </div>		

                </div>

                <div class="modal-footer">
                    <input type="submit" name="order_procedure" value="Order" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Prescription Order Modal -->
<div id="prescription" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New Prescription</h4>
            </div>
            <form  method="post"  action="../../controller/patient_controller.php?visit_id=<?php echo $_SESSION['VISIT_ID'] ?>&visit_date=<?php echo $_SESSION['visit_date'] ?>&emr_id=<?php echo $_SESSION['EMR_ID'] ?>">
                <div class="modal-body">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="bld">Prescription Count</label>
                                <select  name="count" class="form-control" id="bld" onchange="get_prescription_form_in_modal(this.value)" >
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
                            </div> 

                        </div> </div>
                    <div  id="p_mform"></div>
                </div>


                <div class="modal-footer">
                    <input type="submit" name="order_prescription" value="Order" class="btn btn-default" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>