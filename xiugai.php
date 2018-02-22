<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/js/jquery-1.11.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<h1>修改新闻</h1>
<?php
//取出主键值
$id = $_GET["id"];


//读取该条数据
$db = new MySQLi("localhost","root","123","newssystem");
$sql = "select * from news where newsid ={$id}";
$result = $db->query($sql);
$arr1 = $result->fetch_row();
?>
<form action="./update.php" method="post">
<div class="panel panel-default" style="max-width:500px">
    <div class="panel-body">
     <div class="input-group" style="display:none">
            <span class="input-group-addon">id：</span>
            <input type="text" class="form-control" placeholder="请输入新闻标题"name="newsid" value="<?php echo $arr1[0] ?>">
        </div>
     <div class="input-group">
            <span class="input-group-addon">标题：</span>
            <input type="text" class="form-control" placeholder="请输入新闻标题"name="title" value="<?php echo $arr1[1] ?>">
        </div>
        
      <br />
         <div class="input-group">
            <span class="input-group-addon">作者：</span>
            <input type="text" class="form-control" placeholder="请输入作者"name="author"  value="<?php echo $arr1[2] ?>">
        </div>
        
        <br />
         <div class="input-group">
            <span class="input-group-addon">来源：</span>
            <input type="text" class="form-control" placeholder="请输入来源"name="source"  value="<?php echo $arr1[3] ?>">
        </div>
       <br />
         <div class="input-group">
            <span class="input-group-addon">内容：</span>
            <input type="text" class="form-control" placeholder="请输入内容"name="content"  value="<?php echo $arr1[4] ?>">
        </div>
        <br />
        <input class="btn btn-default" type="submit" value="提交">
        <a href="main.php">查看</a>
       
    </div>
    </div>
</form>

</body>
</html>