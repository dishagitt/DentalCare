<?php
     include("includes/header.php");
?>

<?php

include("connect.php");

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    
    $sql="update contact_form set name='$name',email='$email',number='$number',date='$date',time='$time' where id='$id'";

    
    $result=mysqli_query($con,$sql);

    
    if($result){
       header('location:appointment.php');
    }else{
        die(mysqli_error($con));
    }
}

  
  $sql="select * from contact_form where id=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
          $name=$row['name'];
          $email=$row['email'];
          $number=$row['number'];
          $date=$row['date'];
          $time=$row['time'];
?>

<section class="contact" id="contact">
<form method="POST">
   <span>Your Name :</span><br>
   <input type="text" name="name" id="name" placeholder="enter your name" class="box" value=<?php echo "$name"; ?> required><br>
   <span>Your Email :</span><br>
   <input type="email" name="email" id="email" placeholder="enter your email" class="box" value=<?php echo "$email"; ?> required><br>
   <span>Your Number :</span><br>
   <input type="number" name="number" id="number" placeholder="enter your number" class="box" value=<?php echo "$number"; ?> required><br>
   <span>Appointment Date :</span><br>
   <input type="date" name="date" id="date" class="box" value=<?php echo "$date"; ?> required><br>
   <span>Appointment Time :</span><br>
   <input type="time" name="time" id="time" class="box" value=<?php echo "$time"; ?> required><br><br>
  <button type="submit" id="update" name="submit" class="btn btn-primary">Update</button>
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