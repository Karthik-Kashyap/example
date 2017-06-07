<?php
//phpinfo();
$connection=mysqli_connect("localhost","karthik","mysqlroot") or die(mysqli_error());
if($connection)
	$msg="success";
?>
<html>
<head><title>mysql connection</title></head>
<body>
<?php echo "$msg"; ?>
</body>
</html>
</html>