<?php

require('nomor1.php');

	function cetak_pola($nama_pola){
		switch ($nama_pola) {
			case 'triangle_upside_left':
			triangle_upside_left();
				break;
			
			case 'triangle_downside_left':
			triangle_downside_left();
				break;

			case 'triangle_upside_rigth':
			triangle_upside_rigth();
  				break;

			case 'triangle_downside_rigth':
			triangle_downside_rigth();
	  			break;

			default:
				echo"UPS! Pola tidak dikenali";
		}
	}
	echo "<br>";

	echo "Jawaban Nomor 2";
	echo "<br>";

	echo"<table>";
		echo"<td>"; 
		cetak_pola("triangle_downside_rigth");
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		cetak_pola("triangle_upside_left");
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		cetak_pola("triangle_downside_circle");
		echo"</td>";

	echo"</table>";

?>