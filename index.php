<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM perpus"); // using mysqli_query instead
?>

<html>
<head>	
	<title>UTS-WS-187006063</title>
</head>

<body>
<a href="add.php">Add New Data</a><br/><br/>
<a href="json/json.php">JSON</a><br/><br/>
<a href="xml/xml.php">XML</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>No</td>
		<td>Anggota</td>
		<td>Penerbit</td>
		<td>Pengarang</td>
		<td>Buku</td>
		<td>Tahun Terbit</td>
		<td>Petugas</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) {		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['anggota']."</td>";
		echo "<td>".$res['penerbit']."</td>";
		echo "<td>".$res['pengarang']."</td>";
		echo "<td>".$res['buku']."</td>";
		echo "<td>".$res['tahunterbit']."</td>";
		echo "<td>".$res['petugas']."</td>";	
	}
	?>
	</table>
</body>
</html>
