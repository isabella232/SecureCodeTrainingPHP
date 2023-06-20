<!DOCTYPE html>
<html lang="en">

<head>
	<title>Buffer Overflow</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		body {
			padding-top: 50px;
		}

		.container {
			max-width: 500px;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="text-center mb-4">Buffer Overflow</h1>
		<div class="card">
			<div class="card-body">
				<?php
				$roles = array("Admin", "Manager", "User");
				?>
				<h3>User Roles in the array are:</h3>
				<br>
				<ul>
					<li><?php echo $roles[0]; ?></li>
					<li><?php echo $roles[1]; ?></li>
					<li><?php echo $roles[2]; ?></li>
					<li><?php echo $roles[3]; ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>