<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">USER COMPLAINT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="form-group">
			        <label>Message</label>
			        <input type="text" value="<?php echo $row["Message"]?>" disabled class="form-control">
			      </div>

			      <div class="form-group">
			        <label>Contact Information</label>
			             </br>
			        <label>Full Name</label>
			             <input type="text" value="<?php echo $row["Fullname"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Alias</label>
			            <input type="text" value="<?php echo $row["Alias"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Location</label>
			            <input type="text" value="<?php echo $row["Location"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Is There Already Authority Nearby?</label>
			            <input type="text" value="<?php echo $row["AuthorityNearby"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Email Address</label>
			            <input type="text" value="<?php echo $row["EmailAddress"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Mobile Number</label>
			            <input type="text" value="<?php echo $row["MobileNumber"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>File</label>
			            <center><img src="../../../../includes/<?php echo $row['Image']?>" style="width:50%;" class="img-responsive"></center>
			      </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			</form>
            </div>

        </div>
    </div>
</div>