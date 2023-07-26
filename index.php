<?php
//include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>DOWNLOAD SERMONS</a>
                    </div>

                    <!-- Content-->
                    <div class="row">

                        <!-- sermon count -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL SERMONS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $conn = mysqli_connect("localhost","root","","otp");

                                                $query = "SELECT id FROM sermons ORDER BY id";
                                                $query_run = mysqli_query($conn,$query);
                                                
                                                $row= mysqli_num_rows($query_run);
                                                echo "<h1>$row</h1>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--church reports -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                REPORTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $conn = mysqli_connect("localhost","root","","otp");

                                                $query = "SELECT id FROM reports ORDER BY id";
                                                $query_run = mysqli_query($conn,$query);
                                                
                                                $row= mysqli_num_rows($query_run);
                                                echo "<h1>$row</h1>";
                                                ?> 
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- total intimations -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">intimations
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                $conn = mysqli_connect("localhost","root","","otp");

                                                $query = "SELECT id FROM intimations ORDER BY id";
                                                $query_run = mysqli_query($conn,$query);
                                                
                                                $row= mysqli_num_rows($query_run);
                                                echo "<h1>$row</h1>";
                                                ?> 
                                                </div>
                                                </div>
                                                <!--<div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- event total e -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                EVENTS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $conn = mysqli_connect("localhost","root","","otp");

                                                $query = "SELECT id FROM events ORDER BY id";
                                                $query_run = mysqli_query($conn,$query);
                                                
                                                $row= mysqli_num_rows($query_run);
                                                echo "<h1>$row</h1>";
                                                ?>
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <br>

               <!-- event total e -->
               <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                USERS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $conn = mysqli_connect("localhost","root","","otp");

                                                $query = "SELECT id FROM connect ORDER BY id";
                                                $query_run = mysqli_query($conn,$query);
                                                
                                                $row= mysqli_num_rows($query_run);
                                                echo "<h1>$row</h1>";
                                                ?> 
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                     
                         

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

       

    </div>
    <!-- End of Page Wrapper -->
    <?php
    include('includes/footer.php');
    include('includes/scripts.php');
    ?>

   