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
        <li class="active"><a href="service.php">Services</a></li>
</li>

        <li><a href="configuration.php">Configuration</a></li>

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
<div class="container">

            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row">
                                
                                <div class="col-xs-12"  >
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>SERVICE LIST</strong></h5><hr style="margin: 0px 0px 6px 0px">
									<div class="col-xs-12 col-sm-12" style="padding:0 0 20px 0;">  
<!--                    <form method="post" action="../../controller/service_controller.php">
                        <div class="col-sm-12 col-md-8" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Find service by Name or Location">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='find_service' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </form> </div>-->
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#service">Add Service</a>
					
					
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr> <th>#</th>
                                <th>Service Name</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$services=fetch_service();
							if(isset($_SESSION['services'])){
							$services=$_SESSION['services'];
							}
                            $sn = 0;
                            foreach ($services as $service) {

                                $sn++;
                                ?>
                                <tr>
								<td><?php echo $sn ?></td>
								<td><?php echo $service['name'] ?></td>
                                    <td><?php echo $service['location'] ?></td>
                                    <td><?php echo $service['price'] ?></td>
									
                                    <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">Actions
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="#" data-toggle="modal" data-target="#edit_lab_service<?php echo $service['service_id'];?>">Edit</a></li>
	  <?php if($service['name']!='Consultation' && $service['name']!='Account_Creation' && $service['name'] !='Card_Reprint'){ ?>
      <li><a href="#" data-toggle="modal" data-target="#delete<?php echo $service['service_id'];?>">Delete</a>
	
	</li>
	  <?php } ?>
  </ul>
</div>
<?php include 'modal_iterate.php';?>
</td>

                                </tr>
<?php } //unset($_SESSION['services']) ?>  

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
 <?php 
 include 'modals.php';
 include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }