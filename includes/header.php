<div class="navbar navbar-inverse navbar-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php
				if (session_id() == "")
				{ session_start(); }
				if (isset($_SESSION['email']))
				{
			?>
				<a class="navbar-brand" href="home.php">Moodle</a>
			<?php
				}
				else
				{
			?>
				<a class="navbar-brand" href="index.php">Moodle</a>
			<?php
				}
			?>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
				<?php
				if (isset($_SESSION['email']))
				{
				?>
				<li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
				<li><a href="changepassword.php"><span class="glyphicon glyphicon-cog"></span>Change Password</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
				<?php
				}
				else
				{
				?>
				<li><a href="../templates/about.php"><span class="glyphicon glyphicon-info-sign"></span>About Us</a></li>
				<li><a href="../templates/signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
				<li><a href="../templates/login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
				<?php
				}
				?>
				</ul>
			</div>
	</div>
</div>
