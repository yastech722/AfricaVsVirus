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
                    <li class=""><a href="home.php">Lab Request <span class="badge"><?php echo get_lab_investigation_count() ?></span></a></li>
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
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="row" style="padding-top:20px">

                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Request Date</th>
                            <th>EMR ID </th>
                            <th>Full Name </th>
                            <th>Test</th>
                            <th>Gender</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sn = 0;
                        $tests = "";
                        $patients = fetch_lab_investigation_query();
                        foreach ($patients as $patient) {

                            $sn++;
                            ?>
                            <tr>
                              
                                <td><?php echo $patient[1] ?></td>
                                <td><?php echo $patient[2] ?></td>
                                <td><?php echo $patient[3] ?></td>
                                <td>
                                    
                                    <?php
                                    $tests = fetch_lab_investigation_test($patient[0]);
                                    foreach ($tests as $test) {
                                        echo $test[0] . ', ';
                                    } 
                                    ?>
                                </td>
                                <td><?php echo $patient[4] ?></td>
                                 <?php if (is_bill_cleared($patient[2]) < 1) { ?>
                                    <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#fill_result<?php echo $patient[0]; ?>">Fill Result</a>
                                        <?php include 'modals.php'; ?>
                                    </td>
                                 <?php } else {?> <td><a href="" data-toggle="modal" data-target="#showWarning<?php echo $patient[2]; ?>" class="btn btn-primary btn-small">Fill Result</a></td>
                                                              <div id="showWarning<?php echo $patient[2]; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">FILL LAB RESULT</h4>
                </div>
                <form  method="post"  action="../../controller/patient_controller.php?location=Doctor">
                    <div class="modal-body">

                         CANNOT TAKE A LAB INVESTIGATION FOR THIS PATIENT, HE/SHE HAS AN OUTSTANDING BALANCE OF NGN<?php echo is_bill_cleared($patient[2]) ?> TO CLEAR
                    </div>



                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>

        </div>
    </div>
 <?php }
                                                                        ?>
          


                                </tr>
                            <?php } ?>  

                        </tbody>
                    </table>  

                </div>
            </div>
            <div id="menu1" class="tab-pane fade">

                <div class="row" style="padding-top:20px">
                    <!-- Trigger the modal with a button -->



                    <form method="post" action="../controller/cake_controller.php">
                        <div class="col-sm-12 col-md-8" style="padding-bottom: 10px;">
                            <div class="input-group ">
                                <input type="text" name='query' class="form-control " placeholder="Find patient by EMR ID, Name or Phone Number">
                                <div class="input-group-btn" style="padding: 0px;">
                                    <button class="btn btn-default" name='search' type="submit">
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
                        $sn = 0;
                        // foreach ($cakes as $cake) {

                        $sn++;
                        ?>
                        <tr>
                            <td>1</td>
                            <td>00000000001</td>
                            <td>yusuf abubakar sadiq</td>
                            <td>07063490700</td>
                            <td>male</td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New Investigation</button></td>

                        </tr>
                        <?php // }  ?>  

                    </tbody>
                </table>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Investigation Required</h4>
                            </div>
                            <form  method="post"  action="../controller/account_controller.php">
                                <div class="modal-body">
                                    <div class="row" style="padding-left:20px">
                                        <div class="col-sm-2">

                                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="Bleeding Time">Bleeding Time</label>
                                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="Blood Group">Blood Group</label>
                                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Clotting Time">Clotting Time</label>
                                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="ECS">ECS </label>
                                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="ESR">ESR</label>
                                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="FBC">FBC</label>
                                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Gynotype">Gynotype</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="HBSAg">HBSAg</label>
                                        </label> <label class="checkbox inline"> <input type="checkbox" name="test[]" value="HVS">HVS</label>
                                </label> <label class="checkbox inline"> <input type="checkbox" name="test[]" value="HVS">HIV</label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="MP">MP</label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="PCV">PCV </label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="PCV">Pregnancy Test </label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="RNS">RNS</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="SFA">SFA</label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="Stool Microscopy">Stool Microscopy</label>
                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Stool MCS">Stool MCS</label>          
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="Sickling Test">Sickling Test</label>
                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Urinalysis">Urinalysis</label> 
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="Urine Microscopy">Urine Microscopy</label>
                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Urin MCS">Urin MCS</label>
                        </div>
                        <div class="col-sm-2">
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="VDRL">VDRL</label>
                            <label class="checkbox inline"><input type="checkbox" name="test[]" value="WBC">WBC </label>
                            <label class="checkbox inline"> <input type="checkbox" name="test[]" value="Widal">Widal </label>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

        </div>
        </div>


        </div>


        <div id="menu2" class="tab-pane fade">
            <h3>Treatment Plan</h3>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="name">Drug Name</label>
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="FULL NAME" required>
                </div>
            </div>
            <div class="col-xs-1">

                <div class="form-group">
                    <label for="frq">Frequency</label>
                    <input type="text" name="frequency" class="form-control" id="emr" value="00000000001" >
                </div>
            </div>

            <div class="col-xs-3">
                <div class="form-group">
                    <label for="name">Frequency Type</label>
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="FULL NAME" required>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label for="name">Dose</label>
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="FULL NAME" required>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="form-group">
                    <label for="name">Duration</label>
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="FULL NAME" required>
                </div>
            </div>

        </div>
        <div id="menu4" class="tab-pane fade">
            <p>
                <button type="submit" name="user_login"  class="btn btn-success btn-block">Sign & Close</button>
        </div>

        </form>




        </div>
        </div>
        <?php
        include '../change_password.php';
        include '../../res/includes/footer.php';
    } else {
        header('Location: ../logout.php');
    }    