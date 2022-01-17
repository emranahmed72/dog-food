<?php

$connect = mysqli_connect('localhost', 'root', '', 'dog food');


session_start();
error_reporting(0);

if(isset($_SESSION['user_login']) || isset($_COOKIE['user_login']) ){
	
		header("Location: index.php");

	
}




 
// if(isset($_SESSION['password'])) {
//     header("Location: index.php");
// }
 
 
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $keep = isset($_POST['keep']) ? $_POST['keep'] : NULL;
    $sql1 = "SELECT * FROM `admin` WHERE `user_name`='$user_name' AND `password`='$password' ";
        
    $result1 = mysqli_query($connect,$sql1);
    //print_r($result1);
    $row = mysqli_fetch_array($result1);
    
    if($row['user_name'] == $user_name && $row['password'] == $password)
    {
        $_SESSION['user_login'] = $user_name;
        if(isset($keep))
			{					
				setcookie('user_login', $user_name, time()+60*60);	
               // echo $_COOKIE['user_login'];
               // echo "Hello";
			}
        header('location: index.php');
        echo '<script type="text/javascript">alert("Login")</script>';
        
    }
    else{
        echo '<script type="text/javascript">alert("User Name or password is incorrect.")</script>';
    }
}
 
 
?>
 
 
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7
.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Login Form</title>



<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
 
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
 
body {
    width: 100%;
    min-height: 100vh;
    background-color: #a3c2c2;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
 
.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}
 

 
.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}
 
.container .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}
 
.container .login-email .input-group input:focus,
.container .login-email .input-group input:valid {
    border-color: #a29bfe;
}
 
.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}
 
.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
}
 
.login-register-text {
    color: #111;
    font-weight: 600;
}
 
.login-register-text a {
    text-decoration: none;
    color: #6c5ce7;
}
 
@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    .container .login-social {
        display: block;
    }
    .container .login-social a {
        display: block;
    }
}


</style>


</head>






<body>
    <div class="container">
        <form  action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login With Username or Email</p>
            <div class="input-group">
                <input type="text" placeholder="Email" name="user_name"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <label>
                <input type="checkbox" checked="checked" name="keep" style="margin-bottom:15px"> Remember me
            </label>
            <br>

            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            
            
        </form>
        <div>
          <a href="../index.php" class="btn">Back To Previous Page</a>
        </div>
    </div>
</body>
</html>