<?php 
	require('../config/config.php');
	require('../config/db.php');
	function getOwner($dbh) {
		$sql = 'SELECT * FROM owners';
		foreach ($dbh->query($sql) as $row){
			
		}
	}
	getOwner($dbh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../styles/ownerStyle.css">
	<title>Owner Dashboard</title>
</head>
<body>
	<div class="wrapper">
		<div class="column">
			<h3>Receipts</h3>
			<a href="<?php echo ROOT_URL; ?>owner/addreceipt.php">Create Receipts</a>
			<table>
				<th>Name</th>
				<th>Amount Paid</th>
			</table>
		</div>
		<div class="column">
			<h3>Tenents</h3>
			<a href="<?php echo ROOT_URL; ?>owner/addtenent.php">Create Tenents</a>
			<table>
				<th>Name</th>
				<th>Monthly Balance</th>
			</table>
		</div>
		<div class="column">
			<h3>Apartment</h3>
			<a href="<?php echo ROOT_URL; ?>owner/addapartment.php">Create Apartments</a>
			<table>
				<th>Location</th>
				<th>Current Rent</th>
			</table>
		</div>
	</div>
</body>
</html>