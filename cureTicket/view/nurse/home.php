<?php
session_start();
if (isset($_SESSION['username'])) {
    include '../../res/includes/header.php';
    $admissions = fetch_admitted_patient();
    $now = date('Y-m-d');
    $today = date_create("$now");
    //echo date_format($today,"Y-m-d");

    foreach ($admissions as $admission) {
        $admdte = $admission['admission_date'];
        $emr_id = $admission[0];
        $item_name = $admission['facility'];
        $admission_date = date_create("$admdte");
        $next_day = $admission_date;
        $date_diff = date_diff($admission_date, $today)->format("%R%a") + 0;
        if (!is_transaction_exist($emr_id, $item_name, date_format($admission_date, "Y-m-d"))) {
            $price = get_service_price($item_name);
            document_transaction($emr_id, $item_name.' for '.date_format($admission_date, "Y-m-d"), "Doctor", 1, $price, date_format($admission_date, "Y-m-d"));
        }

        for ($i = 1; $i <= $date_diff; $i++) {
            $next_day = date_add($next_day, date_interval_create_from_date_string("1 days"));

            if (!is_transaction_exist($emr_id, $item_name, date_format($next_day, "Y-m-d"))) {
                $price = get_service_price($item_name);
                document_transaction($emr_id, $item_name.' for '.date_format($next_day, "Y-m-d"), "Doctor", 1, $price, date_format($admission_date, "Y-m-d"));
            }

        }
    }
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



        <div class="row" style="padding: 0px;margin-bottom: 10px;">

            <div class="col-xs-12 col-sm-3">
                <a href="new_patient.php">
                    <span  class=" btn btn-primary  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
                        <h3 class="glyphicon glyphicon-user" style="margin-bottom: 0px; margin-top: 0px"></h3><h3>NEW PATIENT</h3></span>
                </a></div>
            <div class="col-xs-12 col-sm-3">
                <a href="find_patient.php">
                    <span  class="btn btn-success  text-center  col-xs-12 " style="padding:40px 10px 10px 10px; height:150px;">
                        <h3 class="glyphicon glyphicon-search" style="margin-bottom: 0px; margin-top: 0px"></h3>
                        <h3>FIND PATIENT</h3></span>
                </a></div>

            <div class="col-xs-12 col-sm-3">
                <a href="find_patient.php">
                   <span  class="btn btn-info  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
                       <h3 class="glyphicon glyphicon-calendar" style="margin-bottom: 0px; margin-top: 0px"></h3>
                       <h3>NEW APPOINTMENT</h3></span>
                </a></div>

            <div class=" col-xs-12 col-sm-3">
                <a href="admission_list.php">
                    <span  class="btn btn-warning  text-center col-xs-12 " style="padding:40px 10px 10px 10px; height:150px; ">
                        <h3 class="glyphicon glyphicon-object-align-left" style="margin-bottom: 0px; margin-top: 0px"></h3>
                        <h3>ADMISSION LIST</h3></span>
                </a></div>
        </div>
        <div class="row" >
            <div class=" col-xs-12 col-sm-4">
                <a href="find_patient.php">
                    <span  class="btn   text-center text-bold col-xs-12" style="padding:40px 10px 10px 10px; height:150px; background:maroon;color:white">
                        <h3 class="glyphicon glyphicon-scale" style="margin-bottom: 0px; margin-top: 0px"></h3>
                        <h3>CHECK VITAL SIGNS</h3></span></a></div>

            <div class=" col-xs-12 col-sm-3">
                <a href="billing.php">
                    <span  class="btn   text-center text-bold col-xs-12" style="padding:40px 10px 10px 10px; height:150px; background:gray;color:white">
                        <h3 class="glyphicon glyphicon-credit-card" style="margin-bottom: 0px; margin-top: 0px"></h3>
                        <h3>BILLING</h3></span></a></div>


            <div class=" col-xs-12 col-sm-5">
                <a href="../logout.php">
                    <span  class="btn btn-danger   text-center text-bold col-xs-12" style="padding:40px 10px 10px 10px; height:150px;">
                        <h3 class="glyphicon glyphicon-lock" style="margin-bottom: 0px; margin-top: 0px"></h3>
                        <h3>LOGOUT</h3></span></a></div>


        </div>
    </div>
    </div>


    </div>  
    </div>



    </div>
    </div>

    <?php
    include '../change_password.php';
    include '../../res/includes/footer.php';
} else {
    header('Location: ../logout.php');
}