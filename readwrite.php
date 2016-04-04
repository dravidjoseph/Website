<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Homework 7 Example</title>
    <style type="text/css">
	    table{
	    	border:thin black solid;
			border-collapse: collapse;
		}
		td + td,
		th + th { border-left: 1px solid; }
		tr + tr { border-top: 1px solid; }
		
	</style>

</head>

<body>
<h3>Visits to this site:</h3>
<table>
<?php
	
$handle = fopen("rw_file.txt","r+");
$fileObject;

if(file_exists($handle)){
	readfile($file);
	
}
	
echo '<ul>'
echo '<ul>';
foreach($handle as $i){
	echo '<li>'.$i.'</li>';
}
echo '<ul>';
echo '<ul>';	

fclose($handle);
	
?>
</table>
</body>
</html>