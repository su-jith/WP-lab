<?php

$conn=new mysqli("localhost","root","","S3MCA");

if($conn->connect_error)
{
    die("connecton failed".$conn->connect_error);
    
}

$sql="INSERT INTO Student(id,name)values(1,'john')";

if($conn->query($sql)===TRUE)
{
    echo"new record created successfully";
    
}
 else 
    
 {
     echo"error:".$sql."<br>".$conn->error;
     
 }
 $conn->close();
 ?>

