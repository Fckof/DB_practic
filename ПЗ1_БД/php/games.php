<?php 
	$userRoot = "root";
	$passRoot = "root";
	$servername="localhost";
	$database="gamedev";

$conn = new mysqli($servername, $userRoot, $passRoot, $database) or die("Не подрубилось...");

$result=$conn->query("SELECT * FROM `игры`");

if (count($result)==0){
		echo "Нет записей";
	}

print "<table border='1' cellpaddind='10' cellspacing='10' style='color:black;font-size:25px;margin:30px auto;'><th>ID игры</th><th>ID разработчика</th><th>Название</th><th>Рейтинг</th><th>Дата начала работы</th><th>Дата окончания работы</th><th>Дата выпуска</th>";

while ($row=$result->fetch_assoc()) {
		print "<tr><td>".$row["ID игры"]."</td><td>".$row["ID разработчика"]."</td><td>".$row["Название"]."</td><td>".$row["Рейтинг"]."</td><td>".$row["Дата начала работы"]."</td><td>".$row["Дата окончания работы"]."</td><td>".$row["Дата выпуска"]."</td></tr>";
	}

print "</table>";

$conn->close();
 ?>