<?php 
  session_start();
 if(isset($_SESSION['username'])){
 include '../../res/includes/header.php';
 unset($_SESSION['VISIT_ID']);
 ?>


    <div class="row">
	<nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                           <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                        </div>
                       <ul class="nav navbar-nav">
       <li><a href="appointment_list.php">Appointment List <span class="badge"><?php echo get_appointment_count(); ?></span> </a>
</li>
<li><a href="find_patient.php">Find Patient</a></li>
<li><a href="procedures.php">Procedures <span class="badge"><?php echo fetch_procedure_count(); ?></span></a></li>
                    <li><a href="anesthesia.php">Anaesthesia <span class="badge"><?php echo fetch_open_procedures_count(); ?></span></a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right ">
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-setting"></i>Settings <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="../logout.php">Logout</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#change_password">Change My Password</a></li>
                                 
                            </ul>
                        </li>
                        
                    </ul>
	
                    </div>
                </nav> 
 
 </div>
<div class="container">

            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
					
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">
                                
                                <div class="col-xs-12">
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>FIND PATIENT</strong></h5><hr style="margin: 0px 0px 6px 0px">
									<div class="col-xs-12 col-sm-12 col-md-7" style="padding:0 0 20px 0;">   
                    <form method="post" action="../../controller/patient_controller.php">
                        <div class="col-sm-12 col-md-8" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Find patient by EMR ID, Name or Phone Number">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='find_patient' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </form> </div>
					
                    <table class="table table-bordered">
                        <thead>
                            <tr> <th>#</th>
                                <th>EMR ID</th>

                                <th>Full NAme</th>
                                <th>Phone Number</th>
                                <th>Gender</th>
                                <th>Action</th>
                            <tr>
                        </thead>
                        <tbody>
                           <?php
							if(isset($_SESSION['patients'])){
							$patients=$_SESSION['patients'];
                            $sn = 0;
							$now= date('Y-m-d h:m:s');
                            foreach ($patients as $patient) {
$visit_id=get_last_visit_id($patient['emr_id']);
                                $sn++;
$visit_date=  get_last_visit_date($visit_id)['visit_date'];								
                                ?>
                                <tr>
								<td><?php echo $sn ?></td>
                                    <td><?php echo $patient['emr_id'] ?></td>
                                    <td><?php echo $patient['full_name'] ?></td>
									<td><?php echo $patient['phone_number'] ?></td>
                                    <td><?php echo $patient['gender'] ?></td>
                                    <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  <?php if($visit_id == "" || is_book_appointment($patient['emr_id'])==0){  ?>
  <li><a href="../../controller/patient_controller.php?book_appointment=<?php echo $patient['emr_id'];?>">Book Appointment</a></li> <?php } else{ 
      if (is_bill_cleared($patient['emr_id'])==0){ ?>
  <li><a href="patient_visit.php?visit_id=<?php echo $visit_id?>&emr_id=<?php echo $patient['emr_id'] ?>&name=<?php echo $patient['full_name'] ?>&age=<?php echo $patient['age'] ?>&gender=<?php echo $patient['gender'] ?>">Start Session</a></li> <?php
  } else {?> <li><a href="" data-toggle="modal" data-target="#showWarning" >Start Session</a></li> <?php }
      } ?>
  
    <li><a href="patient_profile.php?visit_id=<?php echo $visit_id?>&emr_id=<?php echo $patient['emr_id'] ?>&name=<?php echo $patient['full_name'] ?>&age=<?php echo $patient['age'] ?>&gender=<?php echo $patient['gender'] ?>&visit_date=<?php echo $visit_date; ?>">Check Notes</a></li>
  </ul>
</div></a></td>
<div id="showWarning" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">START SESSION</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                    <div class="modal-body">

                        CANNOT START A SESSION WITH THIS PATIENT HE/SHE HAS AN OUTSTANDING BALANCE OF NGN<?PHP echo is_bill_cleared($patient['emr_id']); ?> TO CLEAR
                    </div>



                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>

        </div>
    </div>
                                </tr>
<?php }} unset($_SESSION['patients']) ?>   

                        </tbody>
                    </table>
                
                                 
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                </div>
                            </div>
							</div>

                            <br>


                            <br><br>





                        </div>
						<!-- Modal -->
<div id="vitalSigns" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Vital Signs</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
                                                <label for="bld">Vital Sign</label>
                                                <select  name="vital_sign_type" class="form-control" id="bld"  required>
												<option value="">Select an option</option>
												<option value="Blood Pressure (mmHg)">Blood Pressure (mmHg)</option>
												<option value="Glucose (mg/dl)">Glucose (mg/dl)</option>
												<option value="Pulse (beats/min)">Pulse (beats/min)</option>
												<option value="Respiration (beats/min)">Respiration (beats/min)</option>
												<option value="Respiration (beats/min)">Tempreture (<super>o</super>C)</option>
												</select>
                                                </div>
												
                                               
											<div class="form-group">
                                                
                                                <input type="text" name="vital_sign_value" class="form-control" placeholder="Value" required>
                                                </div>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

                          <?php include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }