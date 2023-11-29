<?php

$conn=new mysqli("localhost","root","","S3MCA");

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
    
}

$sql="SELECT *FROM Student";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    
    echo"<table border='1'><tr><td>ID</td><td>Name</td></tR\r>";
    while ($row=$result->fetch_assoc())
    {
        echo"<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td></tr><br>";
        
    }
    echo"</table>";
    
}
else
{
    echo"0 results";
    
}
$conn->close();
?>

