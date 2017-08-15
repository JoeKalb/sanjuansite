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
				<input class="inputs" type="number" placeholder="(949)" maxlength="3" onkeydown="limitText(this, 3);" onkeyup="limitText(this, 3)" id="areaCode">
				<input class="inputs" type="number" placeholder="555" maxlength="3" onkeydown="limitText(this, 3);" onkeyup="limitText(this, 3)" id="input2">
				<input class="inputs" type="number" placeholder="5555" maxlength="4" onkeydown="limitText(this, 4);" onkeyup="limitText(this, 4)" id="input3">
			</div>
			<br>
			<button type="button" class="btn btn-success btn-block" disabled id="submit">Submit</button>
		</form>
	</div>
</div>
<?php include('includes/quicklinks.php') ?>
<script>
	// limit input length and auto tab
	function limitText(limitField, limitNum){
		if (limitField.value.length > limitNum) {
			limitField.value = limitField.value.substring(0, limitNum);
		}
	}
	$(".inputs").keyup(function () {
	    if (this.value.length == this.maxLength) {
	      var $next = $(this).next('.inputs');
	      if ($next.length) {
	          $(this).next('.inputs').focus();
	      }
	      else {
	          $(this).blur();
	      }
	    }
	});


	let button = document.getElementById("submit");
	let areaCode = false;
	let input2 = false;
	let input3 = false;
	function changeDisable(){
		if (areaCode && input2 && input3) button.disabled = false;
	}
	

	document.getElementById("areaCode").addEventListener("keyup", function() {
		if (this.value.length == this.maxLength) {
			areaCode = true;
			changeDisable();
		}
	});

	document.getElementById("input2").addEventListener("keyup", function() {
		if (this.value.length == this.maxLength) {
			input2 = true;
			changeDisable();
		}
	});

	document.getElementById("input3").addEventListener("keyup", function() {
		if (this.value.length == this.maxLength) {
			input3 = true;
			changeDisable();
		}
	});

</script>
<?php include('includes/footer.php'); ?>
