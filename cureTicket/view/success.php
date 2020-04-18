<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include '../model/db_conn.php';
    if (isset($_SESSION['customer'])) {
        
        ?>
    <head>
        <title>Success</title>
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
                            <li><a href="login.php">Login
                                </a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>My Account <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                     <?php   if (isset($_SESSION['customer'])) { ?>
                                    <li><a href="logout.php">Logout</a></li>
                                    <?php 
                                 }else{ ?>
                                    <li><a href="customer_login.php">Login</a></li>
                                    <li><a href="customer_login.php">Register</a></li>
                                 <?php } ?>
                                </ul>
                            </li>
                            <li class="">
                                <a href="order.php"><span class="glyphicon glyphicon-shopping-cart "></span><span>Checkout</span></a>
                            </li>
                        </ul>
                    </div ><!-- /.navbar-collapse -->
                </div ><!-- /.container-fluid -->
            </nav>
        <div class="container">
          <div class="row" style="padding:0px 0px 20px 0px;">
                <div class="col-xs-12 col-sm-12 col-md-5" style="padding: 0px;">  
                    <a href="../index.php"> <img src="../res/img/logo.jpg">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7" style="padding: 0px;">  
                    <form method="post" action="../controller/cake_controller.php">
                        <div class="col-sm-12 col-md-6" style="padding: 0px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Search">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='search' type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <?php
                            if (isset($_SESSION['order_count'])) {
                                ?>
                                <a href="view/order.php"> <span  class="btn btn-default col-xs-12">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $_SESSION['order_count']; ?> item(s) 
                                    </span> </a>
                                <?php
                            } else {
                                ?>  <a href="view/order.php"><span  class="btn btn-default col-xs-12">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> 0 item(s) 
                                    </span></a>
                            <?php } ?>
                        </div>
                    </form> </div>

            </div>

            <div class="row info">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="../index.php">ECake</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="cake.php?category=sponge">Sponge</a></li>
        <li><a href="cake.php?category=chocolate">Chocolate</a></li>
        <li><a href="cake.php?category=birthday">Birthday</a></li>
        <li><a href="cake.php?category=cup">Cup</a></li>
        <li><a href="cake.php?category=wedding">Wedding</a></li>
        <li><a href="cake.php?category=vanilla">Vanilla</a></li>
                        </ul>
                    </div>
                </nav> </div>
            <div class="row">

                <div class="col-xs-12">
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">  <i class="glyphicon glyphicon-home"></i></a> 

                        </li>
                        <li class="active">Search</li>
                    </ol>
                </div>

            </div>

            <div class="row" style="padding: 0px 0px 10px 0px; ">
               
                <div class="text-success">
                    <h3> Your order has been sucesfully processed.</h3><br>
                    Thanks for your patronage
                </div>
                <a href="../index.php"> <span class="btn btn-primary left">Continue</span></a>
            </div>

        </div>

    </div>

    <br>


    <br><br>





</div>

 
    <?php 
                        include '../res/includes/footer.php';
                            }
 else {
     include '../index.php';    
 }
    ?>