<?php

	function triangle_upside_left($n = 5) {

		echo"Triangle Upside Left" . "<br>";

    	for ($i=0; $i<$n; $i++) {
        	echo str_repeat(" ", $i);
        	echo str_repeat("*", $i+1);
        	echo "<br>";
    	}
	}

	function triangle_downside_left($n = 5) {

		echo"Triangle Downside Left" . "<br>";

    	for ($i=0; $i<$n; $i++) {
        	echo str_repeat("*", $n-$i);
        	echo "<br>";
    	}
	}

	function triangle_upside_rigth($n = 5) {

		echo"Triangle Upside Rigth" . "<br>";

	  	for ($i = 1; $i <= $n; $i++) {
    		for ($j = 1; $j <= $n; $j++) {
      			if ($j <= $n - $i) {
        			echo "&nbsp;&nbsp;";
      			} else {
        			echo "*";
      			}
    		}
    		echo "<br>";
  		}
	}

	function triangle_downside_rigth($n = 5) {

		echo"Triangle Downside Rigth" . "<br>";

	  	for ($i = 1; $i <= $n; $i++) {
	    	for ($j = 1; $j <= $i; $j++) {
	      		echo "&nbsp;&nbsp;";
	    	}
	    	for ($x = $i; $x <= $n; $x++) {
	      		echo "*";
	    	}
	    	echo "<br>";
	  	}
	}

	echo"<br>";
	echo"Jawaban nomor 1";
	echo"<table>";
		echo"<td>"; 
		triangle_upside_left();
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_downside_left();
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_upside_rigth();
		echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";
		echo"<td>"; echo"</td>";

		echo"<td>"; 
		triangle_downside_rigth();
		echo"</td>";

	echo"</table>";
	
	echo"<br>";
	

?>