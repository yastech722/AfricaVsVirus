<?php 
  session_start();
 if(isset($_SESSION['username'])){
 include '../../res/includes/header.php';
 
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
              
     <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr> <th>#</th>
                                <th>EMR ID</th>

                                <th>Full Name</th>
                                <th>Age</th>
                                <th>Gender</th>
								
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$patients =fetch_appointment();
							if(count($patients)>0){
							
							}
                            $sn = 0;
                            foreach ($patients as $patient) {

                                $sn++;
                                ?>
                                <tr>
								
                                   <td><?php echo $sn ?></td>
								<td><?php echo $patient[0] ?></td>
                                    <td><?php echo $patient[1] ?></td>
                                    <td><?php echo $patient[2] ?></td>
									<td><?php echo $patient[3] ?></td>
                                                                        <?php if (is_bill_cleared($patient[0])==0){ ?>
                                                                        <td><a href="patient_visit.php?visit_id=<?php echo $patient[4]?>&emr_id=<?php echo $patient[0] ?>&name=<?php echo $patient[1] ?>&age=<?php echo $patient[2] ?>&gender=<?php echo $patient[3] ?>" class="btn btn-primary btn-small">Start Session</a></td>
                                                                        <?php } else {?> <td><a href="" data-toggle="modal" data-target="#showWarning<?php echo $patient[0] ?>" class="btn btn-primary btn-small">Start Session</a></td> <?php }
                                                                        ?>
                                                                        <div id="showWarning<?php echo $patient[0] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">START SESSION</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                    <div class="modal-body">

                        CANNOT START A SESSION WITH THIS PATIENT HE/SHE HAS AN OUTSTANDING BALANCE OF NGN<?PHP echo is_bill_cleared($patient[0]); ?> TO CLEAR
                    </div>



                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>

        </div>
    </div>



                                </tr>
<?php } ?>  

                        </tbody>
                    </table> 
    </div>
    
    
     
    </div>
 </div>

<?php 
                            
include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }