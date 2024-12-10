<?php
     include("includes/header.php");
?>

<?php

$con=new mysqli('localhost','root','','dentalweb');

$id=$_GET['updateid'];
if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $date=$_POST['date'];
    $number=$_POST['number'];
    $disease=$_POST['disease'];
    $treatment=$_POST['treatment'];
    $payment=$_POST['payment'];

    $sql="update patient set name='$name',date='$date',number='$number',disease='$disease',treatment='$treatment',payment='$payment' where id='$id'";

    $result=mysqli_query($con,$sql);

    if($result){
       header('location:patient.php');
    }else{
        die(mysqli_error($con));
    }
}

  
  $sql="select * from patient where id=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
          $name=$row['name'];
          $date=$row['date'];
          $number=$row['number'];
          $disease=$row['disease'];
          $treatment=$row['treatment'];
          $payment=$row['payment'];
?>

<section class="contact" id="contact">
<form method="POST">
   <span>Patient Name :</span><br>
   <input type="text" name="name" id="name" placeholder="enter patient name" class="box" value=<?php echo "$name"; ?> required><br>
   <span>Date :</span><br>
   <input type="date" name="date" id="date" class="box" value=<?php echo "$date"; ?> required><br>
   <span>Mobie Number :</span><br>
   <input type="number" name="number" id="number" placeholder="enter patient's number" class="box"value=<?php echo "$number"; ?>  required><br>
   <span>Disease :</span><br>
   <input type="text" name="disease" id="disease" placeholder="enter disease" class="box" value=<?php echo "$disease"; ?> required><br>
   <span>Treatment :</span><br>
   <input type="text" name="treatment" id="treatment" class="box" value=<?php echo "$treatment"; ?> required><br>
   <span>Payment :</span><br>
   <input type="text" name="payment" id="payment" class="box" value=<?php echo "$payment"; ?> required><br><br>
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