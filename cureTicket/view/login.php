<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../res/css/bootstrap.min.css">

    </head>
    <body style="background: url('../res/img/slide.jpg'); background-repeat: no-repeat; background-size:100% ">
        <nav class="navbar navbar-default ">
                <div class="container-fluid">

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse " id="navbar-collapse" style="margin-right: 120px" >

                        <ul class="nav navbar-nav navbar-right ">
                            <li><a href="../index.php"><i class="glyphicon glyphicon-home"></i></a></li>
                            <li><a href=""><span class="glyphicon glyphicon-earphone"></span> <span class="">123456789</span>
                                </a></li>
                            <li><a href="login.php">Login
                                </a></li>
                           
                            
                        </ul>
                    </div ><!-- /.navbar-collapse -->
                </div ><!-- /.container-fluid -->
            </nav>
        

        <div class="container" style=" margin-top:40px; padding: 50px;background-color: rgba(12, 12, 12, 0.51); ">
            <div class="row" >
                <div class="col-xs-12 col-sm-4 col-sm-offset-4 " style=" padding: 50px; background-color: rgba(12, 12, 12, 0.51);">
                    <h2 style="color: white">Admin Login</h2>
  <form method="post" action="../controller/account_controller.php">
    <div class="form-group">
      <label for="username">Email:</label>
      <input type="text" class="form-control" name="username" id="email" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div>
   
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form></div>
            </div>
</div>

<?php include '../res/includes/footer.php'; 
