<?php
session_start();
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
        
        body {
            
            font-family: Arial, Helvetica, sans-serif;
        background-color: #cccccc;
        background-image: url(gymmm.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        
        
            }
        
            </style>

</head>
<body>

<section class="navbar">
        <div class="container">
            <div class="logo">
                
                <a href="index.php">
                    <img src="../../images/bg1.jpg" alt="Dog Food Logo" class="img-responsive">
                </a>
            </div>


            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>


<div class="top text-center">
    <h1> Dog food Control Page</h1>
    <br><br>
</div>


    <div class="menu text-center">

        
        <div class="wrapper">
            <ul>
            <li> <a href="../index.php">Admin Home</a> </li>
                <li> <a href="update.php">Update Food Item</a> </li>
                <li> <a href="delete.php">Delete Food Item</a> </li>
                <li> <a href="add.php">Add New Food</a> </li>
                <li> <a href="../logout.php">Log Out</a> </li>
                
            </ul>



            
        </div>

    </div>




<?php



?>
    
</body>
</html>