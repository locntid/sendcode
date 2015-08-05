<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<article>
<?php include("menu.php");?>
<section>
	<table width="100%">
				<tr>
					<td >
						Tiêu đề
					</td>
					<td>
						Ngày đăng
					</td>
					<td>
						Link
					</td>
				</tr>
				<?php
					include ("sql_connect.php");
					$sql = "SELECT * FROM ".$tbname." ORDER BY `date` DESC";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) > 0){
						while($row 	= mysqli_fetch_assoc($result)){
							echo "<tr class='success'><td>".$row["title"]." </strong></td><td>".$row["date"]."</td><td><a href='view.php?id=".$row["id"]."'>Xem</a></tr>";
						}
					}
				?>
	</table>
</section>

</article>

</body>
</html>