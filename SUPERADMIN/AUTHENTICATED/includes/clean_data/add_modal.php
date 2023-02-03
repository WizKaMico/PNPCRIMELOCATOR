<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				 <div class="form-group">
        
        <label>BARANGAY</label>
             <input type="text" name="input_Barangay" class="form-control">
      </div>
      <div class="form-group">
            <label>DATE COMMITTED</label>
            <input type="text" name="input_DateCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>TIME COMMITTED</label>
            <input type="text" name="input_TimeCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>YEAR</label>
            <input type="text" name="input_Year" class="form-control">
      </div>
      <div class="form-group">
            <label>MONTH</label>
            <input type="text" name="input_Month" class="form-control">
      </div>
      <div class="form-group">
            <label>DAY</label>
            <input type="text" name="input_Day" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME CLOCK</label>
            <input type="text" name="input_CrimeClock" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME COMMITTED</label>
            <input type="text" name="input_CrimeCommitted" class="form-control">
      </div>
      <div class="form-group">
            <label>CRIME TYPE</label>
            <input type="text" name="input_CrimeType" class="form-control">
      </div>
      <div class="form-group">
            <label>SUSPECT STATUS</label>
            <input type="text" name="input_SuspectStatus" class="form-control">
      </div>
      <div class="form-group">
            <label>GENDER</label>
            <input type="text" name="input_Gender" class="form-control">
      </div>
       <div class="form-group">
            <label>SUSPECT AGE</label>
            <input type="text" name="input_SuspectAge" class="form-control">
      </div>
      <div class="form-group">
            <label>CASE STATUS</label>
            <input type="text" name="input_CaseStatus" class="form-control">
      </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>