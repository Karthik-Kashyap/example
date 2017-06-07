<?php
$connection =@mysqli_connect("localhost","karthik","mysqlroot") or die(mysql_error());
$dbs=@mysqli_list_dbs($connection) or die(mysql_error());
$db_list="<ul>";
$i=0;
while($i<mysqli_num_rows($dbs))
{
$db_names[$i]=mysqli_tablename($dbs,$i);
	$db_list.="<li>$db_names[$i]";
	$i++;
}
$db_list.="</ul>";
?>
<html>
<head><title>mysql database</title></head>
<body>
<p><strong>Database on localhost</strong></p>
<?php echo "$db_list";?>
</body>
</html>