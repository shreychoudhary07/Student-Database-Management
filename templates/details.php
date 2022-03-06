<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>Student Details</title>
</head>
<body class="bg-color">
	<?php
	session_start();
	include '../includes/header.php';
	?>
	<div class="container" style="margin-bottom:10px">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="panel">
					<div class="panel-body">
						<form method="POST" action="details_script.php">
						<h2>General</h2>
						<b>Course</b>
						<div class="form-group">
							<input type="text" name="course" class="form-control" placeholder="Enter your course." required>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<b>Year</b>
								<div class="form-group">
									<input type="number" name="year" class="form-control" min="1" max="6" placeholder="Enter your year." required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<b>State</b>
								<div class="form-group">
									<input type="text" name="state" class="form-control" required placeholder="Enter the state you belong to.">
								</div>
							</div>
						</div>
						<b>City</b>
						<div class="form-group">
							<input type="text" name="city" class="form-control" required placeholder="Enter your hometown.">
						</div>
						<h2>Academic Details</h2><hr style="height:4px;border-width:0;color:gray;background-color:black">
						<h3>High School Details</h3>
						<b>School Name</b>
						<div class="form-group">
							<input type="text" name="tenth_school" class="form-control" required placeholder="Enter your high school name.">
						</div>
						<b>Result</b>
						<div class="form-group">
							<input type="text" name="tenth_result" class="form-control" required placeholder="Enter your high school percentage.">
						</div>
						<h3>Intermediate Details</h3>
						<b>School Name</b>
						<div class="form-group">
							<input type="text" name="twelfth_school" class="form-control" required placeholder="Enter your high school name.">
						</div>
						<b>Result</b>
						<div class="form-group">
							<input type="text" name="twelfth_result" class="form-control" required placeholder="Enter your high school percentage.">
						</div>
						<button class="btn btn-success btn-block" style="background: #1e6f72; color: white;">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<br><br>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>
