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
                    <li><a href="appointment_list.php">Appointment List <span class="badge"><?php echo get_appointment_count(); ?></span> </a>
                    </li>
                    <li><a href="find_patient.php">Find Patient</a></li>
                    <li><a href="procedures.php">Procedures <span class="badge"><?php echo fetch_procedure_count(); ?></span></a></li>
                    <li><a href="anesthesia.php">Anaesthesia <span class="badge"><?php echo fetch_open_procedures_count(); ?></span></a></li>
                    
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

        <table class="table table-condensed">
            <thead>
                <tr> <th>#</th>
                    <th>EMR ID</th>
                    <th>Procedure Name</th>
                    <th>Action</th>
                <tr>
            </thead>
            <tbody>
                <?php
                $patients = fetch_procedures();

                $sn = 0;
                foreach ($patients as $patient) {

                    $sn++;
                    ?>
                    <tr>
                        <td><?php echo $sn ?></td>
                        <td><?php echo $patient[0] ?></td>
                        <td><?php echo $patient[1] ?></td>

                        <td><a href="" data-toggle="modal" data-target="#concludeProcedure<?php echo $patient['procedure_id'] ?>" class="btn btn-primary btn-small">CONCLUDE</a></td> 
                            <?php 
                include 'modals.php';   ?>

                    </tr>
                <?php } ?>  

            </tbody>
        </table> 
    </div>



    </div>
    </div>

    <?php
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}