<?php
   include('security.php');
    include('includes/header.php');
    include('includes/navbar.php');
    ?>



<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeevent.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <label> Event Name</label>
                <input type="text" name="ename" class="form-control" placeholder="Enter event name">
            </div>
            <div class="form-group">
                <label>EvenT Date</label>
                <input type="date" name="edate" class="form-control " placeholder="Enter event date">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Event time </label>
                <input type="time" name="etime" class="form-control" placeholder="enter time">
            </div>
            <div class="form-group">
                <label>Event Description</label>
                <textarea type="test" name="edescription" class="form-control" placeholder="Enter event Description"></textarea>
            </div>
            <div class="form-group">
                <label>Upload image</label>
                <input type="file" name="event_image"  id = "event_image" class="form-control">
            </div>
          

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="eventbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EVENTS
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add EVENTS
</button>
</h6>
</div>
          
</h6>
</div>
<div class="card-body">
    <?php
    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
    {
        echo "<h2>" .$_SESSION['success']. "</h2>";
        unset( $_SESSION['success']);
    }  
    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
        echo "<h2 class='bg-info'>" .$_SESSION['status']. "</h2>";
        unset( $_SESSION['status']);
    }

    ?>
    <div class="table-responsive">
        <?php
        $conn = mysqli_connect("localhost","root","","otp");
        $query = "SELECT * FROM events";
        $query_run = mysqli_query($conn,$query );
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" collspacing="0">
        <thead>
            <tr>
            <td>ID</td>
                <td>EVENT NAME</td>
                <td>EVENT DATE</td>
                <td>EVENT TIME </td>
                <td>EVENT DESCRIPTION</td>
                <td>EVENT_IMAGE</td>
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
        <td> <?php echo $row['event_name'];?></td>
        <td> <?php echo $row['event_date'];?></td>
        <td> <?php echo $row['event_time'];?></td>
        <td> <?php echo $row['event_description'];?></td>
        <td><?php echo'
    <img src="upload/'. $row['event_image'].'" width="100px" height="100px" alt="Image">'?>
</td>
       

        <form action="eventedit.php" method="POST">
            <input type ="hidden" name ="edit_id" value= " <?php echo $row['id'];?>">
        <td>
            <button type="submit" name= "edit_btn" class="btn btn-success">EDIT</button>
    </td>
    </form>
    <td>
            <button type="submit" class="btn btn-danger">DELETE</button>
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