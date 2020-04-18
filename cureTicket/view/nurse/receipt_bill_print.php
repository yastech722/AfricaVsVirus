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
                    
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Payment Receipt</h1>
                </div>
                </span>
                <table class="table">
                    <thead>
                        <tr>
                            <td>EMR ID:</td>
                            <td><?php echo $_SESSION['emr_id'];?></td>
                        </tr>
                         <tr>
                            <td>Transaction Number:</td>
                            <td><?php echo $_SESSION['transaction_id'][0];?></td>
                        </tr>
                        
                        
                        <tr>
                            <td>Description:</td>
                            <td><?php echo $_SESSION['item']; ?></td>
                        </tr>
                         <tr>
                            <td>Amount:</td>
                            <td><?php echo $_SESSION['price'] ?></td>
                        </tr>
                    </thead>
                    
                </table>
                <div class="text-center">Served by <?php echo $_SESSION['name']; ?></div>
                <button type="button" onclick="window.print()" class=" no-print btn btn-success btn-lg btn-block">
                    Print
                </button></td>
            </div>
        </div>
    </div>                   
 <?php 
					   
 } else{
 header ('Location: ../logout.php'); }