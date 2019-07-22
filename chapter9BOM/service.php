<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http:www.w3.org/TR/xhtml1/DTD/xhtmml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Windows</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>	
	<?php
	$color=$_GET['color'];
	if ($color=='red') {
		printf("<div id='val1'>Rose</div>");
		printf("<div id='val2'>Apple</div>");
	}else if ($color=='blue') {
		printf("<div id='val1'>Berry</div>");
		printf("<div id='val2'>Sky</div>");
	}

	?>
</body>
</html>