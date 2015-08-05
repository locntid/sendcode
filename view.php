<?php
include("sql_connect.php");

if ($_GET["id"] != '') {
    $sql    = "SELECT * FROM " . $tbname . " WHERE id=" . $_GET["id"];
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = htmlentities($row["title"]);
            $type = htmlentities($row["syntax"]);
            $content =  htmlentities($row["code"]);
            $date = htmlentities($row["date"]);
        }
    } else {
        header('Location: http://www.sendcode.tutsmodel.info/');
		exit;
    }
} else {
    header('Location: http://www.sendcode.tutsmodel.info/');
		exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" />
	<meta name="description" content="Ngày đăng: <?php echo $date ?>. Code chỉ tồn tại 15 ngày.">
	<title><?php if($title != '') echo ($title." - ");  ?> TutsModel.Info</title>
	<link rel="stylesheet" href="./css/shCore.css">
    <link rel="stylesheet" href="./css/shThemeDefault.css">
    <script src='./js/shCore.js' type='text/javascript'></script>
    <script src='./js/shAutoloader.js' type='text/javascript'></script>
    <?php 
    	if(strcasecmp($type,"applescript") == 0) echo "<script src='./js/shBrushAppleScript.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"as3") == 0) echo "<script src='./js/shBrushAS3.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"shell") == 0) echo "<script src='./js/shBrushBash.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"cf") == 0) echo "<script src='./js/shBrushColdFusion.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"css") == 0) echo "<script src='./js/shBrushCss.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"delphi") == 0) echo "<script src='./js/shBrushDelphi.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"patch") == 0) echo "<script src='./js/shBrushDiff.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"erl") == 0) echo "<script src='./js/shBrushErlang.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"groovy") == 0) echo "<script src='./js/shBrushGroovy.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"java") == 0) echo "<script src='./js/shBrushJava.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"javafx") == 0) echo "<script src='./js/shBrushJavaFX.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"js") == 0) echo "<script src='./js/shBrushJScript.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"pl") == 0) echo "<script src='./js/shBrushPerl.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"php") == 0) echo "<script src='./js/shBrushPhp.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"text") == 0) echo "<script src='./js/shBrushPlain.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"ps") == 0) echo "<script src='./js/shBrushPowerShell.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"py") == 0) echo "<script src='./js/shBrushPython.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"ruby") == 0) echo "<script src='./js/shBrushRuby.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"sass") == 0) echo "<script src='./js/shBrushSass.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"scala") == 0) echo "<script src='./js/shBrushScala.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"sql") == 0) echo "<script src='./js/shBrushSql.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"vb") == 0) echo "<script src='./js/shBrushVb.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"xml") == 0) echo "<script src='./js/shBrushXml.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"cpp") == 0) echo "<script src='./js/shBrushCpp.js' type='text/javascript'></script>";
    	if(strcasecmp($type,"csharp") == 0) echo "<script src='./js/shBrushCSharp.js' type='text/javascript'></script>";
    ?>
    <script type="text/javascript">SyntaxHighlighter.all();</script>
</head>
<body>
<article>
<?php include("menu.php");?>
<section>
<p align="center"><span>Ngày đăng: <strong><?php echo $date; ?></strong></span> ........................... <strong>Chú ý: </strong> code chỉ tồn tại trong vòng 15 ngày<br>
Copy đường dẫn và gửi cho bạn bè: <?php echo "<input type='text' value ='http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]."' onClick='this.select();'/>"?>
 </p>
	<script type="syntaxhighlighter" class="brush: <?php echo $type ?>"><?php
       	echo $content;
	?>
	</script>
</section>

</article>
</body>
</html>
