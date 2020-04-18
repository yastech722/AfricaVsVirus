<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        session_start();
        if(isset($_SESSION['username'])){
        include '../model/db_conn.php';
      
            $order = get_customer_order();
        
        ?>
        <title>Orders</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../res/css/bootstrap.min.css">
        <link href="../res/img/logo.jpg" rel="icon" type="image">
    </head>
    <body>
        <nav class="navbar navbar-default ">
                <div class="container-fluid">

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse " id="navbar-collapse" style="margin-right: 120px" >

                        <ul class="nav navbar-nav navbar-right ">
                            <li><a href=""><span class="glyphicon glyphicon-earphone"></span> <span class="">123456789</span>
                                </a></li>
                            <li><a href="logout.php">Logout
                                </a></li>
                           
                        </ul>
                    </div ><!-- /.navbar-collapse -->
                </div ><!-- /.container-fluid -->
            </nav>
        <div class="container">



           

            <div class="row" style="padding: 10px 0px 10px 0px;">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <ul class="nav nav-pills nav-stacked " style="border: 1px solid blue">
                        <li><a href="admin.php">Cake Information</a></li>
                        <li><a href="view_cake.php">View Cakes</a></li>
                        <li class="active"><a href="order_list.php">View Orders</a></li>
                        <li><a href="password.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9">
<?php $count =count($order);
if($count>0){
?>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr> <th>#</th>
                                <th>Customer</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Order Date</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Action</th>
                            <tr>
                        </thead>
                        <tbody>
                            <?php
                            $sn = 0;
                            foreach ($order as $order) {

                                $sn++;
                                ?>
                                <tr>
                                    <td><?php echo $sn; ?></td>
                                    <td><?php echo $order['name'] ?></td>
                                    <td><?php echo $order['phone_number'] ?></td>
                                    <td><?php echo $order['address'] ?></td>
                                    <td><?php echo $order['order_date'] ?></td>
                                    <td><?php echo $order['items'] ?></td>
                                    <td><?php echo $order['total'] ?></td>
                                    
                                    <td><a href="view_order.php?email=<?php echo $order['customer_id'] ?>&phone=<?php echo $order['phone_number'] ?>&name=<?php echo $order['name'] ?> &order=<?php echo $order['id'];?>"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="../controller/order_controller.php?id=<?php echo $order['id'];?>&email=<?php echo $order['customer_id'] ?>&clear=1" ><i class=" glyphicon glyphicon-check" style="color: green"></i></a>
                                        <a href="../controller/order_controller.php?id=<?php echo $order['id'];?>&email=<?php echo $order['customer_id'] ?>&delete=1" ><i class=" glyphicon glyphicon-remove" style="color: red"></i></a>
                                    </td>

                                </tr>
                            <?php } ?>  

                        </tbody>
                    </table>
<?php } else {
 echo 'Order list is empty';
}?>
                </div>
            </div>
        </div>




        <br>


        <br><br>





    </div>
    <?php include '../res/includes/footer.php';
        }  else {
            header('location: ../index.php');    
        }