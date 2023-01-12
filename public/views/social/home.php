<!DOCTYPE html>
<head>    
</head>

<body>
<style type="text/css">
	th, tr, td{
		border-collapse: collapse;
		border-spacing: 0;
		border: 1px solid #000;
		padding: 5px;
	}
	table{
		display: flex;
		flex-direction: column;
		text-align: left;
		color: #000; 
		width: fit-content;
		height: auto;
		background-color: #f5f2ec;
		margin-top: 20px;
		padding: 20px 25px;
		border-radius: 10px;
	}
</style>
	<form action="/" method="POST">
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname"><br>
	  <label for="limit">Last name:</label><br>
	  <input type="text" id="lname" name="limit">
	  <input type="submit" value="Submit">
	</form>

	<h1>I am Home-view</h1>
	<h2>simple Select</h2>
	<div class="block_table">
		<?php
		echo '<table>';
		echo '<tr>';
		for ($i=0; $i < 1; $i++) { 
			foreach($newKey as $key => $value){
				foreach($value as $key2 => $value2){
					echo'<th>'. $key2 .'</th>';
				}	
					break;
				}
			}
		echo '</tr>';
		foreach($newKey as $key => $value){
			echo '<tr>';
				if(!is_array($value)){
					echo'<td>'. $value .'</td>';
				}
				foreach($value as $key2 => $value2){
					echo'<th>'. $value2 .'</th>';
				}
		}
		echo '</tr>';
		echo '</table>';

		?>
	</div>


	<h2>Select + LIMIT</h2>
	<div class="block_table">
		<?php
		echo '<table>';
		echo '<tr>';
		for ($i=0; $i < 1; $i++) { 
			foreach($newKey2 as $key => $value){
				foreach($value as $key2 => $value2){
					echo'<th>'. $key2 .'</th>';
				}	
					break;
				}
			}
		echo '</tr>';
		foreach($newKey2 as $key => $value){
			echo '<tr>';
				if(!is_array($value)){
					echo'<td>'. $value .'</td>';
				}
				foreach($value as $key2 => $value2){
					echo'<th>'. $value2 .'</th>';
				}
		}
		echo '</tr>';
		echo '</table>';

		?>
	</div>

	<h2>Select + GROUP BY</h2>
	<div class="block_table">
		<?php
		echo '<table>';
		echo '<tr>';
		for ($i=0; $i < 1; $i++) { 
			foreach($newKey3 as $key => $value){
				foreach($value as $key2 => $value2){
					echo'<th>'. $key2 .'</th>';
				}	
					break;
				}
			}
		echo '</tr>';
		foreach($newKey3 as $key => $value){
			echo '<tr>';
				if(!is_array($value)){
					echo'<td>'. $value .'</td>';
				}
				foreach($value as $key2 => $value2){
					echo'<th>'. $value2 .'</th>';
				}
		}
		echo '</tr>';
		echo '</table>';

		?>
	</div>

	<h2>Select + ORDER BY</h2>
	<div class="block_table">
		<?php
		echo '<table>';
		echo '<tr>';
		for ($i=0; $i < 1; $i++) { 
			foreach($newKey4 as $key => $value){
				foreach($value as $key2 => $value2){
					echo'<th>'. $key2 .'</th>';
				}	
					break;
				}
			}
		echo '</tr>';
		foreach($newKey4 as $key => $value){
			echo '<tr>';
				if(!is_array($value)){
					echo'<td>'. $value .'</td>';
				}
				foreach($value as $key2 => $value2){
					echo'<th>'. $value2 .'</th>';
				}
		}
		echo '</tr>';
		echo '</table>';

		?>
	</div>

	<h2>Select + LEFT JOIN</h2>
	<div class="block_table">
		<?php
		echo '<table>';
		echo '<tr>';
		for ($i=0; $i < 1; $i++) { 
			foreach($newKey5 as $key => $value){
				foreach($value as $key2 => $value2){
					echo'<th>'. $key2 .'</th>';
				}	
					break;
				}
			}
		echo '</tr>';
		foreach($newKey5 as $key => $value){
			echo '<tr>';
				if(!is_array($value)){
					echo'<td>'. $value .'</td>';
				}
				foreach($value as $key2 => $value2){
					echo'<th>'. $value2 .'</th>';
				}
		}
		echo '</tr>';
		echo '</table>';

		?>
	</div>
</body>

</html>