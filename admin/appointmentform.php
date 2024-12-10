<?php

$con = new mysqli('localhost','root','','dentalweb') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];
   $time = $_POST['time'];

   $insert = mysqli_query($con, "INSERT INTO contact_form(name, email, number, date,time) VALUES('$name','$email','$number','$date','$time')") or die('query failed');

   if($insert){
      header('location:appointment.php');
   }else{
       die(mysqli_error($con));
   }
}

?>
<?php
    include("includes/header.php");
?> 
   

    <section class="contact" id="contact">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <span>your name :</span><br>
   <input type="text" name="name" id="name" placeholder="enter your name" class="box" required><br>
   <span>your email :</span><br>
   <input type="email" name="email" id="email" placeholder="enter your email" class="box" required><br>
   <span>your number :</span><br>
   <input type="number" name="number" id="number" placeholder="enter your number" class="box" required><br>
   <span>appointment date :</span><br>
   <input type="date" name="date" id="date" class="box" required><br>
   <span>appointment time :</span><br>
   <input type="time" name="time" id="time" class="box" required><br><br>
   <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
</form>  

</section>

<!-- footer area start-->
<footer>
        <div class="credit"> &copy; copyright by <span>Dental Care</span>  </div>
    </footer>
        <!-- footer area end-->

<?php
     include("includes/footer.php");
?>