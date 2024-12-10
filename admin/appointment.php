<?php
     include("connect.php");
?> 



<?php
     include("includes/header.php");
?> 
 
<div class="main-content-inner">
            <div class="row">
                    <!-- LAYOUT icon start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <div class="container">
                            <div class="add-btn">
                             <button type="button" class="btn btn-warning" ><a href="appointmentform.php" style="color:white;font-size:1rem">Add Appointment</a></button>
                            </div>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Manage Appointment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql="select * from contact_form";
                                        $result=mysqli_query($con,$sql);
                                        if($result){
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            $email=$row['email'];
                                            $number=$row['number'];
                                            $date=$row['date'];
                                            $time=$row['time'];

                                            echo '<tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$number.'</td>
                                            <td>'.$date.'</td>
                                            <td>'.$time.'</td>
                                            <td>
                                            <button type="button" class="btn btn-primary"><a href="editappointment.php?updateid='.$id.'" style="color:white; font-size:15px;">EDIT</a></button>
                                            <button type="button" class="btn btn-danger"><a href="deleteappointment.php?deleteid='.$id.'" style="color:white;">DELETE</a></button>
                                            </td>
                                            </tr>
                                            <tr>';

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

<!-- footer area start-->
<footer>
        <div class="credit"> &copy; copyright by <span>Dental Care</span>  </div>
    </footer>
        <!-- footer area end-->

<?php
     include("includes/footer.php");
?>