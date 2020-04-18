<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../../res/includes/header.php';
    ?>
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="account.php">Accounts</a></li>
                    <li><a href="service.php">Services</a></li>
                    </li>
             
                    <li><a href="configuration.php">Configuration</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right ">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-setting"></i>Settings <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="service.php">Edit Services</a></li>
                            <li><a href="account.php">View Accounts</a></li>
                            <li><a href="customer_login.php">Change My Password</a></li>
                            <li><a href="../logout.php">Logout</a></li>


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

                            <div class="row">

                                <div class="col-xs-12"  >
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>ACCOUNT LIST</strong> <a href="customer_signup.php"></a></h5><hr style="margin: 0px 0px 6px 0px">
                                    <div class="col-xs-12 col-sm-12 " style="padding:0 0 20px 0;">  
<!--                                        <form method="post" action="../../controller/account_controller.php">
                                            <div class="col-sm-12 col-md-8" style="padding: 0px;">
                                                <div class="input-group ">
                                                    <input type="text" name='query' class="form-control " placeholder="Find account by Name, Phone Number or Username">
                                                    <div class="input-group-btn" style="padding: 0px;">
                                                        <button class="btn btn-default" name='find_account' type="submit">
                                                            <i class="glyphicon glyphicon-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form> </div>-->
                                    
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#account">New Account</a>
                                    

                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr> <th>#</th>
                                                <th>Username</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone Number</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $accounts = fetch_account();
                                            if (isset($_SESSION['accounts'])) {
                                                $accounts = $_SESSION['accounts'];
                                            }
                                            $sn = 0;
                                            foreach ($accounts as $account) {

                                                $sn++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn ?></td>
                                                    <td><?php echo $account['username'] ?></td>
                                                    <td><?php echo $account['first_name'] ?></td>
                                                    <td><?php echo $account['last_name'] ?></td>
                                                    <td><?php echo $account['phone_number'] ?></td>
                                                    <td><?php echo $account['role'] ?></td>
                                                    <td><div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">Actions
                                                                <span class="caret"></span></button>
                                                                
                                                            <ul class="dropdown-menu">
                                                                
                                                                <li><a href="#" data-toggle="modal" data-target="#edit<?php echo $account['user_id']; ?>">Edit</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#delete<?php echo $account['user_id']; ?>" >Delete</a></li>

                                                            </ul>
                                                            <form  method="post"  action="../../controller/account_controller.php">
                                                            <?php include 'modal_iterate.php'; ?>
                                                        </form>
                                                        </div>

                                                    </td>

                                                </tr>
                                            <?php }// unset($_SESSION['accounts']) ?>  

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

    <?php
    include 'modals.php';
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}