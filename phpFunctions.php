<?php

require('connect.php');

function display_data() {
    global $con;
$query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$result =mysqli_query($con, $query);
    return $result;
}

function insert_data($firstName,$lastName,$email,$password,$retypePassword) {
    global $con;    
    $query = "INSERT INTO users VALUES('$firstName','$lastName','$email','$password','$retypePassword', '')";
    mysqli_query($con, $query);
}
?>