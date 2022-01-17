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
    <style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  text-align: center;
  
}

.about-section {
  padding: 50px;
  text-align: center;
  
  background-color: #474e5d;
  color: white;
}





.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button:hover {
  background-color: #555;
}

section{
    text-align: center;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

    </style>
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

<section>
    <div class="about-section">
  <h1>About Dog Food</h1>
  <br>
  <p>There are a lot of dog supply companies out there so what makes us different? Having two dogs that love to wrestle, play, run and get dirty they tend to be hard on their leashes and collars.
I couldn't find gear that was durable and that I liked. For that reason I began researching quality materials to produce durable long lasting products.Secondly, we have a deep respect for veterans and the commitment and sacrifice they make to allow us our freedoms. For that reason when you buy a product from Moger you know that it is a quality product made here in the United States and that you will be contributing to a veteran getting a service dog. We look forward to getting to know you!
 </p>
<br>
<br>
<p>                      -Imran Hossain</p>

  </div>

  

<h2 style="text-align:center"><br>CEO & Founder</h2>

  
    <div class="card">
      <img src="images/developer.jpg" alt="Jane" style="width:25%">
      <div class="container">
        <h2>Imran Hossain</h2>
        <p class="title">CEO & Founder</p>
        <p>DOG FOOD</p>
        <p><br>Contact : emran0744@gmail.com</p><br><br><br><br>
        
      </div>
    </div>
 

</section>
    


    <!-- footer Section Starts Here -->
    <section class="footer-section">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="https://www.facebook.com/emran.ahmed.946179">Imran Hossain</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>