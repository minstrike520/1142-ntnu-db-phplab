<?php

require_once 'config.php'; 

if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['director']) && isset($_POST['release_date'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$director = $_POST['director'];
	$release_date = $_POST['release_date'];

	$insert_sql = "INSERT INTO $tablename VALUES ('$id', '$title', '$director', '$release_date');";
	
	if ($conn->query($insert_sql) === TRUE) {
		// echo "新增成功!!<br> <a href='main.php'>返回主頁</a>";
		// 重定向用戶到下一頁
		header('Location: index.php');
		exit;
	} else {
		echo "<h2 align='center'><font color='antiquewith'>新增失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>

