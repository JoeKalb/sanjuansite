<?php 
	require('../config/config.php');
	require('../config/db.php');
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.css">
	<link rel="stylesheet" href="../styles/ownerStyle.css">
	<title>Owner Dashboard</title>
</head>
<body>
	<h1 class="title is-4">Welcome <?php echo $_COOKIE['firstname']; ?> <?php echo $_COOKIE['lastname']; ?>
		<a class="button is-danger" href="">LogOut</a>
	</h1>
	<div class="columns is-centered">
		<div class="column">
			<h2 class="subtitle">Receipts
				<a class="button is-primary is-small" href="<?php echo ROOT_URL; ?>owner/addreceipt.php">+</a>
			</h2>
			<table class="table">
				<th>Name</th>
				<th>Paid</th>
				<th>Date</th>
			</table>
		</div>
		<div class="column">
			<h2 class="subtitle">Tenents
				<a class="button is-primary is-small" href="<?php echo ROOT_URL; ?>owner/addtenent.php">+</a>
			</h2>
			<table class="table">
				<th>Name</th>
				<th>Monthly Balance</th>
			</table>
		</div>
		<div class="column">
			<h2 class="subtitle">Apartment
				<a class="button is-primary is-small" href="<?php echo ROOT_URL; ?>owner/addapartment.php">+</a>
			</h2>
			<table class="table">
				<th>Location</th>
				<th>Current Rent</th>
			</table>
		</div>
	</div>
</body>
</html>