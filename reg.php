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


$uname = $_POST["username"];
$phone = $_POST["phone"];
$email = $_POST["email"];


$userExist = mysqli_query($conn,"SELECT username FROM registerusers Users WHERE username=$uname");

if (mysqli_num_rows($query) != 0){


    echo ("Username already exist!")
}
else{

    $strSql = "INSERT INTO registerusers (username, phone, email) VALUES ('$uname', '$phone', '$email')";

    if(mysqli_query($conn, $strSql)){
        echo "Success";
    }else{
        echo mysqli_error();
    }
}
?>