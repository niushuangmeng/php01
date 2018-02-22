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
<h1>发布新闻</h1>
<form action="./add.php" method="post">
<div class="panel panel-default" style="max-width:500px">
    <div class="panel-body">
     <div class="input-group">
            <span class="input-group-addon">标题：</span>
            <input type="text" class="form-control" placeholder="请输入新闻标题" name="title">
        </div>
        
      <br />
         <div class="input-group">
            <span class="input-group-addon">作者：</span>
            <input type="text" class="form-control" placeholder="请输入作者"name="author">
        </div>
        
        <br />
         <div class="input-group">
            <span class="input-group-addon">来源：</span>
            <input type="text" class="form-control" placeholder="请输入来源"name="source">
        </div>
       <br />
         <div class="input-group">
            <span class="input-group-addon">内容：</span>
            <input type="text" class="form-control" placeholder="请输入内容"name="content">
        </div>
        <br/>
        <input class="btn btn-default" type="submit" value="提交">
        <a href="main.php">查看</a>
       
    </div>
    </div>
</form>

</body>
</html>