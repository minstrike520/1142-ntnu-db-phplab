<html>
<head>
	<title>電影資料庫管理系統</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<style>
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	}
	th, td {
	padding: 5px;
	text-align: left;    
	}
</style>
<body>
	
	<h1 align="center">電影資料庫管理系統</h1>
	<p align="center"><a href="create.html">新增資料</a><p>
	<table style="width:50%" align="center">
		<tr><th>編號</th><th>標題</th><th>導演</th><th>上映日期</th><th colspan="2">Action</th></tr>
		
		<?php
			require_once 'config.php';	
			
			$sql = "SELECT * FROM $tablename;";
			$result = $conn->query($sql);

			if ($result && $result->num_rows > 0) {	
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["id"] . "</td>";
					echo "<td>" . $row["title"] . "</td>";
					echo "<td>" . $row["director"] . "</td>";
					echo "<td>" . $row["release_date"] . "</td>";
					echo "<td><a href='update.php?id=" . $row["id"] . "'>Edit</a></td>";
					echo "<td><a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='6' align='center'>0 results</td></tr>";
			}
		?>
		
	</table>
	
</body>
	
</html>


				
		