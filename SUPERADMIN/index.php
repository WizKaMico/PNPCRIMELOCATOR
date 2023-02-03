
<?php 

include('../connection/connection.php');
include('../connection/session.php'); 
 
$result=mysqli_query($con, "select * from users where UserID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
 

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="form-wrapper" style="background-color:WHITE;">
 
  <form action="../action/verified_admin.php" method="post">
    <center><img src="../logo/PNPLOG.png" style="width:30%;"></center>
    <h5 style="color:black; text-align:center;">WELCOME! <?PHP echo strtoupper($row['Username']); ?></h5>
    <div class="form-item">
    <input type="hidden" name="email" value="<?php echo $row['email']; ?>" readonly>
    <input type="hidden" name="UserID" value="<?php echo $row['UserID']; ?>" readonly>    
		<input type="text" name="code" required="required" placeholder="ENTER VERIF. CODE" style="color:black;" style="border:1px solid black;" autofocus required></input>
    </div>
 
 
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="VERIFY CODE"></input>
    </div>
  </form>
 
 
</div>
 
</body>
</html>



<style type="text/css">
  

body {
  color: #fff;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  background-color:#0d2944; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
 
 
 
.form-wrapper {
width:300px;
height:370px;
  position: absolute;
  top: 50%;
  left: 48%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,0,0,0.27);
  padding: 15px 25px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
}
 
.form-item {
width:100%;
}
 
 
h3{
  font-size: 25px;
  font-weight: 640;
  margin-bottom: 10px;
  color: #e7e7e7;
  padding:6px;
  font-family:'sans-serif','helvetica';
}
 
 
 
.form-item input{
  border: none;
  background:transparent;
  color: #fff;
  margin-top:11px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  height: 49px;
  padding: 0 16px;
  width: 100%;
  padding-left: 55px;
 
}
input[type='password']{
  background: transparent url("img/pass.jpg") no-repeat;
  background-position: 10px 50%;
}
input[type='text']{
  background: transparent url("img/user.jpg") no-repeat;
  background-position: 10px 50%;
 
}
 
.form-item input:focus {
  outline: none;
  border:1.4px solid #cfecf0;
}
 
.button-panel {
  margin-bottom: 20px;
  padding-top: 10px;
  width: 100%;
}
 
.button-panel .button {
  background: #00b6df;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'helvetica','Open Sans', sans-serif;
  font-size: 1.2em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.6s linear;
  width: 100%;
  margin-top:10px;
}
 
.button:hover {
  background: #6eb7cb;
}
 
.form-item input, .button-panel .button {
  border-radius: 2px
}
 
.reminder {
  text-align: center;
}
 
.reminder a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}
 
.reminder a:hover {
  color: #cab6bf;
}


</style>