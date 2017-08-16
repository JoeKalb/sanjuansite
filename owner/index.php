<?php 
	require('../config/config.php');
	require('../config/db.php');
	if(isset($_POST['submit'])){
		$areaCode = htmlentities($_POST['areaCode']);
		$number = htmlentities($_POST['number']);
		echo $areaCode;
		echo $number;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../styles/ownerStyle.css">
	<title>Owners Portal</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<div class="form-control">
			<label for="">Area Code:</label>
			<input type="number" pattern="[0-9]" name="areaCode">
			<label for="">Number:</label>
			<input type="number" pattern="[0-9]" name="number">
		</div>
		<input type="submit" name="submit" value="Submit" >
	</form>
</body>
</html>