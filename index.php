<?php
/**
 * Created by PhpStorm.
 * User: wladmirjunior
 * Date: 07/02/18
 * Time: 19:13
 */

//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM Peca ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Nome</td>
		<td>Descrição</td>
		<td>Preço</td>
		<td>Quantidade</td>
	</tr>
	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array

	while($res = mysqli_fetch_array($result)) {
	    print("cssdfsdf");
		echo "<tr>";
		echo "<td>".$res['Nome']."</td>";
		echo "<td>".$res['Descricao']."</td>";
		echo "<td>".$res['Preco']."</td>";
        echo "<td>".$res['Quantidade']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Deseja realmente apagar?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>