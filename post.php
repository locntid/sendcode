<?php 
include("sql_connect.php");
$title = $_POST["txtTitle"];
if($title == null){
$title = "Không tiêu đề";
}
$syntax = $_POST["txtSyntax"];
$code = $_POST["txtCode"];
$id = rand(0,999).rand(0,999).rand(0,999);
$now = getdate();
$date = $now["year"] . "-" . $now["mon"] . "-" . $now["mday"]; 
$sql = "INSERT INTO ".$tbname." VALUES ('"
	.mysql_escape_string($id)."','"
	.mysql_escape_string($syntax)."','"
	.mysql_escape_string($code)."','"
	.mysql_escape_string($title)."','"
	.mysql_escape_string($date)."')";
	if(mysqli_query($conn,$sql)){
		//echo "insert thanhf coong";
		sleep(3);
		header('Location: http://localhost/sharecode2.0/view.php?id='.$id);
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
waiting....

</body>
</html>