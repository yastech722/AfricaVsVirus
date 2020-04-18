<?php session_start();
 if(isset($_SESSION['username'])){
 include '../../res/includes/header.php';
 ?>
     
   
	<div class="row ">
                <nav class="navbar navbar-default no-print">
                    <div class="container-fluid">
                        <div class="navbar-header">
                           <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                        </div>
                       <ul class="nav navbar-nav no-print">
      <li ><a href="new_patient.php">New Patient</a></li>
        <li><a href="find_patient.php">Find Patient</a></li>
        <li><a href="inbound.php">Inbound Patient <span class="badge"><?php echo get_inbound_count()?></span> </a>
		 </li>
		 <li><a href="admission_list.php">Admission <span class="badge"><?php echo get_admossion_count()?></span> </a>
</li>
<li><a href="billing.php">Billing <span class="badge"><?php echo get_admossion_count()?></span> </a></li>
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

            <div class="panel-group no-print" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">
                                
                                <div class="col-xs-12">
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>BILLING LIST</strong></h5><hr style="margin: 0px 0px 6px 0px">
								
								<form class="form-inline" method="POST" action="../../controller/transaction_controller.php">
  <div class="form-group">
    <label for="from">From:</label>
    <input type="date" name="from" class="form-control" id="from" required>
  </div>
  <div class="form-group">
    <label for="to">To:</label>
    <input type="date" class="form-control" name="to" id="to" required>
  </div>
  <input type="submit" name="get_report" class="btn btn-primary" value="Generate Report" >
</form></div>
					 </div> </div>
 </div>

                                        </div>
                                </div>
								<?php if (isset($_SESSION['bills']) && count($_SESSION['bills'])>0){
                                                                    $hospital= get_hospital();
                                                                    ?>
								
								<div class="row">
        <div class="col-xs-12">      

            <div class="panel-group" >
                <div class="panel panel-default">
                    
                    <div  class="panel">
                        <div class="panel-body">
     
                                <div class="row">
													<div  class='col-xs-7 '>
                                    <h3 ><?php echo $hospital['hospital_name']; ?></h3>
									
									<div><?php echo $hospital['address']; ?></div>
                                                                        <div><?php echo $hospital['phone_number']; ?></div>
									</div >
                                                                        <div class='col-xs-3 '> <a href="javascript:window.print();" class="text-bold pull-right"><i class="no-print glyphicon glyphicon-print" ></i></a></div>
									</div><hr style="padding:0px; margin:0px 0 0px 0;">
									<div class='row' style="padding-top:0px">
									
                                 <div class='col-xs-12'><h6><strong>BILLING REPORT FROM  <?php echo $_SESSION['from']; ?>  TO <?php echo $_SESSION['to']; ?>  </strong></h6></div>
								 <div class='col-xs-12'><h6><strong>BY<?php echo '  '.$_SESSION['name'];?></strong></h6></div>
								 								 </div>
								 <hr style="padding:0px; margin:0px 0 0px 0;">
									<div class='row' style="padding-top:0px">
									<div class="col-xs-12">
                                    <table class="table">
									<tr>
									<td>#</td>
									<td>DATE</td>
									<td>EMR_ID</td>
									<td>Items</td>
									<td>Unit Price</td>
									<td>Quantity</td>
									<td>Amount</td>
									</tr>
									<?php 
								
									$bills=$_SESSION['bills'];
									$sn=0;
									$total=0;
									foreach($bills as $bill){
									
$sn++;
$sub_total=$bill['quantity']*$bill['unit_price'];
$total+=$sub_total;
									?>
									<tr>
									<td><?php echo $sn;?></td>
									<td><?php echo $bill['transaction_date']; ?></td>
									<td><?php echo $bill['emr_id']; ?></td>
									<td><?php echo $bill['item_name']; ?></td>
									<td>&#8358;<?php echo $bill['unit_price']; ?></td>
									<td><?php echo $bill['quantity']; ?></td>
									<td>&#8358;<?php echo $sub_total; ?></td>
									</tr>
									<?php }?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><strong>Total:</strong></td>
									<td><strong>&#8358;<?php echo $total; ?></strong></td>
</tr>
									</table>
														</div>
									
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                </div>
	  </div>
							

								</div>  <?php }
								unset($_SESSION['bills']);
								?>	</div> 
								
                            </div>
							</div>

                            <br>


                            <br><br>





                        </div>

                           <?php include '../change_password.php';
						 include '../../res/includes/footer.php';
 } else{
 header ('Location: ../logout.php'); }