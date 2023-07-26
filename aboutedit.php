<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Edit Admin profile

</h6>
</div>
<div class="card-body">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "otp");

    if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];

    $query = "SELECT * FROM about where id='$id'";
    $query_run = mysqli_query($conn , $query);

    foreach ($query_run as $row)
    {
      ?>
       
<div class="modal-body">
<form action="code.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id']?>" >
    <div class="form-group">
        <label> TITLE </label>
        <input type="text" name="edit_title"  value="<?php echo $row['title']?>" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>SUB TITLE</label>
        <input type="text" name="edit_sub" value="<?php echo $row['subtitle']?>" class="form-control checking_email" placeholder="Enter Email">
        <small class="error_email" style="color: red;"></small>
    </div>
    <div class="form-group">
        <label>DESCRIPTION</label>
        <input type="text" name="edit_desc" value="<?php echo $row['description']?>" class="form-control" placeholder="Enter Password">
    </div>
    <a href="about us.php" class="btn btn-danger">cancel</a>
    <button type="submit" name="ebtn" class="btn btn-primary">update</button>
    </form>
    
    <?php
    
}
}
?>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>