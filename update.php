<?php
$id = $_POST["newsid"];
$title = $_POST["title"];
$author = $_POST["author"];
$source = $_POST["source"];
$content = $_POST["content"];

$db = new MySQLi("localhost","root","123","newssystem");
$sql = "update news set title='{$title}',author='{$author}',source='{$source}',content='{$content}' where newsid='{$id}'";
$result = $db->query($sql);
if($result){
	header("location:main.php");
	}else{
		echo "修改失败！";
		}