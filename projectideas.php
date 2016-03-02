


<?php
	
require_once("projectideafunctions.php");

echo '<html>';
echo '<body>';
	echo 'Project Ideas';
	echo '<ul>';
	echo'<li>'.Get_djosephProjectIdea(0).'</li>';
	echo'<li>'.Get_djosephProjectIdea(1).'</li>';
	echo'<li>'.Get_djosephProjectIdea(2).'</li>';
	echo '<ul>';
echo '</body>';
echo '</html>';
?>