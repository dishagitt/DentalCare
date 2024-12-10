<?php

$con = new mysqli('localhost','root','','dentalweb') or die('connection failed');

if(isset($_POST['submit'])){

   $name =  $_POST['name'];
   $date = $_POST['date'];
   $number = $_POST['number'];
   $disease = $_POST['disease'];
   $treatment= $_POST['treatment'];
   $payment = $_POST['payment'];

   $insert = mysqli_query($conn, "INSERT INTO patient(name, date, number, disease, treatment, payment) VALUES('$name','$date','$number','$disease','$treatment','$payment')") or die('query failed');

   if($insert){
      header('location:patient.php');
   }else{
       die(mysqli_error($con));
   }
}

?>
<?php
    include("includes/header.php");
?> 


<section class="contact" id="patient">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <span>Patient name :</span><br>
   <input type="text" name="name" id="name" placeholder="enter patient name" class="box" required><br>
   <span>Date :</span><br>
   <input type="date" name="date" id="date" class="box" required><br>
   <span>your number :</span><br>
   <input type="number" name="number" id="number" placeholder="enter your number" class="box" required><br>
   <span>Disease :</span><br>
   <input type="text" name="disease" id="disease" placeholder="enter disease" class="box" required><br>
   <span>Treatment :</span><br>
   <input type="text" name="treatment" id="treatment" placeholder="enter treatment" class="box" required><br>
   <span>Payment :</span><br>
   <input type="text" name="payment" id="payment" placeholder="enter payment" class="box" required><br><br>
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