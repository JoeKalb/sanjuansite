<?php require('config/config.php'); ?>
<?php include('includes/header.php'); ?>
<div class="jumbotron">
	<div class="container">
		<h3>Billing</h3>
		<p>This will have something about looking up your bill and having directions on how it will sent a code to confirm if you are the one looking at your bill.</p>
		<h5>Enter Phone Number: </h5>
		<form action="">
			<div id="phoneNumberInputs">
				<p>+1</p>
				<input type="text" placeholder="(949)">
				<p>-</p>
				<input type="text" placeholder="875">
				<p>-</p>
				<input type="text" placeholder="5486">
			</div>
			<br>
			<button type="button" class="btn btn-success btn-block" disabled>Submit</button>
		</form>
	</div>
</div>

<?php include('includes/footer.php'); ?>