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
      <li ><a href="new_patient.php">New Patient</a></li>
        <li><a href="find_patient.php">Find Patient</a></li>
        <li><a href="inbound.php">Inbound Patient <span class="badge"><?php echo get_inbound_count()?></span> </a>
		 </li>
		 <li><a href="admission_list.php">Admission <span class="badge"><?php echo get_admossion_count()?></span> </a>
</li>
<li><a href="billing.php">Billing <span class="badge"><?php echo get_transaction_count();?></span> </a></li>
<li><a href="report.php">Billing Report</a></li>
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
<div class="container">
<?php
$id=get_patient_count()+1;
$length= strlen(get_patient_count());
$emr_id="";

switch ($length) {
    case 1:
        $emr_id="0000000000".$id;
        break;
    case 2:
        $emr_id="000000000".$id;
        break;
    case 3:
        $emr_id="00000000".$id;
        break;
   case 4:
        $emr_id="0000000".$id;
        break;
  case 5:
        $emr_id="000000".$id;
        break;
		case 6:
        $emr_id="00000".$id;
        break;
		case 7:
        $emr_id="0000".$id;
        break;
		case 8:
        $emr_id="000".$id;
        break;
		case 9:
        $emr_id="00".$id;
        break;
		case 10:
        $emr_id="0".$id;
        break;
    default:
        $emr_id= $id;
}

 ?>
            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">
                                
                                <div class="col-xs-12">
                                    <h3>CREATE NEW PATIENT</h3><hr>
                                 
                                    <form  method="post"  action="../../controller/patient_controller.php?location=record&service_name=<?php echo 'Account_Creation'?>">
									<div class="col-xs-3">
									
                                        <div class="form-group">
                                            <label for="emr">EMR ID</label>
                                            <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $emr_id ?>" readonly="true">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" name="full_name" class="form-control" id="name" placeholder="FULL NAME" required>
                                                </div>
												
											<div class="form-group">
                                                <label for="no">Phone Number</label>
                                                <input type="text" name="phone_number" class="form-control" id="no" placeholder="PHONE NUMBER" required>
                                                </div>
												
												
											
											</div>
											
											<div class="col-xs-3">
											<div class="form-group">
                                                <label for="occ">Occupation</label>
                                                <input type="text" name="occupation" class="form-control" id="occ" placeholder="OCCUPATION (OPTIONAL)">
                                                </div>
                                            
												<div class="form-group">
                                                <label for="bld">Blood Group (OPTIONAL)</label>
                                                <select  name="blood_group" class="form-control" id="bld" >
												<option value="">Select an option</option>
												<option value="A">A</option>
												<option value="AB">AB</option>
												<option value="O+">O +</option>
												<option value="O-">O -</option>
												</select>
                                                </div>
												<div class="form-group">
                                                <label for="age">Date of Birth</label>
                                                <input type="date" name="age" class="form-control" id="age" placeholder="AGE" required>
                                                </div>
                                                </div>
												
												<div class="col-xs-3">
												
                                            
												<div class="form-group">
                                                <label for="gen">Gender</label>
                                                <select  name="gender" class="form-control" id="gen"  required>
												<option value="">Select an option</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
												</select>
                                                </div>
												<div class="form-group">
                                                <label for="geno">Genotype (OPTIONAL)</label>
                                                <select  name="genotype" class="form-control" id="geno" >
												<option value="">Select an option</option>
												<option value="AA">AA</option>
												<option value="AC">AC</option>
												<option value="AS">AS</option>
												<option value="SC">SC</option>
												<option value="SS">SS</option>
												
												</select>
                                                </div>
                                                <div class="form-group">
                                                <label for="addr">Address</label>
                                                <textarea name=address id=addr placeholder=Address class=col-xs-12></textarea>
                                                </div>
</div>
<div class="col-xs-3">
<div class="form-group">
                                                <label for="name">Next of Kin Name</label>
                                                <input type="text" name="NOK_name" class="form-control" id="name" placeholder="FULL NAME" required>
                                                </div>
												
											<div class="form-group">
                                                <label for="no">Next of Kin Phone Number</label>
                                                <input type="text" name="NOK_phone_number" class="form-control" id="no" placeholder="PHONE NUMBER" required>
                                                </div>
<div class="form-group">
                                                <label for="addr">Next of Kin Address</label>
                                                <textarea name=NOK_address id=addr placeholder=Address class=col-xs-12></textarea>
                                                </div>
</div>
<div class=row>
    <div class=col-xs-12>
												<button type="submit" name="create_patient"  class="btn btn-success btn-block">Create Patient</button>
                                                </div>
</div>
												
                                        
                                    
                                                        </form>
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

                       <?php include '../change_password.php';
					   include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }