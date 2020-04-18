<?php session_start(); ?>
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
 ?>
  
<body>
    
   
	     
<div class="container">
    <div class="row">
        <div class=" col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo $hospital['hospital_name']; ?></strong>
                        <br>
                        <?php echo $hospital['address']; ?>
                        
                       <?php echo $hospital['phone_number']; ?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo '  '.date('Y-m-d h:m:s'); ?></em>
                    </p>
                    <p>
                        <em>EMR ID: <?php echo '  '.$_SESSION['emr_id'][0];?></em>
                    </p>
                    <p>
                        <em>Invoice No:<?php echo '  '.$_SESSION['transaction_id'][0];?></em>
                    </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Invoice</h1>
                </div>
                <table class="table">
                <thead>
                        <tr>
                            <th>Description</th>
                            
                            <th>Qty</th>
                            
                            <th>Price</th>
                            
                            <th>Amount:</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id=$_SESSION['transaction_id'];
									$item=$_SESSION['item'];
									$price=$_SESSION['price'];
									$quantity=$_SESSION['quantity'];
									$total=0;
									if(is_array($id)){
									$length=count($id);
									
for($i=0; $i<$length; $i++){
$sub_total=$quantity[$i]*$price[$i];
$total+=$sub_total;
									?>
                        <tr>
                            <td class="col-md-9"><em><?php echo $item[$i]; ?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> <?php echo $quantity[$i]; ?> </td>
                            <td class="col-md-1 text-center">&#8358;<?php echo $price[$i]; ?></td>
                            <td class="col-md-1 text-center">&#8358;<?php echo $sub_total; ?></td>
                        </tr>
                        <?php }} ?>
                       
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>&#8358;<?php echo $total; ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                 <div class="text-center">Served by <?php echo $_SESSION['name']; ?></div>
                <button type="button" onclick="window.print()" class=" no-print btn btn-success btn-lg btn-block">
                    Print   
                </button>
                <a href="billing.php" class="no-print btn btn-default">Back</a>
            </div>
        </div>
    </div>
									
									
									
							
                                                    </div>
                                               

                                                              
 <?php 
					   
 } else{
 header ('Location: ../logout.php'); }