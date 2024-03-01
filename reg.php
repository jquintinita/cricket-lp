<?php
$servername = "localhost";
$username = "pbc2024";
$password = "8GrsSGGTmnzNLpRj";
$dbname = "pbc2024";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$fname = $_POST["fullname"];
$phone = $_POST["phone"];
$email = $_POST["email"];


$strSql = "INSERT INTO registerusers (fullName, phone, email) VALUES ('$fname', '$phone', '$email')";

if(mysqli_query($conn, $strSql)){
    echo "Submission is successfully recorded";
}else{
    echo mysqli_error();
}

?>