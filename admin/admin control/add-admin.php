<?php
session_start();
    $connect = mysqli_connect('localhost','root','','dog food');
    if(isset($_POST['save'])) //for register
    {   
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO `admin`(`user_name`,`password`) VALUES('$user_name','$password')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            echo '<script type="text/javascript">alert("Admin Added Successfully.")</script>';
            
        }
        else{
            echo '<script type="text/javascript">alert("Sorry!Try Again")</script>';
        }
       
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Dog food Control Page</title>
    
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/stylenew.css">
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
    <div class="title" >Add Admin Details</div>
    <br>
    <div class="content">
      <form action="add-admin.php" method="post" class="login-email" >
        <div class="user-details">
        <div class="input-group">
            <span class="details">Admin Name</span>
            <input type="text" name="user_name" placeholder="Enter Admin Name">
          </div>
          <div class="input-group">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter Password" required>
          </div>
          <br>
          
        <div class="input-group">
          <input type="submit" name="save" value="Add Admin" class="btn">
        </div>
        
      </form>
      <div>
          <a href="admin-control.php" class="btn">Back To Previous</a>
        </div>
           
    </div>

    </div>
  

</body>
</html>




