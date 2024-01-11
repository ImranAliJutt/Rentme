<?php 
if(isset($_POST["Submit_address"])){
	echo "oks";
	$address = $_POST['address'];
	?>
	<iframe width="50%" height="500" src="https://maps.google.com/maps?q=<?php echo urlencode($address); ?>&output=embed"></iframe>
	<?php
}
?>
<form method="POST">
	<p>
		<input type="text" name="address" placeholder="Enter Address">
	</p>
	<input type="submit" name="Submit_address">
</form>