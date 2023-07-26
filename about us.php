<?php
   session_start();
  session_abort();
    include('includes/header.php');
    include('includes/navbar.php');
    ?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Title</label>
                <input type="text" name="atitle" class="form-control" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>subtitle</label>
                <input type="text" name="astitle" class="form-control " placeholder="Enter subtitle">
                
            </div>
            <div class="form-group">
                <label>description</label>
                <textarea type="text" name="description" class="form-control" placeholder="Enter Description"></textarea>
            </div>
          


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="aboutbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ABOUT US
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add 
</button>
</h6>
</div>
          
</h6>
</div>
<div class="card-body">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
        echo "<h2 class='bg-primary text-white'>" .$_SESSION['success']. "</h2>";
        unset( $_SESSION['success']);
    }  
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        echo "<h2 class='bg-danger text-white'>" .$_SESSION['status']. "</h2>";
        unset( $_SESSION['status']);
    }

    ?>
    <div class="table-responsive">
        <?php
        $conn = mysqli_connect("localhost","root","","otp");
        $query = "SELECT * FROM about";
        $query_run = mysqli_query($conn,$query );
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
        <thead>
            <tr>
            <td>ID</td>
                <td>TITLE</td>
                <td>SUBTITLE</td>
                <td>DESCRIPTION</td>
                
                <td>Edit</td>
                <td>Delete</td>
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
        <td> <?php echo $row['title'];?></td>
        <td> <?php echo $row['subtitle'];?></td>
        <td> <?php echo $row['description'];?></td>
        <form action="aboutedit.php" method="POST">
            <input type ="hidden" name ="edit_id" value= " <?php echo $row['id'];?>">
        <td>
            <button type="submit" name= "edit_btn" class="btn btn-success">EDIT</button>
    </td>
    </form>
   
    <td>
    <form action="code.php" method="POST">
    <input type ="hidden" name ="delete_id" value= " <?php echo $row['id'];?>">
            <button name="delbtn" type="submit" class="btn btn-danger">DELETE</button>
            </form> 
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