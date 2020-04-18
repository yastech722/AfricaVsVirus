<?php

//CONNECTORS
// <editor-fold defaultstate="collapsed" desc="open database connection">
function open_conn($databaseName = "cureticket_country") {
    $host = "localhost";
    $user = "root";
    $password="";
    $conn = new mysqli($host, $user, $password, $databaseName);
    return $conn;
}

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="close database connection">
function close_conn() {
    open_conn()->close();
}

// </editor-fold>
// INSERT INTO DATABASE
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Create an account for patient">
function fetch_country(){
    $query = "SELECT name FROM country_name";
    $country= array();
    $conn = open_conn();
   $result= $conn->query($query);
   echo $conn->error;
   while($row=$result->fetch_assoc()){
     $country[]=$row;  
   }
   return $country;
}
function fetch_language(){
    $query = "SELECT name FROM language";
    $country= array();
    $conn = open_conn();
   $result= $conn->query($query);
   while($row=$result->fetch_assoc()){
     $country[]=$row;  
   }
   return $country;
}
function fetch_speciality(){
    $query = "SELECT type FROM speciality_table";
    $country= array();
    $conn = open_conn();
   $result= $conn->query($query);
   while($row=$result->fetch_assoc()){
     $country[]=$row;  
   }
   return $country;
}
function get_database_name($country) {
  
    $query = "SELECT database_name FROM country_name WHERE name='$country'";
    $conn = open_conn();
   $result= $conn->query($query);
    $row=$result->fetch_assoc();
    return $row['database_name'];
}

// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="get cakes by_label">
function create_account($country,$language,$full_name,$speciality,$dob,$gender,$email,$phone_number,$license_no,$expire_date,$credential) {
   $flag=FALSE;
    $query = "INSERT INTO doctor_table (language,full_name,speciality,dob,gender,email,phone_number,license_no,license_expire_date,credential) VALUES('$language','$full_name','$speciality','$dob','$gender','$email','$phone_number','$license_no','$expire_date','$credential')";
    
    $conn = open_conn(get_database_name($country));
   if ($conn->query($query)){
       $flag=TRUE;
   }
 else {
       echo $conn->error;
   $flag=FALSE;    
   }
    close_conn();
    return $flag;
}

