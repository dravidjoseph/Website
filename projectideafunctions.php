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

if(isset($_GET['index'])){
	echo Get_djosephProjectIdea($_GET['index']);
	
}
?>