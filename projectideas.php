
<?php
	
function Get_djosephProjectIdea($index){
	
	if($index == 0){
		return 'Interactive Game';
	}
	else if($index == 1){
		return 'Mathematical Modeling';
	}
	else{
		return 'Tip Calculator';
	}	
}		
?>



<html>

<body>
	
	<?php echo 'Project Ideas'?>
	<?
	$ideas = array('Interactive Game','Mathematical Modeling');
	
	echo '<ul>';
	echo'<li>'.Get_djosephProjectIdea(0).'</li>';
	echo'<li>'.Get_djosephProjectIdea(1).'</li>';
	echo'<li>'.Get_djosephProjectIdea(2).'</li>';
	echo '<ul>';
	?>
</body>


</html>