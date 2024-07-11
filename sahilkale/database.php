<?php
// this php script is for connecting with database
// data has to be fetched from local server
 
// Username is root

$user = 'root';

$password = '';
 
// Database name is signup_register

$database = 'signup_register';
 
// Server is localhost with
// port number 3307

$servername='localhost:3307';

$conn = new mysqli($servername, $user,

                $password, $database);
 
// Checking for connections

if (!$conn){

    echo "Connection Unsuccessful!!!";
}
 
?>