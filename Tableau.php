<!DOCTYPE>
<HTML> 
	<head>
		<title> Tableau Informations !</title>
	</head>
		<body>
<table>
<?php 
		$xml=simplexml_load_file ("classe-simploniens.xml");
		foreach($xml as $cle) 
	{ 
		echo "<tr><td>".$cle -> prenom.' '.$cle -> nom."</td><td>$cle -> date_naissance."</td></tr>";
	}
print_r($xml); 
?> 	
</table> 




	</body>
</HTML>

