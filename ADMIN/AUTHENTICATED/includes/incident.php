


        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              </div>
              <div class="card-body ">
              
                <div class="tabs">
                  <nav class="tabs__nav" role="tablist">
                    <button class="tabs__btn is-active" data-tab-target="tab-1" type="button" role="tab" aria-selected="true">COMPLAINT</button>
                    <button class="tabs__btn" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">VICTIM</button>
                    <button class="tabs__btn" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">SUSPECT</button>
                    <button class="tabs__btn" data-tab-target="tab-4" type="button" role="tab" aria-selected="false">CASE DETAIL</button>

                  </nav>
<form action="action/entry1.php" method="POST">
<div class="tabs__content">
   <div class="tabs__pane is-visible" id="tab-1" role="tabpanel">
 
      <div class="col-md-12">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox" name="complaint_firstname" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" name="complaint_middlename" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="complaint_lastname" class="form-control"/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="complaint_qualifier" class="form-control"/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="complaint_alias" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="complaint_citizenship" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="complaint_civilstatus" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="complaint_province" class="form-control"/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="complaint_city" class="form-control"/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="complaint_street" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="complaint_barangay" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="complaint_latitude" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="complaint_longitude" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Phone Number</label>
          <input type="textbox" name="complaint_phonenumber" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Mode Of Report</label>
          <input type="textbox" name="complaint_modeofreport" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="complaint_emailaddress" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="complaint_birthdate" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="complaint_birthplace" class="form-control"/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <select name="complaint_gender" class="form-control">
            <option>Male</option>
            <option>Female</option>
          </select>
          <label>Age</label>
          <input type="number" class="form-control" name="complaint_age">
      </div>

      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12"><h3>Other Information</h3></br></div>
      <div class="col-md-12">
      <div class="form-group">
        
          <label>Educational Attainment</label>
          <input type="textbox" name="complaint_educationalattainment" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
        <div class="form-group">
          <label>Occupation</label>
          <input type="textbox" name="complaint_Occupation" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Relation to Victim</label>
          <input type="textbox" name="complaint_relationtovictim" class="form-control"/>
        </div>
      </div>
      <div class="col-md-12">
        <button class="tabs__btn" class="form-control" data-tab-target="tab-2" type="button" role="tab" aria-selected="false">SUBMIT</button>
       </div> 
   
                    </div>
                    <div class="tabs__pane" id="tab-2" role="tabpanel">

      <div class="col-md-12">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox" name="victim_firstname" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" name="victim_middlename" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="victim_lastname" class="form-control"/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="victim_qualifier" class="form-control"/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="victim_alias" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="victim_citizenship" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="victim_civilstatus" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="victim_province" class="form-control"/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="victim_city" class="form-control"/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="victim_street" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="victim_barangay" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="victim_latitude" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="victim_longitude" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Phone Number</label>
          <input type="textbox" name="victim_phonenumber" class="form-control"/>
      </div>
      
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="victim_emailaddress" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="victim_birthdate" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="victim_birthplace" class="form-control"/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <select name="victim_gender" class="form-control">
            <option>Male</option>
            <option>Female</option>
          </select>
          <label>Age</label>
          <input type="number" name="victim_age" class="form-control">
      </div>
      <div class="form-group">
          <label>Relation to Suspect</label>
          <input type="textbox" name="victim_relationtosuspect" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12" style="height:30px; "></div>

      <div class="col-md-12">
      <div class="form-group">
          <label>Date Last Seen</label>
          <input type="textbox" name="victim_datelastseen" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Status</label>
          <input type="textbox" name="victim_status" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Time Last Seen</label>
          <input type="textbox" name="victim_timelastseen" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Occupation</label>
          <input type="textbox" name="victim_occupation" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Place of Custody</label>
          <input type="textbox" name="victim_placeofcustody" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="victim_civilstatus" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Place Last Seen</label>
          <input type="textbox" name="victim_placelastseen" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Education</label>
          <select name="victim_education" class="form-control">
            <option>None</option>
            <option>Elementary</option>
            <option>High School</option>
            <option>College</option>
            <option>Undergrad</option>
          </select>
      </div>
      </div>

      <button class="tabs__btn" class="form-control" data-tab-target="tab-3" type="button" role="tab" aria-selected="false">SUBMIT</button>

                     
                    </div>
  <div class="tabs__pane" id="tab-3" role="tabpanel">

        <div class="col-md-12">
      <div class="form-group">
          <label>Status</label>
          <select name="suspect_status" class="form-control">
            <option>Status 1</option>
            <option>Status 2</option>
            <option>Status 3</option>
          </select>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Degree of Participation</label>
          <select name="suspect_degreeofparticipation" class="form-control">
            <option>Degree 1</option>
            <option>Degree 2</option>
            <option>Degree 3</option>
          </select>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Category of Crime</label>
          <select name="suspect_categoryofcrime" class="form-control">
            <option>Category 1</option>
            <option>Category 2</option>
            <option>Category 3</option>
          </select>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12" style="height:30px; "></div>
      <div class="col-md-12">
        <div class="form-group">
          <label>First Name</label>
          <input type="textbox" name="suspect_firstname" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Middle Name</label>
          <input type="textbox" name="suspect_middlename" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="textbox" name="suspect_lastname" class="form-control"/>
        </div>
        <div class="form-group">
          <label style="font-size: 9pt;">Qualifier</label>
          <input type="textbox" name="suspect_qualifier" class="form-control"/>
          <label style="font-size: 9pt;">Alias</label>
          <input type="textbox" name="suspect_alias" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Citizenship</label>
          <input type="textbox" name="suspect_citizenship" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="suspect_civilstatus" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="suspect_province" class="form-control"/>
        </div>
        <div class="form-group">
          <label>City/Municipality</label>
          <input type="textbox" name="suspect_city" class="form-control"/>
        </div>
        <div class="form-group">
          <label>House No./ Street Name</label>
          <input type="textbox" name="suspect_street" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Barangay</label>
          <input type="textbox" name="suspect_barangay" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Latitude</label>
          <input type="textbox" name="suspect_latitude" class="form-control"/>
        </div>
        <div class="form-group">
          <label>Longitude</label>
          <input type="textbox" name="suspect_longitude" class="form-control"/>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Home Phone Number</label>
          <input type="textbox" name="suspect_phonenumber" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Mobile Number</label>
          <input type="textbox" name="suspect_mobilenumber" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Email Address(if any)</label>
          <input type="textbox" name="suspect_emailaddress" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthdate</label>
          <input type="textbox" name="suspect_birthdate" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Birthplace</label>
          <input type="textbox" name="suspect_birthplace" class="form-control"/>
      </div>

      <div class="form-group">
          <label>Gender</label>
          <select name="suspect_gender" class="form-control">
            <option>Male</option>
            <option>Female</option>
          </select>
          <label>Age</label>
          <input type="number" name="suspect_age" class="form-control">
      </div>

      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="height:1px; background-color:black;"></div>
      <div class="col-md-12"><h3>Other Information</h3></br></div>
      
      <div class="col-md-12">
      <div class="form-group">
          <label>Educational Attainment</label>
          <select name="suspect_education" class="form-control">
            <option>None</option>
            <option>Elementary</option>
            <option>High School</option>
            <option>College</option>
            <option>Undergrad</option>
          </select>
      </div>
      <div class="form-group">
          <label>School Address</label>
          <input type="textbox" name="suspect_schooladdress" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Civil Status</label>
          <input type="textbox" name="suspect_civistatus" class="form-control" />
          <label>Occupation</label>
          <input type="textbox" name="suspect_occupation" class="form-control" />
      </div>
      <div class="form-group">
          <label>Relation to Victim</label>
          <input type="textbox" name="suspect_relationtovictim" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Suspect Motive</label>
          <input type="textbox" name="suspect_suspectmotive" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Suspect Other Motive</label>
          <input type="textbox" name="suspect_suspectothermotive" class="form-control"/>
      </div>
</div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Marks</label>
          <input type="textbox" name="suspect_marks" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Hair Color</label>
          <input type="textbox" name="suspect_haircolor" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Eye Color</label>
          <input type="textbox" name="suspect_eyecolor" class="form-control"/>
      </div>
      <div class="form-group">
          <label>Height</label>
          <input type="textbox" name="suspect_height" class="form-control" />
          <label>Weight</label>
          <input type="textbox" name="suspect_weight" class="form-control" />
      </div>
      <div class="form-group">
          <label>Under the influence?</label><br/>
        
    </label>
    <select name = "suspect_underinfluence" class="form-control"> 
     <option value = "No"> No </option>
     <option value = "Liquor"> Liquor </option>
     <option value = "Drugs"> Drugs </option>

    </select>
      <br/>
      <label>others</label>
      <input type="textbox" name="suspect_others" class="form-control"/>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Suspect Mother's Name</label>
          <input type="textbox" name="suspect_suspectmothersname" class="form-control"/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectmothercivilstatus" class="form-control" />
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectmotheroccupation" class="form-control" />
      </div>
      <div class="form-group">
          <label>Suspect Father's Name</label>
          <input type="textbox" name="suspect_suspectfathersname" class="form-control"/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectfathercivilstatus" class="form-control" />
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectfatheroccupation" class="form-control" />
      </div>
      <div class="form-group">
          <label>Suspect Guardian's Name</label>
          <input type="textbox" name="suspect_suspectguardiansname" class="form-control"/>
          
      </div>
      <div class="form-group">
      <label>Civil Status</label>
          <input type="textbox" name="suspect_suspectguardiancivilstatus" class="form-control" />
          <label>Occupation</label>
          <input type="textbox" name="suspect_suspectguardianoccupation" class="form-control" />
      </div>     
      </div>      

      <button class="tabs__btn" class="form-control" data-tab-target="tab-4" type="button" role="tab" aria-selected="false">SUBMIT</button>   
                       
                    </div>
                     <div class="tabs__pane" id="tab-4" role="tabpanel">
              


    <div class="col-md-12">
      <div class="form-group">
          <label>Blotter Entry Number</label>
          <input type="textbox" name="casedetail_blotterentrynumber" class="form-control"/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label style="font-size: 9pt;">Commited by Threat Groups(CTG)</label>
          <input type="textbox" name="casedetail_commitedbythreatgroup" class="form-control"/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Category of Crime</label>
          <input type="textbox" name="casedetail_categoryofcrime" class="form-control"/>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12" style="background-color:black;height:1px;"></div>
      <div class="col-md-12"><h4>Date & Time of Commision</h4></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Date Commited</label>
          <div class='input-group date' id='datetimepicker1'>
               <input type='text' name= "casedetail_datecommited" class="form-control" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
          
      </div>
      
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Time Commited</label>
          <div class='input-group date' id='datetimepicker1'>
               <input type='text' name ="casedetail_timecommited" class="form-control" />
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
      <div class="col-md-12">
      <div class="form-group">
          <label>Province</label>
          <input type="textbox" name="casedetail_province" class="form-control"/>
          
      </div>
      <div class="form-group">
          <label>City/Municipality</label>
          <select name="casedetail_city" class="form-control">
            <option value="Malolos">Malolos</option>
            <option value = "Hagonoy">Hagonoy</option>
            <option value = "Calumpit">Calumpit</option>
            <option value = "Paomb">Paombong</option>
          </select>
          
      </div>
      <div class="form-group">
          <label>House Number/ Street Name</label>
          <input type="textbox" name="casedetail_street" class="form-control"/>
          
      </div>
      <div class="form-group">
          <label>Barangay</label>
          <select name="casedetail_barangay" class="form-control">
            <option>San Juan</option>
            <option>San Isidro</option>
            <option>San Miguel</option>
            <option>Iba</option>
          </select>
          
      </div>
      <div class="form-group">
          <label>Is it a private place?</label>
          <select name="casedetail_privateplace" class="form-control">
            <option>Yes</option>
            <option>No</option>
           
          </select>
          
      </div>
      <div class="form-group">
          <label>Crime Identifier</label>
          <input type="textbox" name="casedetail_crimeidentifier" class="form-control"/>
          
      </div>
      <div class="form-group">
          <label>Case Status</label>
          <select name="casedetail_casestatus" class="form-control">
            <option>Status 1</option>
            <option>Status 2</option>
           
          </select>
          
      </div>
      
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Narrative</label>
        <textarea class="form-control" name="casedetail_narrative" rows="10"></textarea>
          
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-12">
      <div class="form-group">
          <label>Is it a crime?</label>
          <select name="casedetail_isitacrime" class="form-control">
            <option>Yes</option>
            <option>No</option>
           
          </select>
          
      </div>
      <div class="form-group">
          <label>Is it reffered by barangay?</label>
          <select name="casedetail_isitrefferedby" class="form-control">
            <option>Yes</option>
            <option>No</option>
           
          </select>
          
      </div>
      <div class="form-group">
          <label>Is it referred to barangay?</label>
          <select name="casedetail_isitrefferedto" class="form-control">
            <option>Yes</option>
            <option>No</option>
           
          </select>
          
      </div>
      <div class="form-group">
          <label>Intention</label>
          <input type="textbox" name="casedetail_intention" class="form-control"/>
          
      </div>
      <div class="form-group">
          <label>Motive</label>
          <input type="textbox" name="casedetail_motive" class="form-control"/>
          
      </div>
      <div class="form-group">
          <label>Weapons</label>
          <input type="textbox" name="casedetail_weapons" class="form-control"/>
          
      </div>
      </div>

      <div class="form-group">
         <center>
          <button class="form-control" name="submit" style="width:50%;">SUBMIT</button>
          </center>
          
      </div>
      </div>

                       
                    </div>
                     </form>
                  </div>
                </div>
               
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
         </div> 
       

      


     

<style>

button {
  all: unset;
}

h1 {
  margin-bottom: 2rem;
  font-weight: 700;
  font-size: 3rem;
  color: #000;
  line-height: 1.2;
}
h1 strong {
  display: block;
  font-weight: 500;
  color: #999;
  font-size: 1rem;
}

.tabs {
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.tabs__nav {
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
  background-color: var(--color-accent-x-light);
}
.tabs__btn {
  position: relative;
  padding: 1rem 1.25rem;
  cursor: pointer;
  transition: opacity 0.3s;
}
.tabs__btn:not(.is-active) {
  opacity: 0.6;
}
.tabs__btn:not(.is-active):hover {
  opacity: 1;
}
.tabs__btn.is-active {
  color: var(--color-accent);
  background-color: #fff;
  border-right: 1px solid rgba(0, 0, 0, 0.125);
  border-left: 1px solid rgba(0, 0, 0, 0.125);
}
.tabs__btn.is-active::after {
  content: "";
  position: absolute;
  bottom: -1px;
  left: 0;
  height: 1px;
  width: 100%;
  background-color: #fff;
}
.tabs__btn:first-child.is-active {
  border-left: none;
}
.tabs__pane {
  display: none;
  padding: 2rem 1.25rem;
}
.tabs__pane.is-visible {
  display: block;
}

h3 {
  font-size: 1.8rem;
  margin-bottom: 1rem;
}

p + p {
  margin-top: 1rem;
}

</style>
