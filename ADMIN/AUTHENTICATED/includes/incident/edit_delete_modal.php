<!-- Edit -->

 

<div class="modal fade" id="edit_<?php echo $row['GUI']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">RECORD</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">



			<form method="POST" action="edit.php">
			<div class="tabs">
					<nav class="tabs__nav" role="tablist">
						<button class="tabs__btn is-active" data-tab-target="tab-1<?php echo $row['GUI']; ?>" type="button" role="tab" aria-selected="true">Complaint</button>
						<button class="tabs__btn" data-tab-target="tab-2<?php echo $row['GUI']; ?>" type="button" role="tab" aria-selected="false">Victim</button>
						<button class="tabs__btn" data-tab-target="tab-3<?php echo $row['GUI']; ?>" type="button" role="tab" aria-selected="false">Suspect</button>
						<button class="tabs__btn" data-tab-target="tab-4<?php echo $row['GUI']; ?>" type="button" role="tab" aria-selected="false">Case Detail</button>
					</nav>

		
					<div class="tabs__content">
						<div class="tabs__pane is-visible" id="tab-1<?php echo $row['GUI']; ?>" role="tabpanel">
							<h3>REPORTING PERSON</h3>

							  <div class="col-md-3">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox"   name="complaint_firstname" class="form-control" value="<?php echo $row['Firstname']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" value="<?php echo $row['Middlename']?>" disabled name="complaint_middlename" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="complaint_lastname"  value="<?php echo $row['Lastname']?>" disabled class="form-control"/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="complaint_qualifier" class="form-control"  value="<?php echo $row['Qualifier']?>" disabled/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="complaint_alias" class="form-control"  value="<?php echo $row['Alias']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="complaint_citizenship" class="form-control"  value="<?php echo $row['Citizenship']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="complaint_civilstatus" class="form-control" value="<?php echo $row['CivilStatus']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="complaint_province" class="form-control" value="<?php echo $row['Province']?>" disabled/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="complaint_city" class="form-control" value="<?php echo $row['City']?>" disabled/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="complaint_street" class="form-control" value="<?php echo $row['Street']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="complaint_barangay" class="form-control" value="<?php echo $row['Barangay']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="complaint_latitude" class="form-control" value="<?php echo $row['Latitude']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="complaint_longitude" class="form-control" value="<?php echo $row['Longtitude']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Phone Number</label>
          <input type="textbox" name="complaint_phonenumber" class="form-control" value="<?php echo $row['PhoneNumber']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Mode Of Report</label>
          <input type="textbox" name="complaint_modeofreport" class="form-control" value="<?php echo $row['ModeOfReport']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="complaint_emailaddress" class="form-control" value="<?php echo $row['EmailAddress']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="complaint_birthdate" class="form-control" value="<?php echo $row['Birthdate']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="complaint_birthplace" class="form-control" value="<?php echo $row['Birthplace']?>" disabled/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <input type="text" name="complaint_gender" class="form-control" value="<?php echo $row['Gender']?>" disabled>
            
          <label>Age</label>
          <input type="number" name="complaint_age" class="form-control" value="<?php echo $row['Age']?>" disabled>
      </div>

      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12"><h3>Other Information</h3></br></div>
      <div class="col-md-3">
      <div class="form-group">
        
          <label>Educational Attainment</label>
          <input type="textbox" name="complaint_educationalattainment" class="form-control" value="<?php echo $row['EducationalAttainment']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Occupation</label>
          <input type="textbox" name="complaint_Occupation" class="form-control" value="<?php echo $row['Occupation']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Relation to Victim</label>
          <input type="textbox" name="complaint_relationtovictim" class="form-control" value="<?php echo $row['RelationToVictim']?>" disabled/>
        </div>
      </div>
							
						</div>
						<div class="tabs__pane" id="tab-2<?php echo $row['GUI']; ?>" role="tabpanel">
							<h3>VICTIM</h3>

	<div class="col-md-3">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox" name="victim_firstname" class="form-control" value="<?php echo $row['Firstname']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" name="victim_middlename" class="form-control" value="<?php echo $row['Middlename']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="victim_lastname" class="form-control" value="<?php echo $row['Lastname']?>" disabled/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="victim_qualifier" class="form-control" value="<?php echo $row['Qualifier']?>" disabled/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="victim_alias"  class="form-control" value="<?php echo $row['Alias']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="victim_citizenship" class="form-control" value="<?php echo $row['Citizenship']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="victim_civilstatus" class="form-control" value="<?php echo $row['CivilStatus']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="victim_province" class="form-control" value="<?php echo $row['Province']?>" disabled/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="victim_city" class="form-control" value="<?php echo $row['City']?>" disabled/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="victim_street" class="form-control" value="<?php echo $row['Street']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="victim_barangay" class="form-control" value="<?php echo $row['Barangay']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="victim_latitude" class="form-control" value="<?php echo $row['Latitude']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="victim_longitude" class="form-control" value="<?php echo $row['Longitude']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Phone Number</label>
          <input type="textbox" name="victim_phonenumber" class="form-control" value="<?php echo $row['PhoneNumber']?>" disabled/>
      </div>
      
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="victim_emailaddress" class="form-control" value="<?php echo $row['EmailAddress']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="victim_birthdate" class="form-control" value="<?php echo $row['Birthdate']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="victim_birthplace" class="form-control" value="<?php echo $row['Birthplace']?>" disabled/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <input type="text" name="victim_gender" class="form-control" value="<?php echo $row['Gender']?>" disabled/>
            
          <label>Age</label>
          <input type="number" name="victim_age" class="form-control" value="<?php echo $row['Age']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Relation to Suspect</label>
          <input type="textbox" name="victim_relationtosuspect" class="form-control" value="<?php echo $row['RelationToSuspect']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12" style="height:30px; "></div>

      <div class="col-md-2">
      <div class="form-group">
          <label>Date Last Seen</label>
          <input type="textbox" name="victim_datelastseen" class="form-control" value="<?php echo $row['DateLastSeen']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Status</label>
          <input type="textbox" name="victim_status" class="form-control" value="<?php echo $row['Status']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div class="form-group">
          <label>Time Last Seen</label>
          <input type="textbox" name="victim_timelastseen" class="form-control" value="<?php echo $row['TimeLastSeen']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Occupation</label>
          <input type="textbox" name="victim_occupation" class="form-control" value="<?php echo $row['Occupation']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div class="form-group">
          <label>Place of Custody</label>
          <input type="textbox" name="victim_placeofcustody" class="form-control" value="<?php echo $row['PlaceOfCustody']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="victim_civilstatus" class="form-control"  value="<?php echo $row['CivilStatus']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
      <div class="form-group">
          <label>Place Last Seen</label>
          <input type="textbox" name="victim_placelastseen" class="form-control" value="<?php echo $row['PlaceLastSeen']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Education</label>
          <input type="text" name="victim_education" class="form-control" value="<?php echo $row['Education']?>" disabled/>
            
      </div>						
							
						</div>
	</div>					
						<div class="tabs__pane" id="tab-3<?php echo $row['GUI']; ?>" role="tabpanel">
							<h3>Suspect</h3>


							 <div class="col-md-3">
      <div class="form-group">
          <label>Status</label>
          <input type ="text" name="suspect_status" class="form-control" value="<?php echo $row['Status']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Degree of Participation</label>
          <input type="text" name="suspect_degreeofparticipation" class="form-control" value="<?php echo $row['DegreeOfParticipation']?>" disabled/>
            
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Category of Crime</label>
          <input type="text" name="suspect_categoryofcrime" class="form-control" value="<?php echo $row['CategoryOfCrime']?>" disabled/>
            
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12" style="height:30px; "></div>
      <div class="col-md-3">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox" name="suspect_firstname" class="form-control" value="<?php echo $row['Firstname']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" name="suspect_middlename" class="form-control" value="<?php echo $row['Middlename']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="suspect_lastname" class="form-control" value="<?php echo $row['Lastname']?>" disabled/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="suspect_qualifier" class="form-control" value="<?php echo $row['Qualifier']?>" disabled/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="suspect_alias" class="form-control" value="<?php echo $row['Alias']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="suspect_citizenship" class="form-control" value="<?php echo $row['Citizenship']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="suspect_civilstatus" class="form-control" value="<?php echo $row['CivilStatus']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="suspect_province" class="form-control" value="<?php echo $row['Province']?>" disabled/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="suspect_city" class="form-control" value="<?php echo $row['City']?>" disabled/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="suspect_street" class="form-control" value="<?php echo $row['Street']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="suspect_barangay" class="form-control" value="<?php echo $row['Barangay']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="suspect_latitude" class="form-control" value="<?php echo $row['Latitude']?>" disabled/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="suspect_longitude" class="form-control" value="<?php echo $row['Longitude']?>" disabled/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Home Phone Number</label>
          <input type="textbox" name="suspect_phonenumber" class="form-control" value="<?php echo $row['HomePhoneNumber']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Mobile Number</label>
          <input type="textbox" name="suspect_mobilenumber" class="form-control" value="<?php echo $row['MobileNumber']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="suspect_emailaddress" class="form-control" value="<?php echo $row['EmailAddress']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="suspect_birthdate" class="form-control" value="<?php echo $row['Birthdate']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="suspect_birthplace" class="form-control" value="<?php echo $row['Birthplace']?>" disabled/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <input type="text" name="suspect_gender" class="form-control" value="<?php echo $row['Gender']?>" disabled/>
            
          <label>Age</label>
          <input type="number" name="suspect_age" class="form-control" value="<?php echo $row['Age']?>" disabled>
      </div>

      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12"><h3>Other Information</h3></br></div>
      
      <div class="col-md-3">
      <div class="form-group">
          <label>Educational Attainment</label>
          <input type="text" name="suspect_education" class="form-control" value="<?php echo $row['EducationalAttainment']?>" disabled/>
            
      </div>
      <div class="form-group">
          <label>School Address</label>
          <input type="textbox" name="suspect_schooladdress" class="form-control" value="<?php echo $row['SchoolAddress']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="suspect_civistatus" class="form-control" value="<?php echo $row['CivilStatus']?>" disabled/>
          <label>Occupation</label>
          <input type="textbox" name="suspect_occupation" class="form-control" value="<?php echo $row['Occupation']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Relation to Victim</label>
          <input type="textbox" name="suspect_relationtovictim" class="form-control" value="<?php echo $row['RelationToVictim']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Suspect Motive</label>
          <input type="textbox" name="suspect_suspectmotive" class="form-control" value="<?php echo $row['SuspectMotive']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Suspect Other Motive</label>
          <input type="textbox" name="suspect_suspectothermotive" class="form-control" value="<?php echo $row['SuspectOtherMotive']?>" disabled/>
      </div>
</div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Marks</label>
          <input type="textbox" name="suspect_marks" class="form-control" value="<?php echo $row['Marks']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Hair Color</label>
          <input type="textbox" name="suspect_haircolor" class="form-control" value="<?php echo $row['HairColor']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Eye Color</label>
          <input type="textbox" name="suspect_eyecolor" class="form-control" value="<?php echo $row['EyeColor']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Height</label>
          <input type="textbox" name="suspect_height" class="form-control" value="<?php echo $row['Height']?>" disabled/>
          <label>Weight</label>
          <input type="textbox" name="suspect_weight" class="form-control" value="<?php echo $row['Weight']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Under the influence?</label><br/>
         
      <input type="textbox" name="suspect_underinfluence" class="form-control" value="<?php echo $row['UnderTheInfluence']?>" disabled/>
      

    
      <label>others</label>
      <input type="textbox" name="suspect_others" class="form-control" value="<?php echo $row['Others']?>" disabled/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Suspect Mother's Name</label>
          <input type="textbox" name="suspect_suspectmothersname" class="form-control" value="<?php echo $row['SuspectMothersName']?>" disabled/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectmothercivilstatus" class="form-control" value="<?php echo $row['MothersCivilStatus']?>" disabled/>
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectmotheroccupation" class="form-control" value="<?php echo $row['MothersOccupation']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Suspect Father's Name</label>
          <input type="textbox" name="suspect_suspectfathersname" class="form-control" value="<?php echo $row['SuspectFathersName']?>" disabled/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectfathercivilstatus" class="form-control" value="<?php echo $row['FathersCivilStatus']?>" disabled/>
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectfatheroccupation" class="form-control" value="<?php echo $row['FathersOccupation']?>" disabled/>
      </div>
      <div class="form-group">
          <label>Suspect Guardian's Name</label>
          <input type="textbox" name="suspect_suspectguardiansname" class="form-control" value="<?php echo $row['SuspectGuardiansName']?>" disabled/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectguardiancivilstatus" class="form-control" value="<?php echo $row['GuardiansCivilStatus']?>" disabled/>
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectguardianoccupation" class="form-control" value="<?php echo $row['GuardiansOccupation']?>" disabled/>
      </div>
    </div>
							
						</div>
						<div class="tabs__pane" id="tab-4<?php echo $row['GUI']; ?>" role="tabpanel">
							<h3>Case Details</h3>

							<div class="col-md-3">
      <div class="form-group">
          <label>Blotter Entry Number</label>
          <input type="textbox" name="casedetail_blotterentrynumber" class="form-control" value="<?php echo $row['BlotterENumber']?>" disabled/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label style="font-size: 9pt;">Commited by Threat Groups(CTG)</label>
          <input type="textbox" name="casedetail_commitedbythreatgroup" class="form-control" value="<?php echo $row['CTG']?>" disabled/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Category of Crime</label>
          <input type="textbox" name="casedetail_categoryofcrime" class="form-control" value="<?php echo $row['COC']?>" disabled/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="background-color:black;height:1px;"></div>
      <div class="col-md-12"><h4>Date & Time of Commision</h4></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Date Commited</label>
          <div class='input-group date' id='datetimepicker1'>
               <input type='text' name= "casedetail_datecommited" class="form-control" value="<?php echo $row['DateCommited']?>" disabled/>
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
          
      </div>
      
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Time Commited</label>
          <div class='input-group date' id='datetimepicker1'>
               <input type='text' name ="casedetail_timecommited" class="form-control" value="<?php echo $row['TimeCommited']?>" disabled/>
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-time"></span>
               </span>
            </div>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3"></div>
      <div class="col-md-1"></div>

      <div class="col-md-12" style="background-color:black;height:1px;"></div>
      <div class="col-md-12"><h4>Place of Commision</h4></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="casedetail_province" class="form-control" value="<?php echo $row['Province']?>" disabled/>
          
      </div>
      <div class="form-group">
          <label>City/Municipality</label>
          <input type="text" name="casedetail_city" class="form-control" value="<?php echo $row['Municipality']?>" disabled/>
            
          
      </div>
      <div class="form-group">
          <label>House Number/ Street Name</label>
          <input type="textbox" name="casedetail_street" class="form-control" value="<?php echo $row['Street']?>" disabled/>
          
      </div>
      <div class="form-group">
          <label>Barangay</label>
          <input type="text" name="casedetail_barangay" class="form-control" value="<?php echo $row['Barangay']?>" disabled />
                      
      </div>
      <div class="form-group">
          <label>Is it a private place?</label>
          <input type="text" name="casedetail_privateplace" class="form-control" value="<?php echo $row['IsItPrivatePlace']?>" disabled/>
            
      </div>
      <div class="form-group">
          <label>Crime Identifier</label>
          <input type="textbox" name="casedetail_crimeidentifier" class="form-control" value="<?php echo $row['CrimeIdentifier']?>" disabled/>
          
      </div>
      <div class="form-group">
          <label>Case Status</label>
          <input type="text" name="casedetail_casestatus" class="form-control" value="<?php echo $row['CaseStatus']?>" disabled/>
            
      </div>
      
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Narrative</label>
        <textarea class="form-control" name="casedetail_narrative" rows="10" disabled><?php echo $row['Narrative']?></textarea>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
      <div class="form-group">
          <label>Is it a crime?</label>
          <input type="text" name="casedetail_isitacrime" class="form-control" value="<?php echo $row['Itiscrime']?>" disabled/>
           
          
      </div>
      <div class="form-group">
          <label>Is it reffered by barangay?</label>
          <input type="text" name="casedetail_isitrefferedby" class="form-control"value="<?php echo $row['IsItRefferedBy']?>" disabled/>
            
          
      </div>
      <div class="form-group">
          <label>Is it referred to barangay?</label>
          <input type="text" name="casedetail_isitrefferedto" class="form-control" value="<?php echo $row['IsItRefferedTo']?>" disabled/>
            
          
      </div>
      <div class="form-group">
          <label>Intention</label>
          <input type="textbox" name="casedetail_intention" class="form-control" value="<?php echo $row['Intention']?>" disabled/>
          
      </div>
      <div class="form-group">
          <label>Motive</label>
          <input type="textbox" name="casedetail_motive" class="form-control" value="<?php echo $row['Motive']?>" disabled/>
          
      </div>
      <div class="form-group">
          <label>Weapons</label>
          <input type="textbox" name="casedetail_weapons" class="form-control" value="<?php echo $row['Weapons']?>" disabled/>
          
      </div>
      </div>
							
						</div>

					</div>
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
