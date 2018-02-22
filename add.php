<?php
$title = $_POST["title"];
$author = $_POST["author"];
$source = $_POST["source"];
$content = $_POST["content"];

$db = new MySQLi("localhost","root","123","newssystem");
$sql = "insert into news  values(0,'{$title}','{$author}','{$source}','{$content}',now())";
$result = $db->query($sql);


if($result){
	header("location:tianjia.php");
	
	}else{
		echo "添加失败！";
		}