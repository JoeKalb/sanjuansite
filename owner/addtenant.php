<?php 
	if(isset($_POST['submit'])){
		echo "Hello";
		header('Location: dashboard.php');
	}
?>
<?php include('../includes/ownerHeader.php'); ?>
	<h1 class="title">Create Tenant</h1>
	<div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<div class="columns">
				<div class="column">
					<label class="label">First Name</label>
					<input type="number" class="input" Placeholder="John">
				</div>
				<div class="column">
					<label class="label">Last Name</label>
					<input type="number" class="input" Placeholder="Doe">
				</div>
				<div class="column">
					<label class="label">Area Code</label>
					<input type="number" pattern=".[0-9]" class="input" placeholder="555">
				</div>
				<div class="column">
					<label class="label">Phone Number</label>
					<input type="number" pattern=".[0-9]" class="input" placeholder="8676309">
				</div>
				<div class="column">
					<label class="label">Apartment</label>
					<div class="select">
						<select name="" id="">
							<option value="">List of Appartments</option>
						</select>
					</div>
				</div>
			</div>
			<input type="submit" name="submit" value="Submit" class="button is-large is-success" >
		</form>
	</div>
<?php include('../includes/ownerFooter.php'); ?>