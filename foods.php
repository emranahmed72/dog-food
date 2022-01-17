<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Food Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylenew.css">
</head>


<body>
   <!-- Navbar Section Starts Here -->
   <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                <a href="index.php">
                    <img src="images/bg1.jpg" alt="Dog Food Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                   <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="foods.php">Dog foods</a>
                    </li>

                    <li>
                        <a href="admin/login.php">Admin Page</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
    


    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Dog Food Menu</h2>

<?php 
            $connect = mysqli_connect('localhost', 'root', '', 'dog food');

$query = " SELECT * FROM `dog food`";

$result = mysqli_query($connect,$query);
//$result1 = mysqli_query($connect,$query1);
//print_r($result1);
if(mysqli_num_rows($result)>0){
    //print_r($row);
    foreach($result as $row)
 
    {
      
        ?>
        
       


        <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="admin/food-control/images/<?php echo $row['image'];?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4><?= $row['food_name']; ?></h4>
                    <p class="food-price"><?= $row['price']; ?></p>
                    <p class="food-detail">
                    <?= $row['description']; ?>
                    </p>
                    <br>
                    
                     <a href="order.php?edit=<?= $row['id'] ;?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        
        <?php
                }
            }
            else{
                echo '<script type="text/javascript">alert("No Data Found")</script>';
            }
            ?>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="https://www.facebook.com/emran.ahmed.946179">Imran Hossain</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>