<?php

function filter_data($data) {
    $conn=  open_conn();
    trim($data);
    htmlspecialchars($data);
    mysqli_real_escape_string($conn,$data);
    $conn->close();
    return $data;
}
function validateNumber($data){
 if(!ctype_digit($data) || $data=='')  {
      echo '<script> alert("invalid number given");history.back(); </script>';
        exit();
 } else {
     return $data;    
 }
}
function validateName($data){
    if(!preg_match('/^[a-zA-Z ]*$/', $data) || $data==''){
        echo '<script> alert("invalid name given");history.back(); </script>';
        exit();
    }
    else {
     return $data;    
 }
 
}