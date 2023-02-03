<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using PHP/MySQLi with DataTable and PDF Generator using TCPDF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						 
                            <th>Crime</th>
                            <th>Month</th>
                            <th>Year</th>
                            <th>Total</th>
					</thead>
					<tbody>


						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT CRIME_COMMITTED, MONTH, YEAR, COUNT(CRIME_COMMITTED) AS TOTAL FROM clean_data WHERE CRIME_COMMITTED != 'OTHER CRIM' GROUP BY CRIME_COMMITTED ORDER BY TOTAL DESC";

							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){

								 $crimes = $row['CRIME_COMMITTED'];
                                $month = $row['MONTH'];
                                $year = $row['YEAR'];
                                $total = $row['TOTAL'];
                            

								echo 
								"<tr>
								
									<td>".$crimes."</td>
									<td>".$month."</td>
									<td>".$year."</td>
									<td>".$total."</td>
									
								</tr>";
								
							}
					
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>