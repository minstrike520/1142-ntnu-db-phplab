<?php

require_once 'config.php';

$id = $_GET['id'];

if (isset($id)) {
    $delete_sql = "DELETE FROM $tablename WHERE id='$id';";

	if ($conn->query($delete_sql) === TRUE) {
        // echo "刪除成功!<a href='main.php'>返回主頁</a>";
        // 重定向用戶到下一頁
		header('Location: index.php');
		exit;
    }else{
        echo "刪除失敗!";
	}

}else{
	echo "資料不完全";
}
				
?>