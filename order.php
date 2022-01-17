
<?php 
      session_start();
     $connect = mysqli_connect('localhost', 'root', '', 'dog food');
        $id = $_GET['edit'];
   // echo $id;

   

$query = " SELECT * FROM `dog food` WHERE `id` = '$id'";

$result = mysqli_query($connect,$query);
//$result1 = mysqli_query($connect,$query1);
//print_r($result);

    $row = mysqli_fetch_assoc($result);
    


    if(isset($_POST['submit'])) //for order
    {   
        $food = $_POST['food_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $total = $price * $quantity;
        $status = $_POST['status'];
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        //echo "OK";
       
        
        $sql = "INSERT INTO `food order`(`food`, `price`, `total`, `status`, `cname`, `email`, `quantity`, `phone`, `address`) VALUES 
        ('$food','$price','$total','$status','$cname','$email','$quantity','$phone','$address')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            //header('location: foods.php');
            echo '<script type="text/javascript">alert("Order Successfull.")</script>';
            header('location: notify.php');
  
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
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Dog Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
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
                        <a href="about.php">About</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->


    <!-- fOOD Order Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center ">Fill this form to confirm your order.</h2>

            <form action="order.php" method="post" class="order">
                 <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                    <img src="admin/food-control/images/<?php echo $row['image'];?>"  class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                    <div class="order-label1">Food Name</div>
                      <input type="text" name="food_name" value="<?php echo $row['food_name'];?>" class="input-responsive1"  required>
                    <div class="order-label1">Food Price</div>
                      <input type="number" name="price" value="<?php echo $row['price'];?>" class="input-responsive1"  required>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="quantity" class="input-responsive" value="1" min="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="cname" placeholder="E.g. Imran Hossain" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="text" name="phone" placeholder="E.g. 018 ...." class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="text" name="email" placeholder="E.g. hi@emran.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    
                    <div class="order-label">status</div>
                   <select name="status" id="Status"  class="input-responsive" required> 
                       <option value="Cash  on delivery">Cash  on delivery</option>
                       <option value="Cash Payment">Cash Payment</option>

                   </select>
                   <!-- <input type="text" name="status"  class="input-responsive" required> -->


                    <div class="button">
                        <input type="submit" name="submit" value="Confirm Order">
                    </div>

                    
                </fieldset>

            </form>

        </div>
    </section>
  

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="https://www.facebook.com/emran.ahmed.946179">Imran Hossain</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>