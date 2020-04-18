<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../../res/includes/header.php';
    $labs = fetch_lab_services();
    ?>


    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="lab_request.php">Lab Request <span class="badge"><?php echo get_lab_investigation_count() ?></span></a></li>
                    <li class="active"><a href="find_patient.php">Find Patient</a></li>

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

    </div>
    <div class="container">

        <div class="panel-group" >
            <div class="panel panel-default">

                <div  class="panel">
                    <div class="panel-body">

                        <div class="row" style="padding: 0px 0px 10px 0px; ">

                            <div class="col-xs-12">
                                <h3>FIND PATIENT </h3><hr>
                                <div class="col-xs-12 col-sm-12 col-md-7" style="padding-bottom: 20px;">  
                                    <form method="post" action="../../controller/patient_controller.php">
                                        <div class="col-sm-12 col-md-8" style="padding: 0px;">
                                            <div class="input-group ">
                                                <input type="text" name='query' class="form-control " placeholder="Find patient by EMR ID, Name or Phone Number">
                                                <div class="input-group-btn" style="padding: 0px;">
                                                    <button class="btn btn-default" name='find_patient' type="submit">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form> </div>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr> <th>#</th>
                                            <th>EMR ID</th>

                                            <th>Full NAme</th>
                                            <th>Phone Number</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        <tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_SESSION['patients'])) {
                                            $patients = $_SESSION['patients'];
                                            $sn = 0;
                                            $now = date('Y-m-d h:m:s');
                                            foreach ($patients as $patient) {
                                                $visit = get_last_visit($patient['emr_id']);
                                                $sn++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn ?></td>
                                                    <td><?php echo $patient['emr_id'] ?></td>
                                                    <td><?php echo $patient['full_name'] ?></td>
                                                    <td><?php echo $patient['phone_number'] ?></td>
                                                    <td><?php echo $patient['gender'] ?></td>
                                                    <td><div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                                                <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <?php if ($visit['visit_id'] == "") { ?>
                                                                    <li><a href="../../controller/patient_controller.php?book_appointment=<?php echo $patient['emr_id']; ?>">Book Appointment</a></li> <?php } else { ?>
                                                                    <li><a href="#" data-toggle="modal" data-target="#lab<?php echo $visit['visit_id']; ?>">New Lab Investigation</a></li> <?php } ?>
                                                            </ul>
                                                        </div>
                                                        <?php include 'modals.php'; ?>
                                                    </td>

                                                </tr>
        <?php }
    } unset($_SESSION['patients']) ?>   

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
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}