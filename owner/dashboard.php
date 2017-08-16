<?php 
	require('../config/config.php');
	require('../config/db.php');
	function getOwner($dbh) {
		$sql = 'SELECT * FROM owners';
		foreach ($dbh->query($sql) as $row){
			print $row['id'] . "\t";
			print $row['firstname'] . "\t";
			print $row['lastname'] . "\t";
			print $row['areacode'] . "\t";
			print $row['phonenumber'] . "\t";
			print $row['email'] . "\n";
		}
	}
	getOwner($dbh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Owner Dashboard</title>
</head>
<body>
	<div>
		<h3>Receipts</h3>
		<button>Create Receipts</button>
	</div>
	<div>
		<h3>Tenents</h3>
		<button>Create Tenents</button>
	</div>
	<div>
		<h3>Apartment</h3>
		<button>Create Apartments</button>
	</div>
</body>
</html>