<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>標題文件</title>
</head>

<body>

<?php
$id=$_POST['id'];
echo $id;
$link=mysql_connect("localhost","root","") or exit(mysql_error());
mysql_select_db("test",$link);
mysql_query("set names utf8",$link);

$sql = "delete from message where id='$id'";
mysql_query($sql, $link) or exit(mysql_error());
?>
</body>
</html>