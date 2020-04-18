<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include '../model/db_conn.php';
    $email=$_GET['email'];
        $orders = get_ordered_items($email);
        ?>
        <head>
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
            

               
                <div class="row">

                   

                </div>

                <div class="row" style="padding: 0px 0px 10px 0px; ">
                    <h5>Customer Name:<?php echo ' '.$_GET['name'];?></h5>
                    <h5>Phone Number:<?php echo ' '.$_GET['phone'];?></h5>
                    <h6>Order Number:<?php echo ' '.$_GET['order'];?></h6>
                    
    <?php
   
        ?>
                        <table class="table table-bordered">
                            <thead>
                            <th>#</th>

                            <th>Name</th>
                            <th>Category</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>

                            <th>Total Price</th>
                            </thead>
                            <tbody>
        <?php
        $total = 0;
        $sn = 0;
        foreach ($orders as $order) {
            $sn++;
            ?>
                                    <tr>
                                        <td><?php echo $sn; ?></td>
                                        <td><?php echo $order['name']; ?></td>
                                        <td><?php echo $order['category']; ?></td>
                                        <td><?php echo $order['price']; ?></td>
                                        <td><?php echo $order['qty']; ?></td>
                                        <td><?php echo $order['price'] * $order['qty']; ?></td>
                                    </tr>   
            <?php
            $total+=$order['price'] * $order['qty'];
        }
        ?>

                            </tbody><tr >

                                <td colspan="5" align='left'>Total</td>
                                <td><?php echo $total; ?></td>
                            </tr>
                        </table>
                    
                    <a href="order_list.php">  <span class="btn   col-xs-1 btn-info" ><i class="glyphicon glyphicon-arrow-left"></i></span>
                    </a>
                    <a href="javascript:window.print();">  <span class="btn   col-xs-offset-10 col-xs-1 btn-success"><i class="glyphicon glyphicon-print"></i></span>
                    </a>
                   
                </div>

            </div>

        </div>

        <br>


        <br><br>





    </div>

    <script src="../res/js/jquery.min.js"></script>
    <script src="../res/js/bootstrap.min.js"></script>
    </body>
   
</html> 