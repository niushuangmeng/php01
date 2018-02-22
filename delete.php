<?php
$id = $_GET["id"];
$db = new MySQLi("localhost","root","123","newssystem");
$sql = "delete from news where newsid={$id}";
$result = $db->query($sql);


if($result){
	header("location:main.php");
	}else{
		echo "删除失败";
		}