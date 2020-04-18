<?php
        session_start();?>
<html lang="en">
    <head>
        <?php
        if (isset($_SESSION['username'])) {
          

                include '../../model/db_conn.php';

                
                $_SESSION['VISIT_ID'] = $_GET['visit_id'];
                $_SESSION['EMR_ID'] = $_GET['emr_id'];
                $_SESSION['Full_Name'] = $_GET['name'];
                $_SESSION['Age'] = $_GET['age'];
                $_SESSION['Gender'] = $_GET['gender'];
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
                        <div class="col-xs-12 col-sm-12 col-md-7" style="padding: 0px; color: green;font-family: monospace;">  
                            <h3>  <?php echo $hospital['hospital_name']; ?> </h3>
                            <?php echo $hospital['address']; ?> <?php echo $hospital['phone_number']; ?> </div>

                    </div>

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
                        <ul class="list-group">
                            <li class="list-group-item">
                                <b>EMR ID:</b>  <?php echo $_SESSION['EMR_ID']; ?>  <b>Full Name:</b> <?php echo $_SESSION['Full_Name']; ?>  <b>Age:</b> <?php echo $_SESSION['Age']; ?>  <b>Gender:</b> <?php echo $_SESSION['Gender']; ?></li>
                            <li class="list-group-item">
                                Last Vital Signs:
                                <?php
                                $labs = fetch_lab_services();
                                $signs = fetch_vital_sign($_GET['emr_id']);
                                foreach ($signs as $sign) {
                                    ?>
                                    <a href="#"><?php echo $sign['type']; ?> <span class="badge"><?php echo $sign['reading']; ?></span></a>

                                <?php } ?>
                            </li>

                        </ul>
                        <form  method="post" name="visit_form"  action="../../controller/patient_controller.php" onsubmit="return validateForm()">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                Clinical Notes</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <h3>Presenting Complain, History and Examination</h3>
                                                <p>
                                                    <textarea rows="10" cols="5" id='notes' name="clinical_notes" class="col-sm-12" placeholder="Presenting Complain, History and Examination....." ></textarea>
                                                </p> </div>
                                            <div class="form-group">

                                            </div></div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                Diagnosis</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <h3>Diagnosis</h3>
                                                <p>
                                                    <textarea rows="10" cols="5"  name="details" class="col-sm-12" placeholder="Diagnosis....."></textarea>
                                                </p>											
                                            </div></div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                Lab Investigation</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body"><h3>Investigation Required</h3>
                                            <?php
                                            foreach ($labs as $lab) {
                                                ?>
                                                <div class="col-sm-2">
                                                    <label class="checkbox inline"><input type="checkbox" name="test[]" value="<?php echo $lab['name'] ?>"><?php echo $lab['name'] ?></label>

                                                </div>

                                            <?php } ?></div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                Treatment Plan</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-xs-3">
                                                <div class="form-group">
                                                    <label for="bld">Prescription Count</label>
                                                    <select  name="count" class="form-control" id="bld" onchange="get_prescription_form(this.value)" >
                                                        <option value="">Select an option</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                    </select>
                                                </div> </div>
                                            <div class="row" id="p_form"></div></div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="save_visit" value="Sign & Close"  class="btn btn-success btn-block">
                        </form>
                        <script>
                            function validateForm() {
                                var note = document.forms["visit_form"]["clinical_notes"].value;
                                var diagnosis = document.forms["visit_form"]["details"].value;
                                if (note == "") {
                                    alert("Notes must be filled out");
                                    return false;
                                } else if (diagnosis == "") {
                                    alert(" Diagnosis must be filled out");
                                    return false;
                                } else {
                                    return true;
                                }

                            }
                        </script>  
                    </div>
                    <?php
                    include '../change_password.php';
                    include '../../ajax/request.php';
                    include '../../res/includes/footer.php';
                
            } else {
                header('Location: ../logout.php');
            }
	