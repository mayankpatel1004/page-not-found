<?php
header("HTTP/1.0 404 Not Found");
if(isset($_GET["page"]))
{
	if(file_exists($_GET["page"].".php"))
	{
		include($_GET["page"].".php");
	}
	else
	{
		include("pagenotfound.php");	
	}
}
else
{
	echo "main index.php file is called";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Page not found</title>
</head>
<body>
</body>
</html>