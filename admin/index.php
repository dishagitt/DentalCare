<?php
     include("includes/header.php");
?>
     
     <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" style=color:orange>Today's Appointments</h4>
                                <div class="single-table">
                                    
                                    <?php

                                        include("connect.php");
                                        $cd=date("Y-m-d");
                                       
                                        $query = "SELECT count(*) FROM contact_form WHERE date = $cd";

                                        $result = mysqli_query($con, $query);

                                        $numRow = mysqli_num_rows($result);

                                        echo "<h4>".$numRow."</h4>";

                                    ?>
                                    
                                </div>
                            </div>
                        </div>
    </div>   
    
    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title" style=color:orange>Total Appointments</h4>
                                <div class="single-table">
                                        <?php
                                         $sql = "SELECT * from contact_form";

                                        if ($result = mysqli_query($con, $sql)) {

                                            $rowcount = mysqli_num_rows( $result );
                                            
                                            echo "<h4>".$rowcount."</h4>";
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </div>
    </div>   

    <div class="col-lg-6 mt-5">
                        <div class="card">
                            <div class="card-body" >
                                <h4 class="header-title" style=color:orange>No. of Patients</h4>
                                <div class="single-table">
                                <?php
                                         $sql = "SELECT * from patient";

                                        if ($result = mysqli_query($con, $sql)) {

                                            $rowcount = mysqli_num_rows( $result );
                                            
                                            echo "<h4>".$rowcount."</h4>";
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
    </div>   
     
<!-- footer area start-->
    <footer>
        <div class="credit"> &copy; copyright by <span>Dental Care</span>  </div>
    </footer>
        <!-- footer area end-->

<?php
     include("includes/footer.php");
?>