<?php

$param_ID = $_GET["ID"];

include "../../../../connection/connection.php";
           
            
$selectTableDataQuery = "Select * from complaint_report where GUID = '$param_ID'";


$executeFetchDataQuery = mysqli_query($con,$selectTableDataQuery);
while($complaint = mysqli_fetch_array($executeFetchDataQuery))
{

$selectTableDataQuery2 = "Select * from victim_report where GUID = '$param_ID'";
$executeFetchDataQuery2 = mysqli_query($con,$selectTableDataQuery2);
while($victim = mysqli_fetch_array($executeFetchDataQuery2))
{
    $selectTableDataQuery3 = "Select * from suspect_report where GUID = '$param_ID'";  
    $executeFetchDataQuery3 = mysqli_query($con,$selectTableDataQuery3);
    while($suspect = mysqli_fetch_array($executeFetchDataQuery3))   
    {
        $selectTableDataQuery4 = "Select * from casedetail_report where GUID = '$param_ID'";  
        $executeFetchDataQuery4 = mysqli_query($con,$selectTableDataQuery4);
         while($casedetail = mysqli_fetch_array($executeFetchDataQuery4))   
        {
       require_once('tcpdf/tcpdf.php');



         $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);
       $pdf->SetTitle("Generated PDF using TCPDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  

  
		
		$fname = $complaint['Firstname'];
		$lname = $complaint['Lastname'];
		$mname = $complaint['Middlename'];
		$quali = $complaint['Qualifier'];
		$alias = $complaint['Alias'];
		$cship = $complaint['Citizenship'];
		$cstats = $complaint['CivilStatus'];
		$prov = $complaint['Province'];
		$city = $complaint['City'];
		$street = $complaint['Street'];
		$barangay = $complaint['Barangay'];
		$lati = $complaint['Latitude'];
		$long = $complaint['Longtitude'];
		$pnum = $complaint['PhoneNumber'];
		$mrep = $complaint['ModeOfReport'];
		$eadd = $complaint['EmailAddress'];
		$bdate = $complaint['Birthdate'];
		$bplace = $complaint['Birthplace'];
		$gender = $complaint['Gender'];
		$age = $complaint['Age'];
		$educ = $complaint['EducationalAttainment'];
		$occu = $complaint['Occupation'];
		$rvictim= $complaint['RelationToVictim'];
		
		
		
	  $pdf->AddPage();  
	$pdf->SetFont("helvetica","B",10);
	$pdf->Image('..\..\..\..\includes\images\pnplogo.png',10,5,16);
	$pdf->Image('..\..\..\..\includes\images\malolos.png',180,5,20);
	

	
	$pdf->Cell(190,5,"PHILIPPINE NATIONAL POLICE",0,1,"C");
	$pdf->Cell(190,5,"MALOLOS,BULACAN",0,1,"C");
	$pdf->Cell(190,5,"INCIDENT REPORT",0,1,"C");
	
	$pdf->Cell(190,8,"",0,"C");
	
	$pdf->Cell(190,8,"REPORTING PERSON",1,1,"C");

	
	$pdf->Cell(55,5,"First Name:",0,0);
	$pdf->Cell(58,5,"$fname",0,0);
	
	$pdf->Cell(35,5,"Province:",0,0);
	$pdf->Cell(58,5,"$prov",0,1);
	
	$pdf->Cell(55,5,"Middlename:",0,0);
	$pdf->Cell(58,5,"$mname",0,0);
	
	$pdf->Cell(35,5,"City:",0,0);
	$pdf->Cell(58,5,"$city",0,1);
	
	$pdf->Cell(55,5,"Lastname:",0,0);
	$pdf->Cell(58,5,"$lname",0,0);
	
	$pdf->Cell(35,5,"Street:",0,0);
	$pdf->Cell(58,5,"$street",0,1);
	
	$pdf->Cell(55,5,"Qualifies:",0,0);
	$pdf->Cell(58,5,"$quali",0,0);
	
	$pdf->Cell(35,5,"Barangay:",0,0);
	$pdf->Cell(58,5,"$barangay",0,1);
	
	$pdf->Cell(55,5,"Alias:",0,0);
	$pdf->Cell(58,5,"$alias",0,0);
	
	$pdf->Cell(35,5,"Latitude:",0,0);
	$pdf->Cell(58,5,"$lati",0,1);
	
	$pdf->Cell(55,5,"Citizenship:",0,0);
	$pdf->Cell(58,5,"$cship",0,0);
	
	$pdf->Cell(35,5,"Longtitude:",0,0);
	$pdf->Cell(58,5,"$long",0,1);
	
	$pdf->Cell(55,5,"Civilstatus:",0,0);
	$pdf->Cell(58,5,"$cstats",0,0);
	
	
	$pdf->Cell(35,5,"PhoneNumber:",0,0);
	$pdf->Cell(58,5,"$pnum",0,1);
	
	
	
	$pdf->Cell(55,5,"Mode of Report:",0,0);
	$pdf->Cell(58,5,"$mrep",0,0);
	
	$pdf->Cell(35,5,"Birthdate:",0,0);
	$pdf->Cell(58,5,"$bdate",0,1);
	
	$pdf->Cell(55,5,"EmailAddress:",0,0);
	$pdf->Cell(58,5,"$eadd",0,0);
	
	$pdf->Cell(35,5,"Birthdate:",0,0);
	$pdf->Cell(58,5,"$bdate",0,1);
	
	
	
	$pdf->Cell(55,5,"Gender:",0,0);
	$pdf->Cell(58,5,"$gender",0,0);
	
	$pdf->Cell(35,5,"Birthplace:",0,0);
	$pdf->Cell(58,5,"$bplace",0,1);
	
	$pdf->Cell(55,5,"Age:",0,0);
	$pdf->Cell(58,5,"$age",0,1);
	
	$pdf->Cell(190,5,"Other Information",0,1,"C");
	
	$pdf->Cell(55,5,"Educational Attainment:",0,0);
	$pdf->Cell(58,5,"$educ",0,1);
	
	$pdf->Cell(55,5,"Occupation:",0,0);
	$pdf->Cell(58,5,"$occu",0,1);
	
	$pdf->Cell(55,5,"Relation to Victim:",0,0);
	$pdf->Cell(58,8,"$rvictim",0,1);
	
	

        $victimfname = $victim['Firstname'];
		$victimlname = $victim['Lastname'];
		$victimmname = $victim['Middlename'];
		$victimquali = $victim['Qualifier'];
		$victimalias = $victim['Alias'];
		$victimcship = $victim['Citizenship'];
		$victimcstats = $victim['CivilStatus'];
		$victimprov = $victim['Province'];
		$victimcity = $victim['City'];
		$victimstreet = $victim['Street'];
		$victimbarangay = $victim['Barangay'];
		$victimlati = $victim['Latitude'];
		$victimlong = $victim['Longitude'];
		$victimpnum = $victim['PhoneNumber'];
		
		$victimeadd = $victim['EmailAddress'];
		$victimbdate = $victim['Birthdate'];
		$victimbplace = $victim['Birthplace'];
		$victimgender = $victim['Gender'];
		$victimage = $victim['Age'];
		
		$victimrsus= $victim['RelationToSuspect'];
		$victimdseen = $victim['DateLastSeen'];
		$victimvstats = $victim['Status'];
		$victimlseen = $victim['TimeLastSeen'];
		$victimvoccu = $victim['Occupation'];
		$victimpcust = $victim['PlaceOfCustody'];
		$victimvstatss = $victim['Status'];
		$victimvpseen = $victim['PlaceLastSeen'];
		$victimveduc= $victim['Education'];
		
		
		$pdf->Cell(190,8,"Victim",1,1,"C");
	
		$pdf->Cell(55,5,"First Name:",0,0);
		$pdf->Cell(58,5,"$victimfname",0,0);
		
		$pdf->Cell(35,5,"EmailAddress:",0,0);
		$pdf->Cell(58,5,"$victimeadd",0,1);
		
		$pdf->Cell(55,5,"Middlename:",0,0);
		$pdf->Cell(58,5,"$victimmname",0,0);
		
		$pdf->Cell(35,5,"Birthdate:",0,0);
		$pdf->Cell(58,5,"$victimbdate",0,1);
		
		$pdf->Cell(55,5,"Lastname:",0,0);
		$pdf->Cell(58,5,"$victimlname",0,0);
		
		$pdf->Cell(35,5,"Birthplace:",0,0);
		$pdf->Cell(58,5,"$victimbplace",0,1);
		
		$pdf->Cell(55,5,"Qualifies:",0,0);
		$pdf->Cell(58,5,"$victimquali",0,0);
		
		$pdf->Cell(35,5,"Gender:",0,0);
		$pdf->Cell(58,5,"$victimgender",0,1);
		
		$pdf->Cell(55,5,"Alias:",0,0);
		$pdf->Cell(58,5,"$victimalias",0,0);
		
		$pdf->Cell(35,5,"Citizenship:",0,0);
		$pdf->Cell(58,5,"$victimcship",0,1);
		
		$pdf->Cell(55,5,"Civilstatus:",0,0);
		$pdf->Cell(58,5,"$victimcstats",0,0);
		
		$pdf->Cell(35,5,"Age:",0,0);
		$pdf->Cell(58,5,"$victimage",0,1);
		
		$pdf->Cell(55,5,"Province:",0,0);
		$pdf->Cell(58,5,"$victimprov",0,0);
		
		$pdf->Cell(35,5,"DateLastSeen:",0,0);
		$pdf->Cell(58,5,"$victimdseen",0,1);
		
		
		$pdf->Cell(55,5,"City:",0,0);
		$pdf->Cell(58,5,"$victimcity",0,0);
		
		$pdf->Cell(35,5,"VictimStatus:",0,0);
		$pdf->Cell(58,5,"$victimvstats",0,1);
		
		$pdf->Cell(55,5,"Street:",0,0);
		$pdf->Cell(58,5,"$victimstreet",0,0);
		
		$pdf->Cell(35,5,"Lastseen:",0,0);
		$pdf->Cell(58,5,"$victimlseen",0,1);
		
		$pdf->Cell(55,5,"Barangay:",0,0);
		$pdf->Cell(58,5,"$victimbarangay",0,0);
		
			
		$pdf->Cell(35,5,"VictiomOccupation:",0,0);
		$pdf->Cell(58,5,"$victimvoccu",0,1);
		
		$pdf->Cell(55,5,"Latitude:",0,0);
		$pdf->Cell(58,5,"$victimlati",0,0);
		
		$pdf->Cell(35,5,"PersonCustody:",0,0);
		$pdf->Cell(58,5,"$victimpcust",0,1);
		
		$pdf->Cell(55,5,"Longtitude:",0,0);
		$pdf->Cell(58,5,"$victimlong",0,0);
		
		
		$pdf->Cell(35,5,"CivilStatus:",0,0);
		$pdf->Cell(58,5,"$victimvstatss",0,1);
		
		$pdf->Cell(55,5,"PhoneNumber:",0,0);
		$pdf->Cell(58,5,"$victimpnum",0,0);
		
		$pdf->Cell(35,5,"VictimLastSeen:",0,0);
		$pdf->Cell(58,5,"$victimvpseen",0,1);
		
		$pdf->Cell(55,5,"Relation to Suspect:",0,0);
		$pdf->Cell(58,5,"$victimrsus",0,0);
		
		$pdf->Cell(35,5,"VictimEducational:",0,0);
		$pdf->Cell(58,5,"$victimveduc",0,1);
		
	
	    $suspectfname = $suspect['Firstname'];
		$suspectlname = $suspect['Lastname'];
		$suspectmname = $suspect['Middlename'];
		$suspectquali = $suspect['Qualifier'];
		$suspectalias = $suspect['Alias'];
		$suspectcship = $suspect['Citizenship'];
		$suspectcstats = $suspect['CivilStatus'];
		$suspectprov = $suspect['Province'];
		$suspectcity = $suspect['City'];
		$suspectstreet = $suspect['Street'];
		$suspectbarangay = $suspect['Barangay'];
		$suspectlati = $suspect['Latitude'];
		$suspectlong = $suspect['Longitude'];
		$suspecthnum = $suspect['HomePhoneNumber'];
		$suspectmnum = $suspect['MobileNumber'];
		$suspecteadd = $suspect['EmailAddress'];
		$suspectbdate = $suspect['Birthdate'];
		$suspectbplace = $suspect['Birthplace'];
		$suspectgender = $suspect['Gender'];
		$suspectage = $suspect['Age'];
		$suspecteduc = $suspect['EducationalAttainment'];
		$suspectssta = $suspect['Status'];
		$suspectdegr = $suspect['DegreeOfParticipation'];
		$suspectccrime = $suspect['CategoryOfCrime'];
		$suspectsplace = $suspect['SchoolAddress'];
		$suspectsstatus = $suspect['CivilStatus'];
		$suspectsoccu = $suspect['Occupation'];
		$suspectsrevic = $suspect['RelationToVictim'];
		$suspectsmotive = $suspect['SuspectMotive'];
		$suspectsomotive = $suspect['SuspectOtherMotive'];
		$suspectmarks = $suspect['Marks'];
		$suspecthairc = $suspect['HairColor'];
		$suspecteyec = $suspect['EyeColor'];
		$suspectheight = $suspect['Height'];
		$suspectweight = $suspect['Weight'];
		$suspectdrugs= $suspect['UnderTheInfluence'];
		$suspectothers= $suspect['Others'];
		$suspectsmother = $suspect['SuspectMothersName'];
		$suspectsmotherc = $suspect['MothersCivilStatus'];
		$suspectsmothero = $suspect['MothersOccupation'];
		$suspectsfather = $suspect['SuspectFathersName'];
		$suspectsfatherc = $suspect['FathersCivilStatus'];
		$suspectsfathero = $suspect['FathersOccupation'];
		$suspectsguardian = $suspect['SuspectGuardiansName'];
		$suspectsguardianc = $suspect['GuardiansCivilStatus'];
		$suspectsguardiano = $suspect['GuardiansOccupation'];
		
		
		
		
		$pdf->Cell(190,8,"SUSPECT",1,1,"C");
	
		$pdf->Cell(55,5,"Status:",0,0);
		$pdf->Cell(58,5,"$suspectssta",0,0);
		
		$pdf->Cell(35,5,"Barangay:",0,0);
		$pdf->Cell(58,5,"$suspectbarangay",0,1);
		
		$pdf->Cell(55,5,"Degree of Participation:",0,0);
		$pdf->Cell(58,5,"$suspectdegr",0,0);
		
		$pdf->Cell(35,5,"Latitude:",0,0);
		$pdf->Cell(58,5,"$suspectlati",0,1);
		
		$pdf->Cell(55,5,"Category of Crime:",0,0);
		$pdf->Cell(58,5,"$suspectccrime",0,0);
		
		$pdf->Cell(35,5,"Longtitude:",0,0);
		$pdf->Cell(58,5,"$suspectlong",0,1);
		
		
		$pdf->Cell(55,5,"First Name:",0,0);
		$pdf->Cell(58,5,"$suspectfname",0,0);
		
		
		
		$pdf->Cell(35,5,"HomeNumber:",0,0);
		$pdf->Cell(58,5,"$suspecthnum",0,1);
		
		$pdf->Cell(55,5,"Middlename:",0,0);
		$pdf->Cell(58,5,"$suspectmname",0,0);
		
		$pdf->Cell(35,5,"MobileNumber:",0,0);
		$pdf->Cell(58,5,"$suspectmnum",0,1);
		
		$pdf->Cell(55,5,"Lastname:",0,0);
		$pdf->Cell(58,5,"$suspectlname",0,0);
		
		
		$pdf->Cell(35,5,"EmailAddress:",0,0);
		$pdf->Cell(58,5,"$suspecteadd",0,1);
		
		$pdf->Cell(55,5,"Qualifies:",0,0);
		$pdf->Cell(58,5,"$suspectquali",0,0);
		
		$pdf->Cell(35,5,"Birthdate:",0,0);
		$pdf->Cell(58,5,"$suspectbdate",0,1);
		
		$pdf->Cell(55,5,"Alias:",0,0);
		$pdf->Cell(58,5,"$suspectalias",0,0);
		
		
		$pdf->Cell(35,5,"Birthplace:",0,0);
		$pdf->Cell(58,5,"$suspectbplace",0,1);
		
		$pdf->Cell(55,5,"Citizenship:",0,0);
		$pdf->Cell(58,5,"$suspectcship",0,0);
		
		$pdf->Cell(35,5,"Gender:",0,0);
		$pdf->Cell(58,5,"$suspectgender",0,1);
		
		
		$pdf->Cell(55,5,"Civilstatus:",0,0);
		$pdf->Cell(58,5,"$suspectcstats",0,0);
		
		
		$pdf->Cell(35,5,"Age:",0,0);
		$pdf->Cell(58,5,"$suspectage",0,1);
		
		$pdf->Cell(55,5,"Province:",0,0);
		$pdf->Cell(58,5,"$suspectprov",0,1);
		
		$pdf->Cell(55,5,"City:",0,0);
		$pdf->Cell(58,5,"$suspectcity",0,1);
		
		$pdf->Cell(55,5,"Street:",0,0);
		$pdf->Cell(58,5,"$suspectstreet",0,1);
		
		
		
		$pdf->Cell(190,10,"Other Information",0,1,"C");
		
		$pdf->Cell(55,5,"Educational Attainment:",0,0);
		$pdf->Cell(58,5,"$suspecteduc",0,0);
		
		$pdf->Cell(40,5,"Suspect Mother name:",0,0);
		$pdf->Cell(58,5,"$suspectsmother",0,1);
		
		$pdf->Cell(55,5,"School Address:",0,0);
		$pdf->Cell(58,5,"$suspectsplace",0,0);
		
		
		$pdf->Cell(40,5,"Mother Civilstatus:",0,0);
		$pdf->Cell(58,5,"$suspectsmotherc",0,1);
		
		$pdf->Cell(55,5,"Civilstatus:",0,0);
		$pdf->Cell(58,5,"$suspectsstatus",0,0);
		
		$pdf->Cell(40,5,"Mother Occupation:",0,0);
		$pdf->Cell(58,5,"$suspectsmothero",0,1);
		
		
		$pdf->Cell(55,5,"Occupation:",0,0);
		$pdf->Cell(58,5,"$suspectsoccu",0,0);
		
		$pdf->Cell(40,5,"Suspect Father name:",0,0);
		$pdf->Cell(58,5,"$suspectsfather",0,1);
		
		$pdf->Cell(55,5,"Relation to Victim:",0,0);
		$pdf->Cell(58,5,"$suspectsrevic",0,0);
		
		$pdf->Cell(40,5,"Father Civilstatus:",0,0);
		$pdf->Cell(58,5,"$suspectsfatherc",0,1);
		
		$pdf->Cell(55,5,"Suspect Motive:",0,0);
		$pdf->Cell(58,5,"$suspectsmotive",0,0);
			
		$pdf->Cell(40,5,"Father Occupation:",0,0);
		$pdf->Cell(58,5,"$suspectsfathero",0,1);
		
		$pdf->Cell(55,5,"Suspect Other Motive:",0,0);
		$pdf->Cell(58,5,"$suspectsomotive",0,0);
		
		
		$pdf->Cell(40,5,"Suspect Guardian:",0,0);
		$pdf->Cell(58,5,"$suspectsguardian",0,1);
		
		$pdf->Cell(55,5,"Marks:",0,0);
		$pdf->Cell(58,5,"$suspectmarks",0,0);
		
			$pdf->Cell(40,5,"Guardian Civilstatus:",0,0);
		$pdf->Cell(58,5,"$suspectsguardianc",0,1);
		
		$pdf->Cell(55,5,"Hair Color:",0,0);
		$pdf->Cell(58,5,"$suspecthairc",0,0);
		
		
		$pdf->Cell(40,5,"Guardian Occupation:",0,0);
		$pdf->Cell(58,5,"$suspectsguardiano",0,1);
		
		
		$pdf->Cell(55,5,"EyeColor:",0,0);
		$pdf->Cell(58,5,"$suspecteyec",0,1);
		
		$pdf->Cell(55,5,"Height:",0,0);
		$pdf->Cell(58,5,"$suspectheight",0,1);
		
		$pdf->Cell(55,5,"Weight:",0,0);
		$pdf->Cell(58,5,"$suspectweight",0,1);
		
		$pdf->Cell(55,5,"Under the influence of?",0,0);
		$pdf->Cell(58,5,"$suspectdrugs",0,1);
		
		$pdf->Cell(55,5,"Other:",0,0);
		$pdf->Cell(58,5,"$suspectothers",0,1);
		

    $bnumberh = $casedetail['BlotterENumber'];
		$cthreatgh = $casedetail['CTG'];
		$ccrimeh = $casedetail['COC'];
		$dateh = $casedetail['DateCommited'];
		$timeh = $casedetail['TimeCommited'];
		$cprovinceh = $casedetail['Province'];
		$cityh = $casedetail['Municipality'];
		$streeth = $casedetail['Street'];
		$barangayh = $casedetail['Barangay'];
		$pplaceh = $casedetail['IsItPrivatePlace'];
		$identih = $casedetail['CrimeIdentifier'];
		$statsh = $casedetail['CaseStatus'];
		$narrativeh = $casedetail['Narrative'];
		$acrimeh = $casedetail['Itiscrime'];
		$refh = $casedetail['IsItRefferedBy'];
		$reffh = $casedetail['IsItRefferedTo'];
		$intenth = $casedetail['Intention'];
		$motiveh = $casedetail['Motive'];
		$weaponsh = $casedetail['Weapons'];
		
		
		
		$pdf->Cell(190,8,"Case Details",1,1,"C");
	
		$pdf->Cell(55,5,"Blotter Entry Number:",0,0);
		$pdf->Cell(40,5,"$bnumberh",0,0);
		
		$pdf->Cell(63,5,"Commited by Threat Groups(CTG):",0,0);
		$pdf->Cell(58,5,"$cthreatgh",0,1);
		
		$pdf->Cell(55,5,"Category of Crime:",0,0);
		$pdf->Cell(58,5,"$ccrimeh",0,1);
		
		$pdf->Cell(55,5,"Date Commited:",0,0);
		$pdf->Cell(58,5,"$dateh",0,1);
		
		$pdf->Cell(55,5,"Time Commited:",0,0);
		$pdf->Cell(58,5,"$timeh",0,1);
		
		$pdf->Line(10, 125, 200,125);
		$pdf->Cell(190,10,"Place of Commision",0,1,"C");
		
		$pdf->Cell(55,5,"Province:",0,0);
		$pdf->Cell(58,5,"$cprovinceh",0,1);
		
		$pdf->Cell(55,5,"City/Municipality:",0,0);
		$pdf->Cell(58,5,"$cityh",0,1);
		
		$pdf->Cell(55,5,"House Number/ Street Name:",0,0);
		$pdf->Cell(58,5,"$streeth",0,1);
		
		$pdf->Cell(55,5,"Barangay:",0,0);
		$pdf->Cell(58,5,"$barangayh",0,1);
		
		$pdf->Cell(55,5,"Is it a private place?:",0,0);
		$pdf->Cell(58,5,"$pplaceh",0,1);
		
		$pdf->Cell(55,5,"Crime Identifier:",0,0);
		$pdf->Cell(58,5,"$identih",0,1);
		
		$pdf->Cell(55,5,"Case Status:",0,0);
		$pdf->Cell(58,5,"$statsh",0,1);
		
		$pdf->Cell(55,5,"Narrative:",0,0);
		$pdf->Cell(58,5,"$narrativeh",0,1);
		
		$pdf->Cell(55,5,"Is it a crime?:",0,0);
		$pdf->Cell(58,5,"$acrimeh",0,1);
		
		$pdf->Cell(55,5,"Is it reffered by barangay?:",0,0);
		$pdf->Cell(58,5,"$refh",0,1);
		
		$pdf->Cell(55,5,"Is it referred to barangay?:",0,0);
		$pdf->Cell(58,5,"$reffh",0,1);
		
		$pdf->Cell(55,5,"Intention:",0,0);
		$pdf->Cell(58,5,"$intenth",0,1);
		
		$pdf->Cell(55,5,"Motive:",0,0);
		$pdf->Cell(58,5,"$motiveh",0,1);
		
		$pdf->Cell(55,5,"Weapons:",0,0);
		$pdf->Cell(58,5,"$weaponsh",0,1);
	
	$pdf->Output();


        }

    }
    }

}


