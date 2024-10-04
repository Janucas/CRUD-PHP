<?php

include("connection.php");
$con = connection();

$id=0;
$name = $_POST['nombreAlumnos'];
$age = $_POST['edad'];


$sql = "INSERT INTO alumnos VALUES('$id','$name','$age')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    
}

?>