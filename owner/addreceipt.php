<?php 
	if(isset($_POST['submit'])){
		$tenantId = htmlentities($_POST['tenant']);
		$paid = htmlentities($_POST['paid']);
		echo $tenantId.'<br/>';
		echo $paid;
	}
?>
<?php include('../includes/ownerHeader.php'); ?>
	<h1 class="title">Create Receipt</h1>
	<div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
			<div class="columns">
				<div class="column">
					<label class="label">Tenant</label>
					<div class="select">
						<select name="tenant" id="">
							<option value="1">Name's of Tenants</option>
						</select>
					</div>
				</div>
				<div class="column">
					<label class="label">Amount Paid</label>
					<input type="number" pattern=".[0-9]" class="input" placeholder="1500.00" name="paid">
				</div>
			</div>
			<input type="submit" name="submit" value="Submit" class="button is-large is-success" >
		</form>
	</div>
<?php include('../includes/ownerFooter.php'); ?>