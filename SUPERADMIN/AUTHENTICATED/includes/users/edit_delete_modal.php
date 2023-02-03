<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['UserID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">USER</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="form-group">
			        <label>ID</label>
			        <input type="text" value="<?php echo $row["UserID"]?>" disabled class="form-control">
			      </div>

			      <div class="form-group">
			      
			        <label>Username</label>
			             <input type="text" value="<?php echo $row["Username"]?>" disabled class="form-control">
			      </div>
			      
			      <div class="form-group">
			            <label>Email</label>
			            <input type="text" value="<?php echo $row["Email"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Role</label>
			            <input type="text" value="<?php echo $row["Role"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label> Name</label>
			            <input type="text" value="<?php echo $row["Name"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Office/Station</label>
			            <input type="text" value="<?php echo $row["OfficeStation"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Status</label>
			            <input type="text" value="<?php echo $row["Status"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Mobile Number</label>
			            <input type="text" value="<?php echo $row["Cellphone"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Location</label>
			            <input type="text" value="<?php echo $row["Location"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Rank</label>
			            <input type="text" value="<?php echo $row["Rank"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Chief Of Police</label>
			            <input type="text" value="<?php echo $row["ChiefOfPolice"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>WCPC</label>
			            <input type="text" value="<?php echo $row["WCPC"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Telephone Number</label>
			            <input type="text" value="<?php echo $row["Telephone"]?>" disabled class="form-control">
			      </div>
			      <div class="form-group">
			            <label>Address</label>
			            <input type="text" value="<?php echo $row["Address"]?>" disabled class="form-control">
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