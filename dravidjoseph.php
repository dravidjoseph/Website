<?php
echo '<html>
 	<head>
            <style>
            #section1
			{
				padding:5px;
				line-height:50px;
				height:70px;
				font-size:20;
			}

			#section2
			{
				padding:10px;
				line-height:30px;
				font-size:20;
			}

			.text
			{
				width:200px;
			    clear:left;
			    text-align:right;
			    padding-right:10px;
			    float:right;
			}

			.button
			{
				width:350px;
			}
            </style>
    </head>
	<body>
		<table align="center">
		
		<tr>
			<td>
				<img src="http://identity.ku.edu/images/KUlogo1C.gif" >
				</img>
			</td>
			
			<td>
				<div id="section1"><b>EECS 368 - Programming Paradigms</b></div>
				<div id="section2">Username<input type="text" name="user" class="text"></div>
				<div id="section2">Password<input type="text" name="pw" class="text"></div>
				<div id="section2">Confirm<input type="text" name="confirm" class="text"></div>
				<div id="section2">Image Link<input type="text" name="image" class="text"></div>
				<input type="submit" value="Submit" class="button">
				<br><input type="submit" value="Clear" class="button">
			</td>
		</tr>
		
		</table>
	</body>
</html>';
?>