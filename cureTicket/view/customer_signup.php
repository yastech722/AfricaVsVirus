<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        session_start();
        ?>
        <title>Customer Sign Up</title>
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
                                    <li><a href="customer_login.php">Login</a></li>
                                    <li><a href="customer_signup.php">Register</a></li>
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
                    <a href="#"> <img src="../res/img/logo.jpg">
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
                                <a href="order.php"> <span  class="btn btn-default col-xs-12">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $_SESSION['order_count']; ?> item(s) 
                                    </span> </a>
                                <?php
                            } else {
                                ?>  <a href="order.php"><span  class="btn btn-default col-xs-12">
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
                    <ul class="breadcrumb">
                        <li>
                            <i class="glyphicon glyphicon-home"></i> <span class="divider">/</span>Search

                        </li>
                    </ul>
                </div>

            </div>

            <div class="panel-group" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            Checkout
                        </h4>
                    </div>
                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">
                                <div class="col-xs-12">
                                    <h3>New Customer <a href="customer_login.php"><small class="">Already have an account? login.</small></a></h3>
                                 
                                    <form  method="post" enctype="multipart/form-data" action="../controller/account_controller.php" > 
                                        <div class="row">
                                        <div class="form-group col-xs-4"> 
                                            <label for="name" >Full Name<span style="color: red">*</span></label>
                                             <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required=""> 
                                        </div>
                                       
                                        <div class="form-group col-xs-4"> 
                                            <label for="phone" >Phone Number<span style="color: red">*</span></label>
                                             <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required=""> 
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="email" >Email address<span style="color: red">*</span></label>
                                             <input type="email" name="email" class="form-control" id="email" placeholder="EMail" required="">
                                             </div> 
                                             </div>
                                        <div class="row">
                                        <div class="form-group col-xs-12 ">
                                            <label for="address" >Address<span style="color: red">*</span></label>
                                             <input type="text" name="address" class="form-control" id="address" placeholder="Address" required="">
                                             </div> 
                                        </div>
                                        <div class="row">
                                         <div class="form-group col-xs-4">
                                            <label for="lga" >LGA<span style="color: red">*</span></label>
                                             <input type="text" name="lga" class="form-control" id="lga" placeholder="LGA" required="">
                                             </div> 
                                         <div class="form-group col-xs-4">
                                            <label for="state" >State<span style="color: red">*</span></label>
                                             <input type="text" name="state" class="form-control" id="state" placeholder="State" required="">
                                             </div> 
                                        </div>
                                        <div class="row">
                                         <div class="form-group col-xs-4">
                                            <label for="password" >Password<span style="color: red">*</span></label>
                                             <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
                                             </div>
                                         <div class="form-group col-xs-4">
                                            <label for="cpassword" >Confirm Password<span style="color: red">*</span></label>
                                             <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" required="">
                                             </div> 
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-xs-4"> <input type="submit" value="Sign Up" name="user_signup" class="btn btn-primary"> </div> </form>
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

                          <?php include '../res/includes/footer.php'; ?>