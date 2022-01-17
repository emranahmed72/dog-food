<?php
session_start();
    $connect = mysqli_connect('localhost','root','','dog food');
    if(isset($_POST['save'])) //for register
    {   
        $food_name = $_POST['food_name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $file_name = $_FILES['image']['name'];
        $file_name = explode('.',$file_name);
        $file_ex = end($file_name);
        $file_name = rand(9999,99999).date('-Y-m-d.').$file_ex;
        
          $sql = "INSERT INTO `dog food`(`food_name`,`description`,`price`,`image`)
          VALUES('$food_name','$description','$price','$file_name')";
 
         $result = mysqli_query($connect,$sql);
        
        
        
       


        
        if($result)
        {

          move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$file_name);
          
            echo '<script type="text/javascript">alert("Data Save")</script>';
            
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

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}


</style>


</head>


<body>
  <div class="container">
    <div class="h1"><h1>Add New Food Item</h1> </div>
    <div class="content">
      <form action="add.php" method="post" autocomplete="off" enctype="multipart/form-data" style="border:1px solid #ccc" >
        <div class="Food-add-details">
        <div class="input-box">
            <span class="details">Food Name        </span>
            <input type="text" name="food_name" placeholder="Enter Food Name" required><br><br>
          </div>
          <div class="input-box">
            <span class="details">description      </span>
            <input type="text" name="description" placeholder="Enter description" required><br><br>
          </div>
          <div class="input-box">
            <span class="details">price           </span>
            <input type="text" name="price" placeholder="Enter price" required><br><br>
          </div>
          <div class="input-box">
           <span class="details">Food Image         </span>
           <input type="file" name="image" > <br><br>
        
          </div>
          
        <div class="button">
          <input type="submit" name="save" value="Add Food">
        </div>
        
      </form>

      <br>

      <div>
          <a href="food-control.php" class="btn"><h3>Back To Previous Page</h3></a>
        </div>
           
    </div>

    </div>
  

 
    <h1 class="h1"> All Admin Details</h1>

<table class="data" id="customers">
          
          <tr>
          <th>ID</th>
          <th>Food Name</th>
          <th>Food Price</th>
          <th>Description</th>
          <th>Image</th>
          </tr>
      
      <tbody>

<?php

$connect = mysqli_connect('localhost', 'root', '', 'dog food');

$query = " SELECT `id`, `food_name`, `description`, `price`, `image` FROM `dog food`";
//$query1 = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' AND `releasedate`>1 AND `dateofdeath` = 0 GROUP BY `patienthistory`";

$result = mysqli_query($connect,$query);
//$result1 = mysqli_query($connect,$query1);
//print_r($result1);
if(mysqli_num_rows($result)>0){
  foreach($result as $row)
  {
      ?>
      <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['food_name']; ?></td>
      <td><?= $row['price']; ?></td>
      <td><?= $row['description']; ?></td>
      <td colspan="3"><img src="images/<?php echo $row['image'];?>" alt="not found" width:20px height:20px ></td>
      
      
      
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