<?php
//connection and database creation
$cc=new mysqli("localhost","root","");


if($cc->connect_error)
{
    die("connection failed".$cc->connect_error);

}

$s="CREATE DATABASE S3MCA";
if($cc->query($s)===TRUE)
{
    echo"Database created successfully with the name S3MCA";
    
}
 else 
 {
     echo"error creating database".$cc->error;
     
    
 }

$cc->close();



?>



