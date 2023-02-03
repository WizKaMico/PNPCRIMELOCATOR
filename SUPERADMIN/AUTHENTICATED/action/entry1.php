<?php
    session_start();
    include_once('../../../connection/connection.php');

    if(isset($_POST['submit'])){
    
    $GUID = uniqid();   

    $complaint_firstname = $_POST["complaint_firstname"];
    $complaint_middlename = $_POST["complaint_middlename"];
    $complaint_lastname = $_POST["complaint_lastname"];
    $complaint_qualifier = $_POST["complaint_qualifier"];
    $complaint_alias = $_POST["complaint_alias"];
    $complaint_citizenship = $_POST["complaint_citizenship"];
    $complaint_civilstatus = $_POST["complaint_civilstatus"];
    $complaint_province = $_POST["complaint_province"];
    $complaint_city = $_POST["complaint_city"];
    $complaint_street = $_POST["complaint_street"];
    $complaint_barangay = $_POST["complaint_barangay"];
    $complaint_latitude = $_POST["complaint_latitude"];
    $complaint_longitude = $_POST["complaint_longitude"];
    $complaint_phonenumber = $_POST["complaint_phonenumber"];
    $complaint_modeofreport= $_POST["complaint_modeofreport"];
    $complaint_emailaddress = $_POST["complaint_emailaddress"];
    $complaint_birthdate = $_POST["complaint_birthdate"];
    $complaint_birthplace = $_POST["complaint_birthplace"];
    $complaint_age = $_POST["complaint_age"];
    $complaint_educationalattainment = $_POST["complaint_educationalattainment"];
    $complaint_Occupation = $_POST["complaint_Occupation"];
    $complaint_relationtovictim = $_POST["complaint_relationtovictim"];
    $complaint_gender = $_POST["complaint_gender"];
    /* */

    /*Victim */
    $victim_firstname = $_POST["victim_firstname"];
    $victim_middlename = $_POST["victim_firstname"];
    $victim_lastname = $_POST["victim_lastname"];
    $victim_qualifier = $_POST["victim_qualifier"];
    $victim_alias = $_POST["victim_alias"];
    $victim_citizenship = $_POST["victim_citizenship"];
    $victim_civilstatus = $_POST["victim_civilstatus"];
    $victim_province = $_POST["victim_province"];
    $victim_city = $_POST["victim_city"];
    $victim_street = $_POST["victim_street"];
    $victim_barangay = $_POST["victim_barangay"];
    $victim_latitude = $_POST["victim_latitude"];
    $victim_longitude = $_POST["victim_longitude"];
    $victim_phonenumber = $_POST["victim_phonenumber"];
    $victim_emailaddress = $_POST["victim_emailaddress"];
    $victim_birthdate = $_POST["victim_birthdate"];
    $victim_birthplace = $_POST["victim_birthplace"];
    $victim_gender = $_POST["victim_gender"];
    $victim_age = $_POST["victim_age"];
    $victim_relationtosuspect = $_POST["victim_relationtosuspect"];
    $victim_datelastseen = $_POST["victim_datelastseen"];
    $victim_status = $_POST["victim_status"];
    $victim_timelastseen = $_POST["victim_timelastseen"];
    $victim_occupation = $_POST["victim_occupation"];
    $victim_placeofcustody = $_POST["victim_placeofcustody"];
    $victim_civilstatus = $_POST["victim_civilstatus"];
    $victim_placelastseen = $_POST["victim_placelastseen"];
    $victim_education = $_POST["victim_education"];
    /* */

    /*Suspect */
    $suspect_status = $_POST["suspect_status"];
    $suspect_degreeofparticipation = $_POST["suspect_degreeofparticipation"];
    $suspect_categoryofcrime = $_POST["suspect_categoryofcrime"];
    $suspect_firstname = $_POST["suspect_firstname"];
    $suspect_middlename = $_POST["suspect_middlename"];
    $suspect_lastname = $_POST["suspect_lastname"];
    $suspect_qualifier = $_POST["suspect_qualifier"];
    $suspect_alias = $_POST["suspect_alias"];
    $suspect_citizenship = $_POST["suspect_citizenship"];
    $suspect_civilstatus = $_POST["suspect_civilstatus"];
    $suspect_province = $_POST["suspect_province"];
    $suspect_city = $_POST["suspect_city"];
    $suspect_street = $_POST["suspect_street"];
    $suspect_barangay = $_POST["suspect_barangay"];
    $suspect_latitude = $_POST["suspect_latitude"];
    $suspect_longitude = $_POST["suspect_longitude"];
    $suspect_phonenumber = $_POST["suspect_phonenumber"];
    $suspect_mobilenumber = $_POST["suspect_mobilenumber"];
    $suspect_emailaddress = $_POST["suspect_emailaddress"];
    $suspect_birthdate = $_POST["suspect_birthdate"];
    $suspect_birthplace = $_POST["suspect_birthplace"];
    $suspect_gender = $_POST["suspect_gender"];
    $suspect_age = $_POST["suspect_age"];
    $suspect_education = $_POST["suspect_education"];
    $suspect_schooladdress = $_POST["suspect_schooladdress"];
    $suspect_civistatus = $_POST["suspect_civistatus"];
    $suspect_occupation = $_POST["suspect_occupation"];
    $suspect_relationtovictim = $_POST["suspect_relationtovictim"];
    $suspect_suspectmotive = $_POST["suspect_suspectmotive"];
    $suspect_suspectothermotive = $_POST["suspect_suspectothermotive"];
    $suspect_marks = $_POST["suspect_marks"];
    $suspect_haircolor = $_POST["suspect_haircolor"];
    $suspect_eyecolor = $_POST["suspect_eyecolor"];
    $suspect_height = $_POST["suspect_height"];
    $suspect_weight = $_POST["suspect_weight"];
    
    $suspect_underinfluence = $_POST["suspect_underinfluence"];
    

    $suspect_others = $_POST["suspect_others"];

    $suspect_suspectmothersname = $_POST["suspect_suspectmothersname"];
    $suspect_suspectmothercivilstatus = $_POST["suspect_suspectmothercivilstatus"];
    $suspect_suspectmotheroccupation = $_POST["suspect_suspectmotheroccupation"];
    $suspect_suspectfathersname = $_POST["suspect_suspectfathersname"];
    $suspect_suspectfathercivilstatus = $_POST["suspect_suspectfathercivilstatus"];
    $suspect_suspectfatheroccupation = $_POST["suspect_suspectfatheroccupation"];
    $suspect_suspectguardiansname = $_POST["suspect_suspectguardiansname"];
    $suspect_suspectguardiancivilstatus = $_POST["suspect_suspectguardiancivilstatus"];
    $suspect_suspectguardianoccupation = $_POST["suspect_suspectguardianoccupation"];

    /* */

    /*Case Detail */
    $casedetail_blotterentrynumber = $_POST["casedetail_blotterentrynumber"];
    $casedetail_commitedbythreatgroup = $_POST["casedetail_commitedbythreatgroup"];
    $casedetail_categoryofcrime = $_POST["casedetail_categoryofcrime"];
    $casedetail_datecommited = $_POST["casedetail_datecommited"]; 
    $casedetail_timecommited = $_POST["casedetail_timecommited"];
    $casedetail_province = $_POST["casedetail_province"];
    $casedetail_city = $_POST["casedetail_city"];
    $casedetail_street = $_POST["casedetail_street"];
    $casedetail_barangay = $_POST["casedetail_barangay"];
    $casedetail_privateplace = $_POST["casedetail_privateplace"] ;
    $casedetail_crimeidentifier = $_POST["casedetail_crimeidentifier"];
    $casedetail_casestatus = $_POST["casedetail_casestatus"];
    $casedetail_isitacrime = $_POST["casedetail_isitacrime"];
    $casedetail_isitrefferedby = $_POST["casedetail_isitrefferedby"];
    $casedetail_isitrefferedto = $_POST["casedetail_isitrefferedto"];
    $casedetail_intention = $_POST["casedetail_intention"];
    $casedetail_motive = $_POST["casedetail_motive"];
    $casedetail_weapons = $_POST["casedetail_weapons"];
    $casedetail_narrative = $_POST["casedetail_narrative"];




        $sql = "INSERT INTO `complaint_report`(`GUID`, `Firstname`, `Middlename`, `Lastname`, `Qualifier`, `Alias`, `Citizenship`, `CivilStatus`, `Province`, `City`, `Street`, `Barangay`, `Latitude`, `Longtitude`, `PhoneNumber`, `ModeOfReport`, `EmailAddress`, `Birthdate`, `Birthplace`, `Gender`, `Age`, `EducationalAttainment`, `Occupation`, `RelationToVictim`) VALUES  ('$GUID','$complaint_firstname','$complaint_middlename','$complaint_lastname','$complaint_qualifier','$complaint_alias','$complaint_citizenship','$complaint_civilstatus','$complaint_province','$complaint_city','$complaint_street','$complaint_barangay','$complaint_latitude','$complaint_longitude','$complaint_phonenumber','$complaint_modeofreport','$complaint_emailaddress','$complaint_birthdate','$complaint_birthplace','$complaint_gender','$complaint_age','$complaint_educationalattainment','$complaint_Occupation','$complaint_relationtovictim')";


             $sql1 = "INSERT INTO `victim_report`(`GUID`, `Firstname`, `Middlename`, `Lastname`, `Qualifier`, `Alias`, `Citizenship`, `CivilStatus`, `Province`, `City`, `Street`, `Barangay`, `Latitude`, `Longitude`, `PhoneNumber`, `EmailAddress`, `Birthdate`, `Birthplace`, `Gender`, `Age`, `RelationToSuspect`, `DateLastSeen`, `TimeLastSeen`, `PlaceOfCustody`, `PlaceLastSeen`, `Status`, `Occupation`, `Education`) VALUES  ('$GUID','$victim_firstname','$victim_middlename','$victim_lastname','$victim_qualifier','$victim_alias','$victim_citizenship','$victim_civilstatus','$victim_province','$victim_city','$victim_street','$victim_barangay','$victim_latitude','$victim_longitude','$victim_phonenumber','$victim_emailaddress','$victim_birthdate','$victim_birthplace','$victim_gender','$victim_age','$victim_relationtosuspect','$victim_datelastseen','$victim_timelastseen','$victim_placeofcustody','$victim_placelastseen','$victim_status','$victim_occupation','$victim_education')";  

             $sql2 = "INSERT INTO `suspect_report`(`GUID`, `Status`, `DegreeOfParticipation`, `CategoryOfCrime`, `Firstname`, `Middlename`, `Lastname`, `Qualifier`, `Alias`,
     `Citizenship`, `CivilStatus`, `Province`, `City`, `Street`, `Barangay`, `Latitude`, `Longitude`, `HomePhoneNumber`, `MobileNumber`, `EmailAddress`, `Birthdate`, `Birthplace`,
      `Gender`, `Age`, `EducationalAttainment`, `SchoolAddress`, `Occupation`, `RelationToVictim`, `SuspectMotive`, `SuspectOtherMotive`, `Marks`, `HairColor`, `EyeColor`, `Height`,
       `Weight`, `UnderTheInfluence`, `Others`, `SuspectMothersName`, `MothersCivilStatus`, `MothersOccupation`, `SuspectFathersName`, `FathersCivilStatus`, `FathersOccupation`, 
       `SuspectGuardiansName`, `GuardiansCivilStatus`, `GuardiansOccupation`) VALUES ('$GUID','$suspect_status','$suspect_degreeofparticipation','$suspect_categoryofcrime','$suspect_firstname','$suspect_middlename','$suspect_lastname','$suspect_qualifier',
       '$suspect_alias','$suspect_citizenship','$suspect_civilstatus','$suspect_province','$suspect_city','$suspect_street','$suspect_barangay','$suspect_latitude','$suspect_longitude','$suspect_phonenumber','$suspect_mobilenumber','$suspect_emailaddress','$suspect_birthdate',
       '$suspect_birthplace','$suspect_gender','$suspect_age','$suspect_education','$suspect_schooladdress','$suspect_occupation','$suspect_relationtovictim','$suspect_suspectmotive','$suspect_suspectothermotive','$suspect_marks','$suspect_haircolor','$suspect_eyecolor','$suspect_height',
       '$suspect_weight','$suspect_underinfluence','$suspect_others','$suspect_suspectmothersname','$suspect_suspectmothercivilstatus','$suspect_suspectmotheroccupation','$suspect_suspectfathersname','$suspect_suspectfathercivilstatus','$suspect_suspectfatheroccupation',
       '$suspect_suspectguardiansname','$suspect_suspectguardiancivilstatus','$suspect_suspectguardianoccupation')";  



        $sql3 = "INSERT INTO `casedetail_report`(`GUID`, `BlotterENumber`, `CTG`, `COC`, `DateCommited`, `TimeCommited`, `Province`, `Municipality`, `Street`, `Barangay`,
     `IsitPrivatePlace`, `CrimeIdentifier`, `CaseStatus`, `Narrative`, `Itiscrime`, `IsItRefferedBy`, `IsItRefferedTo`, `Intention`, `Motive`, `Weapons`)
      VALUES ('$GUID','$casedetail_blotterentrynumber','$casedetail_commitedbythreatgroup','$casedetail_categoryofcrime','$casedetail_datecommited','$casedetail_timecommited',
      '$casedetail_province','$casedetail_city','$casedetail_street','$casedetail_barangay','$casedetail_privateplace','$casedetail_crimeidentifier',
      '$casedetail_casestatus','$casedetail_narrative','$casedetail_isitacrime','$casedetail_isitrefferedby','$casedetail_isitrefferedto','$casedetail_intention',
      '$casedetail_motive','$casedetail_weapons')";  

        //use for MySQLi OOP
        if($con->query($sql) && $con->query($sql1) && $con->query($sql2) && $con->query($sql3)){
            $_SESSION['success'] = 'added successfully';
        }
        ///////////////

        //use for MySQLi Procedural
        // if(mysqli_query($conn, $sql)){
        //  $_SESSION['success'] = 'Member updated successfully';
        // }
        ///////////////
        
        else{
            $_SESSION['error'] = 'Something went wrong in updating member';
        }
    }
    else{
        $_SESSION['error'] = 'Select member to edit first';
    }

    header('location: ../index.php?view=ADDRECORD');

?>