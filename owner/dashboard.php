<?php 
	require('../config/config.php');
	require('../config/db.php');
	
	if(isset($_GET['logout'])){
		if(isset($_SERVER['HTTP_COOKIE'])){
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie){
				$parts = explode('=', $cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
			}
		}
		header('Location: index.php');
	}

	if(!isset($_SERVER['HTTP_COOKIE'])){
		header('Location: index.php');
	}
?>
<?php include('../includes/ownerHeader.php'); ?>
	<h1 class="title is-4">Welcome <?php echo $_COOKIE['firstname']; ?> <?php echo $_COOKIE['lastname']; ?>
		<a class="button is-danger" href="?logout">LogOut</a>
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
			<h2 class="subtitle">Tenants
				<a class="button is-primary is-small" href="<?php echo ROOT_URL; ?>owner/addtenant.php">+</a>
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
<?php include('../includes/ownerFooter.php') ?>