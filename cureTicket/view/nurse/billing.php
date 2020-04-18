<?php session_start();
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

            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">
                                
                                <div class="col-xs-12">
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>BILLING LIST</strong></h5><hr style="margin: 0px 0px 6px 0px">
									<form method="post" action="../../controller/transaction_controller.php">
									<div class="col-xs-12 col-sm-12 col-md-7" style="padding:0 0 20px 0;">    
                    
                        <div class="col-sm-12 col-md-8" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Filter by EMR ID">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='find_transaction' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
					<div class="col-xs-12 col-sm-12 col-md-3" >
					<a href="" class="btn btn-primary" data-toggle="modal" data-target="#confirmInvoice"  >Generate Invoice</a>
					<!-- Commit Transaction Modal content-->
<div id="confirmInvoice" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Commmit Transaction</h4>
      </div>
	        <div class="modal-body">
        <h5>Are you sure to commit transaction</h5>
											
      </div>
      <div class="modal-footer">
	  <input type="submit" value="YES" name='generate_invoice' class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
      </div>
	  
    </div>

  </div>
</div>
					
					</div>
                        
                    </div>
					
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <?php if(isset($_SESSION['transactions'])){?>
							 <th><input type="checkbox" name="check_all" id="parent" onclick="checkAll()" checked=""></th>
                                                        <?php } else { echo "<th></th>"; }?>
                               
                                <th>EMR ID</th>
                                <th>Location</th>
                                <th>Item Name</th>
                                <th>Unit price</th>
								<th>Quantity</th>
								<th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						
                            <?php
							$transactions=fetch_transactions();
							if(isset($_SESSION['transactions'])){
							$transactions=$_SESSION['transactions'];
							}
                            $sn = 0;
                            foreach ($transactions as $transaction) {
                                $sn++;
                                ?>
                                <tr>
								<?php if(isset($_SESSION['transactions'])){?>
								<td><input type="checkbox" name="id[]" id="child" value="<?php echo $transaction['transaction_id'];?>">
								<input type="hidden" name="item[]" value="<?php echo $transaction['item_name'];?>">
								<input type="hidden" name="price[]" value="<?php echo $transaction['unit_price'];?>">
								<input type="hidden" name="quantity[]" value="<?php echo $transaction['quantity'];?>">
								<input type="hidden" name="emr_id[]" value="<?php echo $transaction['emr_id'];?>">
                                                                <input type="hidden" name="location[]" value="<?php echo $transaction['location'];?>">
								</td>
								<?php } else{ echo '<td></td>';}?>
								<td><?php echo $transaction['emr_id'] ?></td>
                                    <td><?php echo $transaction['location'] ?></td>
                                    <td><?php echo $transaction['item_name'] ?></td>
								<td><?php echo $transaction['unit_price'] ?></td>
                                    <td><?php echo $transaction['quantity'] ?></td>
									<td><?php echo $transaction['transaction_date'] ?></td>
                                    <td>
 
   
   </form>

                                    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
 
    <li><a href="" data-toggle="modal" data-target="#confirmInvoice<?php echo $transaction['transaction_id'];?>" >Print Receipt
  </a></li>
	<li><a href="#?a=a" data-toggle="modal" data-target="#reverseTransaction<?php echo $transaction['transaction_id'];?>">Reverse Transaction</a></li>
      </ul>
                                        <?php include 'modals.php';?>
</div>
</td>


                                </tr>
<?php } unset($_SESSION['transactions']) ?>  

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
                           <?php include '../change_password.php';
						 include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }