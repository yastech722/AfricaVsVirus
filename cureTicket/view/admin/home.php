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
      <li ><a href="account.php">Accounts</a></li>
        <li><a href="service.php">Services</a></li>
		
        <li><a href="configuration.php">Configuration</a></li>
</li>

    </ul>
	<ul class="nav navbar-nav navbar-right ">
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-setting"></i>Settings <span class="caret"></span></a>
                            <ul class="dropdown-menu">
							<li><a href="service.php">Edit Services</a></li>
							<li><a href="account.php">View Accounts</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#change_password">Change My Password</a></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                    
                                 
                            </ul>
                        </li>
                        
                    </ul>
	
                    </div>
                </nav> 
 
    <div class="row" style="padding: 0px;">
     <div class="col-xs-12 " style="padding: 0px;">

<div class="col-xs-12 col-sm-3">
<a href="account.php">
<span  class=" btn btn-primary  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
    <h3 class="glyphicon glyphicon-user" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>ACCOUNT</h3></span>
</a></div>
<div class="col-xs-12 col-sm-3">
<a href="service.php">
<span  class="btn btn-success  text-center  col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
    <h3 class="glyphicon glyphicon-cog" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>SERVICE</h3></span>
</a></div>

<div class=" col-xs-12 col-sm-3">
<a href="configuration.php">
<span  class="btn btn-info  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
    <h3 class="glyphicon glyphicon-wrench" style="margin-bottom: 0px; margin-top: 0px"></h3><h3>CONFIGURATION</h3></span></a></div>

<div class="col-xs-12 col-sm-3">
<a href="../logout.php">
<span  class="btn btn-danger btn-block  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
    <h3 class="glyphicon glyphicon-lock" style="margin-bottom: 0px; margin-top: 0px"></h3>
    <h3>LOGOUT</h3></span></a></div>
</div>
</div>
       
      </div>  

 
 
<?php include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }