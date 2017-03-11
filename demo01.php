<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8"/>
	</head>

<body>
	<?php
			$userphone = $_REQUEST['userphone'];
			$password = $_REQUEST['password'];

	//1、连接数据库  （搭桥）
	//mysql_connect();函数的返回值是连接对象（变量）
	$conn = mysql_connect("localhost","root","qianfeng");
	
	if(!$conn){
		die("连接失败");//die，结束脚本（代码）
	}
	
	//echo("连接成功！");
	
	//2、选择数据库（目的地）
	mysql_select_db("register",$conn);
	
	//3、执行SQL 语句（过桥）
	$sqlstr = "insert into user values('$userphone','$password')";
	mysql_query($sqlstr,$conn);
	
	echo("创建成功");
	
	
	//4、关闭数据库。（拆桥）
	mysql_close($conn);
	
	
?>
</body>
</html>





