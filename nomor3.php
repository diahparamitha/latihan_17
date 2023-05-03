<?php

function triangle_downside_left($rows = 5, $symbol = "*") {

	echo"Triangle Downside Left" . "<br>";

  	for ($i = 1; $i <= $rows; $i++) {
    	for ($j = $i; $j <= $rows; $j++) {
      		echo $symbol;
    	}
    	echo"<br>";
  	}
}


function triangle_upside_left($rows = 5, $symbol = "*") {

	echo"Triangle Upside Left" . "<br>";

  	for ($i = 1; $i <= $rows; $i++) {
    	for ($j = 1; $j <= $rows - $i; $j++) {
      		echo " ";
    	}
    	for ($k = 1; $k <= $i; $k++) {
      		echo $symbol;
    	}
    	echo"<br>";
  	}
}


function triangle_downside_rigth($rows = 5, $symbol = "*") {

	echo"Triangle Downside Rigth" . "<br>";

	for ($i = 1; $i <= $rows; $i++) {
	    	for ($j = 1; $j <= $i; $j++) {
	      		echo "&nbsp;&nbsp;";
	    	}
	    	for ($x = $i; $x <= $rows; $x++) {
	      		echo $symbol;
	    	}
	    echo "<br>";
	}
}


function triangle_upside_rigth($rows = 5, $symbol = "*") {

	echo"Triangle Upside Rigth" . "<br>";

	for ($i = 1; $i <= $rows; $i++) {
    		for ($j = 1; $j <= $rows; $j++) {
      			if ($j <= $rows - $i) {
        			echo "&nbsp;&nbsp;";
      			} else {
        			echo $symbol;
      			}
    		}
    	echo "<br>";
  	}
}

echo"<br>";
	echo"Jawaban nomor 3";
	echo"<table>";
		echo"<td>"; 
		triangle_upside_left(6, "$");
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_downside_left(10, "@");
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_upside_rigth(6, "*");
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_downside_rigth(9, "#");
		echo"</td>";

	echo"</table>";
	
	echo"<br>";

?>
