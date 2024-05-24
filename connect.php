<?php
$hostname='localhost';
$username='root';
$password = '';
$database = 'ccs06';

$con = mysqli_connect($hostname,$username,$password,$database);
if ($con)
{
echo "Connection is successful";
}
else
{
die(mysqli_error);
}
?>