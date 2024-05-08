<?php
error_reporting(0);

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'php_crud_db1';

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
//     echo "Error in database connection." . mysqli_connect_error();
} else {
//     echo "Database connected successfully.";
}

?>