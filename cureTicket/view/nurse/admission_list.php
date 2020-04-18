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
                    <li ><a href="new_patient.php">New Patient</a></li>
                    <li><a href="find_patient.php">Find Patient</a></li>
                    <li><a href="inbound.php">Inbound Patient <span class="badge"><?php echo get_inbound_count() ?></span> </a>
                    </li>
                    <li><a href="admission_list.php">Admission <span class="badge"><?php echo get_admossion_count() ?></span> </a>
                    </li>
                    <li><a href="billing.php">Billing <span class="badge"><?php echo get_transaction_count(); ?></span> </a></li>
                    <li><a href="report.php">Billing Report</a></li>
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
        <div class="container">

            <div class="panel-group" >
                <div class="panel panel-default">

                    <div  class="panel">
                        <div class="panel-body">

                            <div class="row" style="padding: 0px 0px 10px 0px; ">

                                <div class="col-xs-12">
                                    <h5 style="margin: 0px 0px 6px 0px"><strong>ADMISSION LIST</strong></h5><hr style="margin: 0px 0px 6px 0px">
<!--                                    <div class="col-xs-12 col-sm-12 col-md-7" style="padding:0 0 20px 0;">    
                                        <form method="post" action="../../controller/patient_controller.php">
                                            <div class="col-sm-12 col-md-8" style="padding: 0px;">
                                                <div class="input-group ">
                                                    <input type="text" name='query' class="form-control " placeholder="Find patient by EMR ID, Name or Phone Number">
                                                    <div class="input-group-btn" style="padding: 0px;">
                                                        <button class="btn btn-default" name='find_admission' type="submit">
                                                            <i class="glyphicon glyphicon-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form> </div>-->

                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr> <th>#</th>
                                                <th>EMR ID</th>
                                                <th>Full Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Facility</th>
                                                <th>Location</th>
                                                <th>Admission Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $patients = fetch_admitted_patient();
                                            if (isset($_SESSION['patients'])) {
                                                $patients = $_SESSION['patients'];
                                            }
                                            $sn = 0;
                                            foreach ($patients as $patient) {

                                                $sn++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sn ?></td>
                                                    <td><?php echo $patient[0] ?></td>
                                                    <td><?php echo $patient[1] ?></td>
                                                    <td><?php echo $patient[2] ?></td>
                                                    <td><?php echo $patient[3] ?></td>
                                                    <td><?php echo $patient[4] ?></td>
                                                    <td><?php echo $patient[5] ?></td>
                                                    <td><?php echo $patient[6] ?></td>
                                                    <td><div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                                                <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#" data-toggle="modal" data-target="#vitalSigns<?php echo $patient['emr_id']; ?>">Check Vital Signs</a></li>
                                                                <li><a href="../../controller/patient_controller.php?discharge=<?php echo $patient[7]; ?>" >Discharge</a></li>
                                                                <li><a href="#" data-toggle="modal" data-target="#change_room<?php echo $patient[7]; ?>">Change Facility</a></li>
                                                            </ul>
                                                        </div>
        <?php include 'modals.php'; ?>
                                                    </td>

                                                </tr>
    <?php } unset($_SESSION['patients']) ?>  

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
    include '../../ajax/request.php';

    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}