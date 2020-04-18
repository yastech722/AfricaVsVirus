<?php

include 'includes.php';

function upload_credential() {
    $target_dir = "../uploads/";
    $main_file = $target_dir . basename($_FILES['credential']["name"]);
    $flag = TRUE;
    // Check if file already exists
  

// Check if flag is set to false by an error
    if ($flag == FALSE) {
         
    }
    // if everything is ok, try to upload file
    else {
        if (move_uploaded_file($_FILES['credential']["tmp_name"], $main_file)) {
            $GLOBALS['success'][0] = "The passport file " . basename($_FILES['credential']["name"]) . " has been uploaded.";
        } else {
            $GLOBALS['errors'][3] = "There was an error uploading your main file.";
        }
    }
    return $flag;
}

if (isset($_POST['submit'])) {
$country = $_POST['country'];
    $language = $_POST['language'];
    $full_name = $_POST['full_name'];
    $speciality = $_POST['speciality'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

   
    $license_number = $_POST['license_number'];

    $expire_date = $_POST['expire_date'];
    $credential = $_FILES['credential']["name"];

    if (create_account($country,$language,$full_name,$speciality,$dob,$gender,$email,$phone_number,$license_number,$expire_date,$credential)) {
       $_SESSION['sucess']="Thank you for taking your time to register. Your account is pending and will be verified soon";
       upload_credential();
       echo '<script> alert("Thank you for taking your time to register. Your account is pending and will be verified soon"); history.back();</script>';
       
    } else {
        echo '<script> alert("Network error"); history.back();</script>';
    }
}

    
    