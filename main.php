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
<table class="table table-striped">
  <caption>新闻表</caption>
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>author</th>
      <th>source</th>
      <th>date</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  $db= new MySQLi("localhost","root","123","newssystem"); 
  $sql = "select * from news";
  $result = $db->query($sql);
  if($result){
	  $arr = $result->fetch_all();
	  foreach($arr as $v){
		  echo "<tr>
      <td>{$v[0]}</td>
      <td>{$v[1]}</td>
      <td>{$v[2]}</td>
	  <td>{$v[3]}</td>
	  <td>{$v[5]}</td>
	  <td><a href='./delete.php?id={$v[0]}' onclick=\"return confirm('确认删除么？')\"><button type='button' class='btn btn-default btn-sm'>删除</button></a>
	  <a href='./xiugai.php?id={$v[0]}' ><button type='button' class='btn btn-default btn-sm'>修改</button></a>
	  </td>
    </tr>";
		  }
	  }
  
  ?>
    </tbody>
    </table>
    <div><a href="./tianjia.php">添加数据</a></div>
   
</body>
</html>