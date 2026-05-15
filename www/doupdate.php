<?php

include_once 'config.php';

if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['director']) && isset($_POST['release_date'])) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$director = $_POST['director'];
	$release_date = $_POST['release_date'];
	

	$update_sql = "UPDATE $tablename SET title = '$title', director = '$director', release_date = '$release_date' WHERE id = '$id';";
	// echo $update_sql;
	if ($conn->query($update_sql) === TRUE) {
		// 重定向用戶到下一頁
		header('Location: index.php');
		exit;

	} else {
		echo "<h2 align='center'><font color='antiquewith'>修改失敗!!</font></h2>";
	}

}else{
	echo "資料不完全";
}
				
?>