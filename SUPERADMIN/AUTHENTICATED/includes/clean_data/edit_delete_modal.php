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
          <label>BARANGAY</label>
           <input type="hidden" value="<?php echo $row["ID"]?>" name="ID" class="form-control">
             <input type="text" value="<?php echo $row["BARANGAY"]?>" name="edit_Barangay" class="form-control">
      </div>
      <div class="form-group">
            <label>DATE COMMITTED</label>
            <input type="text" value="<?php echo $row["DATE_COMMITTED"]?>" name="edit_DateCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>TIME COMMITTED</label>
            <input type="text" value="<?php echo $row["TIME_COMMITTED"]?>" name="edit_TimeCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>YEAR</label>
            <input type="text" value="<?php echo $row["YEAR"]?>" name="edit_Year" class="form-control">
      </div>
      <div class="form-group">
            <label>MONTH</label>
            <input type="text" value="<?php echo $row["MONTH"]?>" name="edit_Month" class="form-control">
      </div>
      <div class="form-group">
            <label>DAY</label>
            <input type="text" value="<?php echo $row["DAY"]?>" name="edit_Day" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME CLOCK</label>
            <input type="text" value="<?php echo $row["CRIME_CLOCK"]?>" name="edit_CrimeClock" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME COMMITTED</label>
            <input type="text" value="<?php echo $row["CRIME_COMMITTED"]?>" name="edit_CrimeCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME TYPE</label>
            <input type="text" value="<?php echo $row["CRIME_TYPE"]?>" name="edit_CrimeType" class="form-control">
      </div>
      <div class="form-group">
            <label>SUSPECT STATUS</label>
            <input type="text" value="<?php echo $row["SUSPECTS_Status"]?>" name="edit_SuspectStatus" class="form-control">
      </div>
      <div class="form-group">
            <label>GENDER</label>
            <input type="text" value="<?php echo $row["Gender"]?>" name="edit_Gender" class="form-control">
      </div>
       <div class="form-group">
            <label>SUSPECT AGE</label>
            <input type="text" value="<?php echo $row["SUSPECTS_Age_CLEAN"]?>" name="edit_SuspectAge" class="form-control">
      </div>
      <div class="form-group">
            <label>CASE STATUS</label>
            <input type="text" value="<?php echo $row["CASE_STATUS"]?>" name="edit_CaseStatus" class="form-control">
      </div>
       
      </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
      </form>
            </div>

        </div>
    </div>
</div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
            </div>
            <div class="modal-body">  
              <p class="text-center">Are you sure you want to Delete this from the table?</p>
        <h2 class="text-center"><?php echo $row['ID']; ?></h2>
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                <a href="delete.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>