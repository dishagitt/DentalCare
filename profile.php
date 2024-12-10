<?php
     include("connect.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DentalCare</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="profilestyle.css">
</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="index.php #home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="index.php #home">home</a>
            <a href="index.php #about">about</a>
            <a href="index.php #services">services</a>
            <a href="index.php #reviews">reviews</a>
            <a href="index.php #contact">contact</a>
            <a href="index.php profile.php">Profile</a>
         </nav>

         <a href="index.php #contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->
<div class="checkform">
 <form action="" method="POST">
    <div class="form-grp">
        <label for="check">Enter Your Mobile Number:</label>
        <input type="number" name="number" id="check" >
    </div>
    <button name="submit">view</button>
 </form>
 <div class="main-content-inner">
            <div class="row">
                    <!-- LAYOUT icon start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <div class="container">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" style=font-size:1.5rem>Name</th>
                                        <th scope="col" style=font-size:1.5rem>Email</th>
                                        <th scope="col" style=font-size:1.5rem>Number</th>
                                        <th scope="col" style=font-size:1.5rem>Date</th>
                                        <th scope="col" style=font-size:1.5rem>Time</th>
                                        <th scope="col" style=font-size:1.5rem>Manage Appointment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(isset($_POST['submit'])){
                                           $number=$_POST['number'];
                                           $sql="select * from contact_form where number='$number'";
                                           $result=mysqli_query($con,$sql);
                                        if($result){
                                    
                                        while($row=$result->fetch_assoc())
                                        {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            $email=$row['email'];
                                            $number=$row['number'];
                                            $date=$row['date'];
                                            $time=$row['time'];

                                            echo '<tr>
                                            <td style=font-size:15px>'.$name.'</td>
                                            <td style=font-size:15px>'.$email.'</td>
                                            <td style=font-size:15px>'.$number.'</td>
                                            <td style=font-size:15px>'.$date.'</td>
                                            <td style=font-size:15px>'.$time.'</td>
                                            <td>
                                            <button type="button" class="btn btn-danger"><a href="profiledelete.php?deleteid='.$id.'" style="color:white; font-size:15px;" >CANCEL Appointmnet</a></button>
                                            </td>
                                            </tr>
                                            <tr>';

                                        }
                                        }
                                        }
                                    ?>

                                    </tbody>
                                    </table>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <!-- LAYOUT icon end -->
            </div>
</div>
        <!-- main content area end -->
 </div>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>8765432987</p>
         <p>7894253613</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>vapi, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>sonu@gmail.com</p>
         <p>monu@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright by <span>Dental Care</span>  </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>