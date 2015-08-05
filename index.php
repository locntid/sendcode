<?php
	include("sql_connect.php");
	// xoa file qua 30 ngay
	$sql = "DELETE FROM ".$tbname." WHERE `date` < ADDDATE(NOW(), INTERVAL -15 day);";
	mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Chia sẻ code nào - TutsModel.Info</title>
</head>
<body>
<form method="post" action="post.php">
<article>
	<nav >
		<ul id="mMenu">
			<li><a href="/">New</a></li>
			<li><a href="list.php">List</a></li>
			<li><a href="https://www.facebook.com/messages/tutsmodel">Contact</a></li>
			<li><a href="https://www.facebook.com/tutsmodel">About</a></li>
		</ul>
		<ul id="menubar">
			<li>Tiêu đề: <input type="text" name="txtTitle" id="title" placeholder="Nhập tiêu đề" /></li>
			<li>
			Ngôn ngữ: <select name="txtSyntax" id="slcsyntax">
				<option value="as3">ActionScript3</option>
				<option value="shell">Bash/shell</option>
				<option value="cf">ColdFusion</option>
				<option value="csharp">C#</option>
				<option value="cpp">C++</option>
				<option value="css">CSS</option>
				<option value="delphi">Delphi/Pascal</option>
				<option value="patch">Diff</option>
				<option value="erl">Erlang</option>
				<option value="groovy">Groovy</option>
				<option value="js">JavaScript</option>
				<option value="java">Java</option>
				<option value="javafx">JavaFX</option>
				<option value="pl">Perl</option>
				<option value="php">PHP</option>
				<option value="text">Plain Text</option>
				<option value="ps">PowerShell</option>
				<option value="py">Python</option>
				<option value="ruby">Ruby</option>
				<option value="scala">Scala</option>
				<option value="sql">SQL</option>
				<option value="vb">Visual Basic</option>
				<option value="xml">XML/HTML</option>
				</select></li>
				<li><input type="submit" id="submit" value="Save" /></li>
		</ul>
		
		
	</nav>
			<textarea id="txtCode" name="txtCode" placeholder="Nhập Code" ></textarea>
</article>
</form>
</body>
</html>