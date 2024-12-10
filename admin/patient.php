<?php
    include("includes/header.php");
?> 

<?php
     include("connect.php"); 
?> 
 
<div class="main-content-inner">
            <div class="row">
                    <!-- LAYOUT icon start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <div class="container">
                            <div class="add-btn">
                             <button type="button" class="btn btn-warning" ><a href="patientform.php" style="color:white;font-size:1rem">Add Patient</a></button>
                            </div>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sr. No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Disease</th>
                                        <th scope="col">Treatment</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Manage Patient</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql="select * from patient";
                                        $result=mysqli_query($con,$sql);
                                        if($result){
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            $id=$row['id'];
                                            $name=$row['name'];
                                            $date=$row['date'];
                                            $number=$row['number'];
                                            $disease=$row['disease'];
                                            $treatment=$row['treatment'];
                                            $payment=$row['payment'];

                                            echo '<tr>
                                            <th scope="row">'.$id.'</th>
                                            <td>'.$name.'</td>
                                            <td>'.$date.'</td>
                                            <td>'.$number.'</td>
                                            <td>'.$disease.'</td>
                                            <td>'.$treatment.'</td>
                                            <td>'.$payment.'</td>
                                            <td>
                                            <button type="button" class="btn btn-primary"><a href="editpatient.php?updateid='.$id.'" style="color:white; font-size:15px;">EDIT</a></button>
                                            <button type="button" class="btn btn-danger"><a href="deletepatient.php?deleteid='.$id.'" style="color:white;">DELETE</a></button>
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