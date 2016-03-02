


<?php
	
require_once("projectideafunctions.php");

echo '<html>';
echo '<body>';
	echo '<h1>Project Ideas</h1>';
	echo '<ul>';
	echo'<li>'.Get_djosephProjectIdea(0).'</li>';
	echo'<li>'.Get_djosephProjectIdea(1).'</li>';
	echo'<li>'.Get_djosephProjectIdea(2).'</li>';
	echo '</ul>';
	
	echo '<h2>Michael Wang Ideas</h2>';
	$mwang = file_get_contents("http://people.eecs.ku.edu/~mwang/projectideafunctions.php?index=0");
	echo $mwang;
	
	
echo '</body>';
echo '</html>';
?>