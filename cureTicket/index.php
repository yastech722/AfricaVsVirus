<?php session_start();
require_once "model/db_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CureTicket</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
       
        <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="page-content">
            
            <div class="form-v1-content">
                
                <div class="wizard-form">
                    <form class="form-register" enctype="multipart/form-data" action="controller/controller.php" method="post">
                        <div id="form-total">
                            <!-- SECTION 1 -->
                            <h2>
                                <p class="step-icon"><span>01</span></p>
                                <span class="step-text">Country & Language</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading">Country & Language</h3>
                                        <p>Please enter your information and proceed to the next step  </p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-1">
                                            <select class="form-control" id="country" name="country"  required="">
                                                 <option >Country</option>
                                                <?php 
                                                
                                                $countries=  fetch_country();
                        
                                                foreach ($countries as $country){
                                                
                                                ?>
                                               
                                                 <option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
                                                <?php } ?>
                                            </select>	
                                        </div>
                                        <div class="form-holder">


                                            <select  class="form-control" id="lang" name="language"  required="">
                                                <option >Language</option>
                                                 <?php 
                                                
                                                $countries= fetch_language();
                        
                                                foreach ($countries as $country){
                                                
                                                ?>
                                               
                                                 <option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>


                                </div>
                            </section>
                            <!-- SECTION 2 -->
                            <h2>
                                <p class="step-icon"><span>02</span></p>
                                <span class="step-text">Personal & Professional Details</span>
                            </h2>


                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading">Personal & Professional Details</h3>
                                        <p>Please enter your information and proceed to the next step  </p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-1">
                                            <fieldset>
                                                <legend>Full Name</legend>
                                                <input type="text" class="form-control" id="first-name" name="full_name" placeholder="Full Name" required>
                                            </fieldset>
                                        </div>
                                        <div class="form-holder">


                                            <select  class="form-control" id="Speciality" name="speciality"  required="">
                                                <option >Speciality</option>
                                                 <?php 
                                                
                                                $countries= fetch_speciality();
                        
                                                foreach ($countries as $country){
                                                
                                                ?>
                                               
                                                 <option value="<?php echo $country['type'];?>"><?php echo $country['type'];?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder ">
                                            <fieldset>
                                                <legend>Your Email</legend>
                                                <input type="text" name="email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
                                            </fieldset>
                                        </div>

                                        <div class="form-holder ">
                                            <fieldset>
                                                <legend>Phone Number</legend>
                                                <input type="text" class="form-control" id="phone" name="phone_number" placeholder="+1 888-999-7777" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <legend>Birth Date:</legend>
                                            <input type="date" name="dob" required=""/>
                                        </div>

                                        <div class="form-holder ">
                                            <select class="form-control" id="gend" name="gender"  required="">
                                                <option >Select your gender</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>			</div>
                                    </div>
                                </div>
                            </section>
                            <!-- SECTION 3 -->

                            <h2>
                                <p class="step-icon"><span>03</span></p>
                                <span class="step-text">Practice License & Syndicate Membership</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading">Practice License & Syndicate Membership</h3>
                                        <p>Please enter your information and proceed to the next step.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-1">
                                            <fieldset>
                                                <legend>License Number</legend>
                                                <input type="text" class="form-control" id="license" name="license_number" placeholder="License Number" required>
                                            </fieldset>
                                        </div>
                                        
                                            <div class="form-holder">
                                            <legend>Expire Date:</legend>
                                            <input type="date" name="expire_date" required=""/>
                                        
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <fieldset>
                                                <legend>Medical Credentials</legend>
                                               <input type="file"  name="credential" id="fileToUpload" required>                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-holder-2">
                                        <div class="form-holder">
                                            <input type="submit" style="width: 100%;height: 40px; background-color:#4fab40;color:#ffffff; " name="submit"/>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.steps.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>