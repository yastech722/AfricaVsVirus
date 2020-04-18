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
		 <li><a href="stock.php">Stock</a></li> 
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
                                 <div class="col-xs-12">
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>Prescription List</strong></h5><hr style="margin: 0px 0px 6px 0px">
									<div class="col-xs-12 col-sm-12 col-md-7" style="padding:0 0 20px 0;">    
                    <form method="post" action="../../controller/patient_controller.php">
									
                        <div class="col-sm-12 col-md-6" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Filter by EMR ID">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='find_prescription' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>  </form> 
					<div class="col-xs-12 col-sm-12 col-md-6" >
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#fillAll">Fill Quantity</a>
                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#dispenseAll"  >Dispense</a>
					<?php include 'modals.php'; ?>

					
					</div>
                        
                    </div>
                                                                             
									<div class="col-xs-12 col-sm-12 col-md-7" style="padding-bottom: 20px;">  
                     </div>
					
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr> <?php if(isset($_SESSION['patients'])){?>
							 <th><input type="checkbox" name="check_all" id="parent" onclick="checkAll()" checked=""></th>
                                                        <?php } else { echo "<th></th>"; }?>
                                <th>Prescription Date</th>
                                <th>EMR ID</th>
                                <th>Full Name</th>
                                <th>Prescription Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <?php
                            $sn = 0;
                            $patients=fetch_prescription_query();
							if (isset($_SESSION['patients'])){
                                                            $patients=$_SESSION['patients'];
                                                        }
							
                                                        foreach ($patients as $patient) {

                                $sn++;
                                ?>
                                <tr><?php if(isset($_SESSION['patients'])){?>
								<td><input type="checkbox" name="id[]" id="child" value="<?php echo $patients['emr_id'];?>">
								<input type="hidden" name="drug_name[]" value="<?php echo $patients['drug_name'];?>">
								</td>
								<?php } else{ echo '<td></td>';}?>
			
								<td><?php echo $patient[1]  ?></td>
                                                                 <td><?php echo $patient[2]  ?></td>
                                                                 <td><?php echo $patient[3]  ?></td>
									<td>
	<?php echo $patient['dose'].' of '.$patient['drug_name']. ' for '.$patient['duration'].' days;'?>
									</td>
									
                                    <td><?php if ($patient[4]==0){?>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#acknowledge<?php echo $patient[0];?>">Fill Quantity</a>
                                    <?php                                  }  elseif ($patient[4]==1) {?>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#dispense<?php echo $patient['prescription_id'];?>">Dispense</a>
                    
                                  <?php      }?>
									<?php include 'modal_iterate.php';?>
									</td>
									

                                </tr>
<?php } unset($_SESSION['patients']);?>  

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
<script>
    function checkAll(){
        var parent= document.getElementById('parent');
        var input= document.getElementsByTagName('input');
        if(parent.checked===true){
            for(var i=0; i<input.length; i++){
                if(input[i].type == "checkbox" && input[i].id == "child" && input[i].checked == false){
                input[i].checked = true;
        }
                    
        }
        
    }
     else if(parent.checked===false){
            for(var i=0; i<input.length; i++){
                if(input[i].type == "checkbox" && input[i].id == "child" && input[i].checked == true){
                input[i].checked = false;
        }
                    
        }
        
    }
    }
    </script>
<?php 
include 'modals.php';
include '../change_password.php';
include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }