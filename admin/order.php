<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Food Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylenew.css">


    <style>

	

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #AFD4DC; opacity: 0.9}
tr:nth-child(odd){background-color: #89B2BC; opacity: 0.9}

th {
  background-color: #04AA6D;
  color: white;
  opacity: 0.7;
}



.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}

body {font-family: Arial, Helvetica, sans-serif;
background-color: #cccccc;
background-image: url(gymmm.jpg);
background-repeat: no-repeat;
background-size: cover;


}


.h1{
  text-align: center;
}


</style>


</head>

<body>
    <!-- Navbar Section Starts Here -->

<section class="navbar">
        <div class="container">
            <div class="logo">
                
                <a href="index.php">
                    <img src="../images/bg1.jpg" alt="Dog Food Logo" class="img-responsive">
                </a>
            </div>


            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>


<h1 class="h1">Total Order Status</h1>
    
  <table class="data" id="Food Items">
            
            <tr>
            <th>ID</th>
            <th>Food Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Cost</th>
            <th>Delivered Status</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Order Date</th>
            <th>Customer Phone No.</th>
            <th>Address</th>
            
            

            
            </tr>
        
        <tbody>

<?php

$connect = mysqli_connect('localhost', 'root', '', 'dog food');

$query = " SELECT * FROM `food order`";

$result = mysqli_query($connect,$query);
//$result1 = mysqli_query($connect,$query1);
//print_r($result1);
if(mysqli_num_rows($result)>0){
    //print_r($row);
    foreach($result as $row)
 
    {
      
        ?>
        <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['food']; ?></td>
        <td><?= $row['price']; ?></td>
        <td><?= $row['quantity']; ?></td>
        <td><?= $row['total']; ?></td>
        <td><?= $row['status']; ?></td>
        <td><?= $row['cname']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['date']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td><?= $row['address']; ?></td>
        
       

         
        
        
        </tr>
        
        <?php
                }
            }
            else{
                echo '<script type="text/javascript">alert("No Data Found")</script>';
            }
            ?>



    </tbody>
    </table>

    
</body>
</html>




