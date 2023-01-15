<?php

namespace import;

class ReportImport implements iImport
{

    public function dataInsert(array $data)
    {
		// Вывести асоциативный масив в таблицу на html, выводит данные в виде таблицы
   		echo '<table>'; 
			echo '<tr>';
			for ($i=0; $i < 1; $i++) { 
				foreach($data as $key => $value){
					foreach($value as $key2 => $value2){
						echo'<th>'. $key2 .'</th>';
					}	
						break;
					}
				}
			echo '</tr>';
			foreach($data as $key => $value){
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
} 
}

