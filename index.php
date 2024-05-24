<?php
require('connect.php');
if(isset($_POST['submit']))
{
$firstName=$_POST['firstName'];
$lastName = $_POST ['lastName'];
$email = $_POST ['email'];
$password =$_POST['password'];
$retypePassword = $_POST['retypePassword'];
$sql = "INSERT INTO users VALUES('$firstName','$lastName','$email','$password','$retypePassword')";
mysqli_query($con, $sql);
echo
    "<script>alert('Data is inserted successfully');</script>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <h1>Sign Up</h1>
                <p>Fill up the following detail to create an account</p>
                <hr>
                <div>
                    <input type="text" name="firstName" placeholder="First Name"/>
                </div>
                <div>
                    <input type="text" name="lastName" placeholder="Last Name"/>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email Address"/>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password"/>
                </div>
                <div>
                    <input type="password" name="retypePassword" placeholder="Re-type Password"/>
                </div>
                <div>
                <p>
                By creating an Account, you Agree to the <a href ="#">terms and conditions</a> 
                </p>
                </div>
            <div>
                <button class="btnSignup" name="submit" type="submit">Sign Up</button>
            </div>
            <div>
                <div class = "login">
                    <p>
                         Do you Agree to the <a href ="#">terms and conditions</a> 
                    </p>
                </div>
            </div>
        </form>
    </div>    
</body>
</html>
