<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http:www.w3.org/TR/xhtml1/DTD/xhtmml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Windows</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>	
	<?php
		//如果没有传入查询字符串，那么将无法搜索
		if(empty($_REQUEST['state'])){
			echo "No State Sent";
		}else{
			//将查询串中从开始到结尾的空白符去除
			$search=trim($_REQUEST['state']);
			switch ($search) {
				case "HN":
					$result="<ul><li>衡阳</li>" . "<li>长沙</li></ul>";
					break;
				case "HB":
					$result="<ul><li>武汉</li><li>襄阳</li><li>荆州</li></ul>";
					break;
				case "GD":
					$result="<ul><li>广州</li><li>深圳</li><li>汕头</li><li>珠海</li></ul>";
					break;
				case "SX":
					$result="<ul><li>太原</li></ul>";
					break;
				default:
					$result="No Cities Found";
					break;
			}
			echo "<h3>Cities:</h3><p>" . $result . "</p>";
		}
	?>
</body>
</html>