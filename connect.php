<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>
   
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">WEBSITE USERS

</h6>
</div>
          
</h6>
</div>
<div class="card-body">
   
    <div class="table-responsive">
        <?php
        $conn = mysqli_connect("localhost","root","","otp");
        $query = "SELECT * FROM connect";
        $query_run = mysqli_query($conn,$query );
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
        <thead>
            <tr>
            <td>ID</td>
                <td>FULLNAME</td>
                <td>EMAIL</td>
                <td>CONTACT</td>
                <td>MEMBERSHIP</td>
                <td>DISTRICT</td>
                <td>PLACE</td>
            </tr>
</thead>
<tbody>
    <?php
 if(mysqli_num_rows($query_run) > 0)
 {
    while($row = mysqli_fetch_assoc($query_run))
    {
       

?>
    <tr>
        <td> <?php echo $row['id'];?></td>
        <td> <?php echo $row['fullname'];?></td>
        <td> <?php echo $row['email'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['membership'];?></td>
        <td><?php echo $row['district'];?></td>
        <td><?php echo $row['place'];?></td>
           
            </td>
        <tr>
            <?php
              }
            }
            else{
                echo "NO RECORDS FOUND";
            }

?>
</tbody>
        </table>
    </div>
</div>
</div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>