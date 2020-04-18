<?php
$connection = mysqli_connect("localhost", "root", "sadiq722", "yasmed");

//get all tables of the database
$tables= array();
$result= mysqli_query($connection, "SHOW TABLES");
while($row = mysqli_fetch_row($result)){
    $tables[]=$row[0];
}

$return = '';
foreach ($tables as $table) {
    $result= mysqli_query($connection, "SELECT * FROM ".$table);
    $num_fields=mysqli_num_fields($result);
    
    $return .= "DROP TABLE IF EXISTS ".$table.";";
    $row2= mysqli_fetch_row(mysqli_query($connection, "SHOW CREATE TABLE ".$table));
    $return .="\n\n".$row2[1].";\n\n";
     
for($i=0; $i<$num_fields; $i++){
    while($row = mysqli_fetch_row($result)){
        $return .= "INSERT INTO ".$table." VALUES(";
        for($j=0; $j<$num_fields;$j++){
            $row[$j]=  addslashes($row[$j]);
            if(isset($row[$j])){$return .= '"'.$row[$j].'"';} else{ $return .='""';} 
            if($j<$num_fields-1){ $return .= ',';}
         
        }
        $return .= ");\n";
    }
}
$return .= "\n\n\n";
}

//save file
$handle= fopen('backup.sql', 'w+');
fwrite($handle, $return);
fclose($handle);
echo 'Successfully backup, <a href ="backup.sql">download backup</a>';