<!DOCTYPE html>
<head>    
</head>

<body>

	<form action="" method="GET">
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname"><br>
	  <label for="lname">Last name:</label><br>
	  <input type="text" id="lname" name="lname">
	  <input type="submit" value="Submit">
	</form>

	<h1>I am Gallery-view</h1>
	<?php foreach ($newKey as $key => $value) : ?>
	<?= $key ?>
	<br>
	<?=$value?>
	<br>
	<?php endforeach?>

</body>

</html>