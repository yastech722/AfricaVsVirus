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
       <li class=""><a href="lab_request.php">Lab Request <span class="badge"><?php echo get_lab_investigation_count()?></span></a></li>
  <li><a href="find_patient.php">Find Patient</a></li>
		 
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
				<div class="row" style="padding: 0px;margin-bottom: 10px;">

<div class="col-xs-12 col-sm-3">
<a href="lab_request.php">
<span  class=" btn btn-primary  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
    <h3 class="glyphicon glyphicon-tasks" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>LAB REQUEST</h3></span>
</a></div>
<div class="col-xs-12 col-sm-3">
<a href="find_patient.php">
<span  class="btn btn-success  text-center  col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
    <h3 class="glyphicon glyphicon-search" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>FIND PATIENT</h3></span>
</a></div>

<div class="col-xs-12 col-sm-3">
<a href="find_patient.php">
<span  class="btn btn-info  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
    <h3 class="glyphicon glyphicon-list-alt" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>NEW INVESTIGATION</h3></span>
</a></div>

<div class=" col-xs-12 col-sm-3">
<a href="../logout.php">
<span  class="btn btn-danger  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
    <h3 class="glyphicon glyphicon-lock" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>LOGOUT</h3></span>
</a></div>
</div>

              
 </div> 
<?php include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }