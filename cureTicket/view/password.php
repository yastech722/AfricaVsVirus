<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            ?>
            <title>Password</title>
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
                            <li ><a href="admin.php">Cake Information</a></li>
                            <li ><a href="view_cake.php">View Cakes</a></li>
                            <li><a href="order_list.php">View Orders</a></li>
                            <li class="active"><a href="password.php">Change Password</a></li>
                            <li><a href="logout.php">Logout</a></li>



                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="panel-group" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        Change Password
                                    </h4>
                                </div>
                                <div  class="panel">
                                    <div class="panel-body">

                                        <div class="col-xs-12">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="../controller/account_controller.php" role="form"> 
                                                <div class="form-group"> 
                                                    <label for="name" class="col-sm-4 control-label">Current Password<span style="color: red">*</span></label>
                                                    <div class="col-sm-8"> <input type="password" name="password" class="form-control" id="name" placeholder="Enter Password" required=""> </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label for="price" class="col-sm-4 control-label">New Password<span style="color: red">*</span></label>
                                                    <div class="col-sm-8"> <input type="password" name="new_password" class="form-control" id="price" placeholder="Enter New Password" required="">
                                                    </div> </div> 
                                                <div class="form-group">
                                                    <label for="qty" class="col-sm-4 control-label">Confirm New Password<span style="color: red">*</span></label>
                                                    <div class="col-sm-8"> <input type="password" name="confirm_password" class="form-control" id="price" placeholder="Enter New Password" required="">
                                                    </div> </div> 


                                                <div class="form-group"> <div class="col-sm-offset-10 col-sm-2"> <input type="submit" value="Save" name="change_password" class="btn btn-primary"></div> </div> </form>
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
    <?php include '../res/includes/footer.php';
        }  else {
            header('location: ../index.php');    
        }

 