<?php
    session_start();
    include_once('../../../connection/connection.php');

    if(isset($_POST['submit'])){
    
        $UserID = $_POST['UserID'];
        $OfficeStation = $_POST['OfficeStation']; 
        $Role = $_POST['Role'];
        $Email = $_POST['Email'];
        $WCPC = $_POST['WCPC'];
        $Status = $_POST['Status'];
        $LastLogin = $_POST['LastLogin'];
        $LatestLogin = $_POST['LatestLogin'];
        $Rank = $_POST['Rank'];
        $ChiefOfPolice = $_POST['ChiefOfPolice'];
        $Address = $_POST['Address'];
        $Telephone = $_POST['Telephone'];
        $Cellphone = $_POST['Cellphone'];
        $Location = $_POST['Location'];     



        $sql = "UPDATE users LEFT JOIN userdetails ON users.UserID = userdetails.UserID SET  OfficeStation = '$OfficeStation', Role = '$Role', Email = '$Email', WCPC = '$WCPC',Status = '$Status', LastLogin = '$LastLogin', LatestLogin = '$LatestLogin', Rank = '$Rank', ChiefOfPolice = '$ChiefOfPolice', Address = '$Address', Telephone = '$Telephone', Cellphone = '$Cellphone', Location = '$Location' WHERE users.UserID='$UserID'";


        //use for MySQLi OOP
        if($con->query($sql)){
            $_SESSION['success'] = 'updated successfully';
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

    header('location: ../index.php?view=SETTINGS');

?>