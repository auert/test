<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標文件</title>
<script language="javascript" type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script>
function sel()
{
	var checkItem = document.getElementsByName("c1");
	for(var i=0;i<checkItem.length;i++){
		checkItem[i].checked=true;   
	}
}

</script>
</head>

<body>

<table border=1 id=tab>
<?php
$link=mysql_connect("localhost","root","") or exit(mysql_error());
mysql_select_db("test",$link);
mysql_query("set names utf8",$link);
$sql = "select * from message order by add_time desc";
$data = mysql_query($sql, $link) or exit(mysql_error());
$row = mysql_num_rows( $data );
 for($i=0;$i<$row;$i++)
 {
$datarow = mysql_fetch_array($data)

?><form id="del" method="post">
<tr>
<td width="50">
<input type="checkbox" id="c1" name="c1">
</td>
<td width="50"><?php echo $datarow["id"];?></td>
<td width="150"><?php echo $datarow["name"];?></td>
<input type="hidden" name="id" value="<?php echo $datarow["id"];?>">
<td width="280"><?php echo $datarow["message"];?></td>
<td width="150"><?php echo $datarow["add_time"];?></td>
<td width="80"><input type="button"  value="刪除" onClick="del(this,<?php echo $datarow["id"];?>)"/></td>
</tr>
</form>
<?php
 }
?>
</table>


</body>
</html>