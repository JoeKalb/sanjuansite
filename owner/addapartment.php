<?php 
	if(isset($_POST['submit'])){
		echo "Hello";
	}
?>
<?php include('../includes/ownerHeader.php'); ?>
	<h1 class="title">Create Apartment</h1>
	<div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<div class="columns" >
				<div class="column">
					<label class="label">Street Number</label>
					<input class="input" type="number">
				</div>
				<div class="column">
					<label class="label">Street Name</label>
					<input class="input" type="text">
				</div>
				<div class="column">
					<label class="label">City</label>
					<input class="input" type="text">
				</div>
				<div class="column">
					<label class="label">Zip Code</label>
					<input class="input" type="text">
				</div>
			</div>
			<input type="submit" name="submit" value="Submit" class="button is-large is-success" >
		</form>
	</div>
<?php include('../includes/ownerFooter.php'); ?>