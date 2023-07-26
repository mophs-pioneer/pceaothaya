<?php
 
 include('security.php');
include('includes/header.php');
?>

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                        <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Login here!</h1>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo "<h2 class='bg-danger text-white'>" . $_SESSION['status'] . "</h2>";
        unset($_SESSION['status']);
    }
    ?>
    
</div>

                                    <form class="user" action="code.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"  name="o_email" placeholder="Enter email adress..">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="o_password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"  name="loginbtn" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                      
                                    </form>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
<?php
include('includes/scripts.php');
?>