<?php
        session_start();?>
<html lang="en">
    <head>
        <?php
        if (isset($_SESSION['username'])) {
            $page = 1;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            include '../../model/db_conn.php';
            if (isset($_GET['emr_id']) && isset($_GET['visit_id']) && !isset($_SESSION['VISIT_ID'])) {
                $_SESSION['VISIT_ID'] = $_GET['visit_id'];
                $_SESSION['EMR_ID'] = $_GET['emr_id'];
                $_SESSION['Full_Name'] = $_GET['name'];
                $_SESSION['Age'] = $_GET['age'];
                $_SESSION['Gender'] = $_GET['gender'];
                $_SESSION['visit_date'] = $_GET['visit_date'];
            }
           
            $no_of_page = get_no_of_visitpage($_SESSION['EMR_ID']);
            ?>

            <title>YASMED</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../../res/css/bootstrap.min.css">
            <link href="../res/img/logo.jpg" rel="image" type="icon">
            <?php
            $hospital = get_hospital();
            ?>
        </head>
        <body>
            <div class="container">
                <div class="row no-print" style="padding:40px 0px 20px 0px;">
                    <div class="col-xs-12 col-sm-12 col-md-5" style="padding: 0px;">  
                        <img src="../../res/img/logo.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7" style="padding: 0px; font-family:monospace;color: green; ">  
                        <h2> <?php echo $hospital['hospital_name']; ?> </h2><p>
                        <?php echo $hospital['address']; ?> <?php echo $hospital['phone_number']; ?> </div>

                </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        EMR ID:  <?php echo $_SESSION['EMR_ID']; ?>  Full Name: <?php echo $_SESSION['Full_Name']; ?>  Age: <?php echo $_SESSION['Age']; ?>  Gender: <?php echo $_SESSION['Gender']; ?></li>

                    <li class="list-group-item">
                        Last Vital Signs:
                        <?php
                        $signs = fetch_vital_sign($_SESSION['EMR_ID']);
                        $labs = fetch_lab_services();
                        foreach ($signs as $sign) {
                            ?>
                            <a href="#"><?php echo $sign['type']; ?> <span class="badge"><?php echo $sign['reading']; ?></span></a>

                        <?php } ?>
                    </li>

                </ul>
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-home"></i> </a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#home">Visit Notes</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-setting"></i>Order<span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="#" data-toggle="modal" data-target="#lab">Lab Investigation</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#prescription">Prescription Order</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#admission">Admission</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#procedure">Procedure</a></li>

                                    </ul>
                                </li>

                                <li><a href="find_patient.php">Find Patient</a></li>

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
                <div class="row" >

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Visit Date </th>
                                <th>Notes</th>
                                <th>Seen By</th>

                            <tr>
                        </thead>
                        <tbody>
                            <?php
                            $patients = fetch_visits($_SESSION['EMR_ID'], $page);

                        
                            foreach ($patients as $patient) {
                               
                                ?>
                            
                                <tr>
                                    <td><?php echo $patient['visit_date'] ?></td>
                                    <td>
                                        <div><?php if ($patient['clinical_notes'] != '') { ?><b>Clinical Notes:</b><?php echo $patient['clinical_notes'];
                        }
                                ?></div>
                                        <div><?php $diagnosis = fetch_patient_diagnosis($patient['visit_id']);
                                    if ($diagnosis > 0) {
                                    ?><b>Diagnosis:</b><?php echo $diagnosis['details'];
                                }
                                ?></div>
                                        <?php
                                        
                                        $tests = fetch_patient_investigations($patient['visit_id']);
                                        if (count($tests) > 0) {
                                            ?>
                                            <table><tr><th colspan="2">Lab Investigation</th></tr>
                                                <tr>
                                                    <th>Test</th>
                                                    <th>Result</th>
                                                    <th>Requested by</th>
                                                    <th>Conducted By</th>
                                                </tr>
            <?php
            foreach ($tests as $test) {
                ?>
                                                    <tr>
                                                        <td><?php echo $test['requested_test'] ?></td>
                                                        <td><?php echo $test['result'] ?></td>
                                                        <td><?php echo $test['requested_by'] ?></td>
                                                        <td><?php echo $test['conducted_by'] ?></td>
                                                    </tr>
                                            <?php } ?>
                                            </table>
                                            <?php
                                        }
                                        $prescriptions = fetch_patient_prescriptions($patient['visit_id']);
                                        if (count($prescriptions) > 0) {
                                            ?>
                                            <b>Prescription Note:</b>
                                            <?php
                                            $prescriptions = fetch_patient_prescriptions($patient['visit_id']);
                                            foreach ($prescriptions as $prescription) {
                                                ?>
                                                <?php echo $prescription['dose'] . ' of ' . $prescription['drug_name'] . ' For ' . $prescription['duration'] . ' Days Prescribed by ' . $prescription['prescribed_by'] .';' ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $patient['seen_by'] ?></td>


                                </tr>
    <?php } ?>  

                        </tbody>
                    </table>  
                    <ul class="pager">
                        <?php if ($no_of_page > 1) { ?>
                            <li><a href="patient_profile.php?page=1">First</a></li>
                            <?php
                            $prev = $page - 1;
                            if ($prev > 0) {
                                ?>
                                <li><a href="patient_profile.php?page=<?php echo $prev ?>">Prev</a></li>
                                <?php
                            } $next = $page + 1;
                            if ($next <= $no_of_page) {
                                ?>
                                <li><a href="patient_profile.php?page=<?php echo $next ?>">Next</a></li>
        <?php } ?>
                            <li><a href="patient_profile.php?page=<?php echo $no_of_page ?>">Last</a></li>
    <?php } ?>
                    </ul>
                </div>
            </div>

            <?php
            include '../../ajax/request.php';
            include 'modals.php';
            include '../change_password.php';
            include '../../res/includes/footer.php';
        } else {
            header('Location: ../logout.php');
        }
