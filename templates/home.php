<?php
session_start();
require '../includes/common.php';
$home_q = "SELECT * FROM details WHERE reg_em = '{$_SESSION['email']}'";
$home_q_res = mysqli_query($con, $home_q) or die(mysqli_error($con));
$users_q = "SELECT name FROM users WHERE email = '{$_SESSION['email']}'";
$users_q_res = mysqli_query($con, $users_q) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>Home Page</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header.php';
	?>
	<?php
	if (mysqli_num_rows($home_q_res) == 0)
	{
	?>
	<center><h1 style="margin-top: 40px; margin-left: 60px;">You have not added your details yet.</h1></center>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="panel panel-default" style="height: 200px; margin-top: 100px;">
					<div class="panel-body">
						<center style="margin-top: 25%;">
						<a href="details.php"><span class="glyphicon glyphicon-plus-sign"></span>Add your details.</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	} else {
	?>
	<center><h1 style="margin-top: 40px; margin-left: 60px;">Your details</h1></center>
	<br><br><br>
	<div class="container">
		<?php
		$name = mysqli_fetch_array($users_q_res);
		$row = mysqli_fetch_array($home_q_res);
		?>
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-5">
									<center>
									<p style="text-align: left; font-size: 30px;"><?php echo $name['name']; ?></p>
									</center>
								</div>
							</div>
						</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-3">
								<b>Course:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p style="text-transform:uppercase;"><?php echo $row['course'] ?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Year:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['year']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>State:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['state']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>City:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['city']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>High School:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['tenth_school']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>High School Result:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['tenth_result']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Intermediate School:</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['twelfth_school']?></p></center>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Intermediate Result</b>
							</div>
							<div class="col-xs-4 col-xs-offset-5">
								<center><p><?php echo $row['twelfth_result']?></p></center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
	?><br><br><br><br>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>
