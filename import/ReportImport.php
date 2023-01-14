<?php

namespace import;

class ReportImport implements iImport
{
    public $connectBD;
    public function __construct()
    {
        $server = "localhost";
        $user = "root";
        $password = "";
        $db = "arraybase";
        $this->connectBD = mysqli_connect($server , $user , $password, $db) or die("Ошибка: " . mysqli_connect_error());
    }
	
    public function dataInsert(array $data)
    {
    $sql = "SELECT * FROM arraytable";
    if($result = mysqli_query($this->connectBD, $sql)){
    	$rowsCount = mysqli_num_rows($result); // количество полученных строк
    	echo "<p>Получено объектов: $rowsCount</p>";
		// Вывести асоциативный масив в таблицу на html, выводит данные в виде таблицы
   		echo '<table>'; 
			echo '<tr>';
			for ($i=0; $i < 1; $i++) { 
				foreach($result as $key => $value){
					foreach($value as $key2 => $value2){
						echo'<th>'. $key2 .'</th>';
					}	
						break;
					}
				}
			echo '</tr>';
			foreach($result as $key => $value){
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
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($this->connectBD);
}
mysqli_close($this->connectBD);
    }
}

