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
			echo "<city>No State Sent</city>";
		}else{
			//将查询串中从开始到结尾的空白符去除
			$search=trim($_REQUEST['state']);
			switch ($search) {
				case "HN":
					$result="<city><value>HY</value><title>衡阳</title></city>" . "<city><value>CS</value><title>长沙</title></city>";
					break;
				case "HB":
					$result="<city><value>WH</value><title>武汉</title></city>" . "<city><value>XY</value><title>襄阳</title></city>";
					break;
				case "GD":
					$result="<city><value>GZ</value><title>广州</title></city>" . "<city><value>SZ</value><title>深圳</title></city>";
					break;
				case "SX":
					$result="<city><value>TY</value><title>太原</title></city>";
					break;
				default:
					$result="No Cities Found";
					break;
			}
			$result='<?xml version="1.0" encoding="utf-8"?>'."<cities>".$result."</cities>";
			header("Content-Type:text/xml;charset=utf-8");
			echo  $result;
		}
	?>
</body>
</html>