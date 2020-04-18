<?php session_start();?>
<html lang="en">
<head>
<title>YASMED</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../res/css/bootstrap.min.css">
  <link href="../res/img/logo.jpg" rel="image" type="icon">
  <style>
  @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
  </style>
</head>
<?php 
 if(isset($_SESSION['username'])){
 include '../../model/db_conn.php';
 $hospital= get_hospital();
 if(!isset($_GET['reprint']) && !isset($_GET['edit'])){
echo '<script> alert("Patient Created Succesfully");</script>';
$now=date('Y-m-d');
 ?>
  
<body>
    
   
	<div class="row">
                
<div class="container">

            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">
     <div class="container">
                                <div class="row">
								
									<div class='col-xs-5' >
                                                                            <div><h4 style="font-family: monospace"><?php echo $hospital['hospital_name']; ?></h4></div>
									<div><?php echo $hospital['address']; ?></div>
									<div><?php echo $hospital['phone_number']; ?></div>
                                 <h6><strong>PATIENT CARD</strong></h6>
                                    <form  method="post"  action="../../controller/patient_controller.php">
									<div class="input-group">
    <span class="input-group-addon">EMR ID</span>
   <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $_GET['emr_id']; ?>" readonly="true">

  </div>
									<div class="input-group">
    <span class="input-group-addon">Full Name</span>
   <input type="text" name="full_name" class="form-control" id="name" value="<?php echo $_GET['full_name']; ?>" required>
  </div><div class="input-group">
    <span class="input-group-addon">Phone Number</span>
   <input type="text" name="phone_number" class="form-control" id="no" value="<?php echo $_GET['phone_number']; ?>" required>
  </div><div class="input-group">
    <span class="input-group-addon">Age</span>
  <input type="text" name="age" class="form-control" id="age" value="<?php echo $now - $_GET['age']; ?>" required>
  </div><div class="input-group">
    <span class="input-group-addon">Gender</span>
   <input type="text" name="gender" class="form-control" id="name" value="<?php echo $_GET['gender']; ?>" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon">Date Registered</span>
   <input type="text" name="date_registered" class="form-control" id="reg" value="<?php echo $_GET['date_registered']; ?>"required>
  </div>
									
											
                                            
                                                
												<button type="submit" name="edit_patient"  class="no-print btn btn-success btn-block">Update Information</button>
												<a href="javascript:window.print();" class="no-print btn btn-primary btn-block">Print Patient Card</a>
                                                </form>
														</div>
                                    <div  class='col-xs-6 pull-right ' style="padding-top: 100px">
                                   <?php 
                                     require '../../res/vendor/autoload.php';
                                    $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();



echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($_GET['emr_id'], $generator::TYPE_CODE_128)) . '" width=400 height=200>';
                                    ?><div><h4 style="font-family: monospace"><?php echo $hospital['hospital_name']; ?></h4></div>
					
									</div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                </div>
                            </div>
							<a href="home.php" class="no-print btn btn-primary btn-block">Back</a>

							</div>






                        </div>

                       <?php 
 } else{ ?>
	 <div class="row">
                
<div class="container">

           
     <div class="container">
                                <div class="row">
								
									<div class='col-xs-5' >
                                                                            <div><h4 style="font-family: monospace"><?php echo $hospital['hospital_name']; ?></h4></div>
									<div><?php echo $hospital['address']; ?></div>
									<div><?php echo $hospital['phone_number']; ?></div>
                                 <h6><strong>PATIENT CARD</strong></h6>
                                    <form  method="post"  action="../../controller/patient_controller.php">
									<div class="input-group">
    <span class="input-group-addon">EMR ID</span>
   <input type="text" name="emr_id" class="form-control" id="emr" value="<?php echo $_GET['emr_id']; ?>" readonly="true">

  </div>
									<div class="input-group">
    <span class="input-group-addon">Full Name</span>
   <input type="text" name="full_name" class="form-control" id="name" value="<?php echo $_GET['full_name']; ?>" readonly>
  </div><div class="input-group">
    <span class="input-group-addon">Phone Number</span>
   <input type="text" name="phone_number" class="form-control" id="no" value="<?php echo $_GET['phone_number']; ?>" readonly>
  </div><div class="input-group">
    <span class="input-group-addon">Age</span>
  <input type="text" name="age" class="form-control" id="age" value="<?php echo $_GET['age']; ?>" readonly>
  </div><div class="input-group">
    <span class="input-group-addon">Gender</span>
   <input type="text" name="gender" class="form-control" id="name" value="<?php echo $_GET['gender']; ?>" readonly>
  </div>
  <div class="input-group">
    <span class="input-group-addon">Date Registered</span>
   <input type="text" name="date_registered" class="form-control" id="reg" value="<?php echo $_GET['date_registered']; ?>"readonly>
  </div>
									
											
                                            
                                                
<!--												<button type="submit" name="edit_patient"  class="no-print btn btn-success btn-block">Update Information</button>-->
												<a href="javascript:window.print();" class="no-print btn btn-primary btn-block">Print Patient Card</a>
                                                </form>
														</div>
							<div  class='col-xs-6 pull-right ' style="padding-top: 100px">
                                   <?php 
                                     require '../../res/vendor/autoload.php';
                                    $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();



echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($_GET['emr_id'], $generator::TYPE_CODE_128)) . '" width=400 height=200>';
                                    ?><div><h4 style="font-family: monospace"><?php echo $hospital['hospital_name']; ?></h4></div>
					
									</div>
                                                    </div>
                                                </div>

                                          
                            
							<a href="home.php" class="no-print btn btn-primary btn-block">Back</a>

							</div>






                        </div>

	 
 <?php }
					   
 } else{
 header ('Location: ../logout.php'); }