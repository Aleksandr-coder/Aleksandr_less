<!DOCTYPE html>
<head> 
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
		a{
			display: inline-block;
			height: 20px;
			padding: 10px;
			border: 1px solid #ccc;
			background: #f9ead7;
			color: #000;
			text-decoration: none;
			transition: all .3s;
			border-radius: 5px;
		}
		a:hover{
			background: #f29c2f;
			transition: all .3s;
		}
	</style>   
</head>
<body>
	<h1>I am Home-view</h1>
	<a href="/registry">Registration Users</a>
	<a href="/gallery">gallery</a>
	<a href="/users">user</a>
	<a href="/admin">admin</a>
	<a href="/about">about</a>
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
</body>

</html>