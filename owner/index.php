<?php 
	require('../config/config.php');
	require('../config/db.php');
	if(isset($_POST['submit'])){
		$areaCode = htmlentities($_POST['areaCode']);
		$number = htmlentities($_POST['number']);
		$sql = "SELECT * FROM owners WHERE areacode={$areaCode} AND phonenumber={$number}";
		$user = findOwner($dbh, $sql);
		if(is_null($user)){
			echo 'User not found';
		}else{
			goToDash($user);
		}
	}

	function findOwner($conn, $queryValues){
		foreach ($conn->query($queryValues) as $user){
			return $user;
		}
	}
	function goToDash($owner){
		$time = time()+360000;
		setcookie('id', $owner['id'], $time);
		setcookie('firstname', $owner['firstname'], $time);
		setcookie('lastname', $owner['lastname'], $time);
		setcookie('areacode', $owner['areacode'], $time);
		setcookie('phonenumber', $owner['phonenumber'], $time);
		setcookie('email', $owner['email'], $time);

		header('Location: dashboard.php');
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