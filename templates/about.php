<?php
require '../includes/common.php';
session_start();
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
	<title>About Us</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header.php';
	?><br><br><br><br><br><br>
	<div class="container">
	<div class="row">
		<div class="container-fluid">
			<div class="col-xs-6">
				<h1>Who are we?</h1>
				<p>With the vision of providing quality education to all, Graphic Era Deemed To Be University is an institution located in Dehradun, Uttarakhand with it's branches in Bhimtal and NainiTal too.<br>We are here to impart you with the best quality education you can ever dream of.</p><br>
				<h1>Contact Us</h1>
				<p><b>Email: </b><a href="mailto:admissions@geu.ac.in">admissions@geu.ac.in</a></p>
				<p><b>Phone: </b> 9988776655</p>
			</div>
			<div class="col-xs-6">
				<h1>Why chose us?</h1>
				<p>With the best placements opportunities in the state, come join our institution for a better future.</p>
			</div>
	</div>
	</div><br>
	</div>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>
