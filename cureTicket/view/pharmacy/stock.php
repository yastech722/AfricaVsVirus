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
       <li><a href="prescription_order.php">Prescription Order <span class="badge"><?php echo get_prescription_count();?></span> </a></li>
      <li><a href="find_patient.php">Find Patient</a></li>
		<li class="active"><a href="stock.php">Stock</a></li> 
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

                            <div class="row">
                                
                                <div class="col-xs-12"  >
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>STOCK ITEMS</strong> <a href="customer_signup.php"></a></h5><hr style="margin: 0px 0px 6px 0px">
									<div class="col-xs-12 col-sm-12" style="padding:0 0 20px 0;">  
<!--                    <form method="post" action="../../controller/service_controller.php">
                        <div class="col-sm-12 col-md-8" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Find Drugs by Name">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='find_drug' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </form> </div>-->
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#new_drug">New Drug</a>
					
					
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr> <th>#</th>
                                <th>Drug Name</th>
                                <th>Unit Of Measure</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$stocks=fetch_stock();
							if(isset($_SESSION['stocks'])){
							$stocks=$_SESSION['stocks'];
							}
                            $sn = 0;
                            foreach ($stocks as $stock) {

                                $sn++;
                                ?>
                                <tr>
								<td><?php echo $sn ?></td>
								<td><?php echo $stock['drug_name'] ?></td>
                                    <td><?php echo $stock['unit_of_measure'] ?></td>
                                    <td><?php echo $stock['quantity'] ?></td>
									<td><?php echo $stock['unit_price'] ?></td>
                                    
                                    <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">Actions
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="#" data-toggle="modal" data-target="#edit_drug<?php echo $stock['stock_id'];?>">Edit</a></li>
    <li><a href="#" data-toggle="modal" data-target="#delete_drug<?php echo $stock['stock_id'] ?>">Delete</a></li>
  </ul>
</div>
<?php include 'modal_iterate.php';?>
</td>

                                </tr>
<?php } unset($_SESSION['stocks']) ?>  

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