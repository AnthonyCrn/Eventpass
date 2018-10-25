

<html>
    <head>
  <title>Tous les événements</title>
  <meta charset="utf-8">
 
</head>
<body>

<?php 
include('connectevent.php');
  
$mysqli->real_query("SELECT * FROM evenements");
$res = $mysqli->use_result();  

//récuperation des variables
if(isset($_POST['even_id']))
	$even_id = $_POST['even_id'];
	$nom = $_POST['nom'];
	$lieu = $_POST['lieu'];
	$typeevent = $_POST['typeevent'];
	$typepass = $_POST['typepass'];
	$prixpass = $_POST['prixpass'];
	$description = $_POST['description'];
  
    
while ($row = $res->fetch_assoc()) {
    echo "<TR>
		<TD><IMG src='././lol.jpg' width='80px'></TD>";
	echo "<TD>" . $row['nom']. "</TD>";
	echo "<TD>" . $row['lieu']. "</TD>";
	echo "<TD>" . $row['typeevent']. "</TD>";
	echo "<TD>" . $row['typepass']. "</TD>";
	echo "<TD>" . $row['prixpass']. "</TD>";
	echo "<TD>" . $row['description']. "</TD>";
}
echo "</TABLE>";
?>

