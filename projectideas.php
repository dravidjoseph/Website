


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
	
	$mwang0 = file_get_contents("http://people.eecs.ku.edu/~mwang/projectideafunctions.php?index=0");
	$mwang1 = file_get_contents("http://people.eecs.ku.edu/~mwang/projectideafunctions.php?index=1");
	$mwang2 = file_get_contents("http://people.eecs.ku.edu/~mwang/projectideafunctions.php?index=2");
	$mwang3 = file_get_contents("http://people.eecs.ku.edu/~mwang/projectideafunctions.php?index=3");
	
	echo '<h2>Michael Wang Project Ideas</h2>';
	echo '<ul>';
	echo'<li>'.$mwang0.'</li>';
	echo'<li>'.$mwang1.'</li>';
	echo'<li>'.$mwang2.'</li>';
	echo'<li>'.$mwang3.'</li>';
	echo '</ul>';
	
	$ayeasin0 = file_get_contents("http://people.eecs.ku.edu/~tyeasin/projectideafunctions.php?index=0");
	$ayeasin1 = file_get_contents("http://people.eecs.ku.edu/~tyeasin/projectideafunctions.php?index=1");

	echo '<h2>Amber Yeasin Project Ideas</h2>';
	echo '<ul>';
	echo'<li>'.$ayeasin0.'</li>';
	echo'<li>'.$ayeasin1.'</li>';
	echo '</ul>';
	
	$awang0 = file_get_contents("http://people.eecs.ku.edu/~tyeasin/projectideafunctions.php?index=0");
	$awang1 = file_get_contents("http://people.eecs.ku.edu/~tyeasin/projectideafunctions.php?index=1");
	
	echo '<h2>Alan Wang Project Ideas</h2>';
	echo '<ul>';
	echo'<li>'.$awang0.'</li>';
	echo'<li>'.$awang1.'</li>';
	echo '</ul>';
	
	
echo '</body>';
echo '</html>';
?>