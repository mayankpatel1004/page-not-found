<?php 

header("HTTP/1.0 403 Forbidden");	// Send correct HTTP Header
$error_code = '403 Forbidden';		// Specify the error code
require_once('error-mailer.php');	// Include the error mailer script

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>403 Forbidden - You do not have permission to access this area.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<img src="oops.jpg" alt="403 Error Oops!" title="403 Error Oops!" />
		<h1 class="loud">Sorry! Restricted zone.</h1>
		<p class="loud">You have requested a page, file or directory that has restricted access so we 
		notified the web administrator to check it out.</p>
		<p class="small">Here are a few options to find what you are looking for.</p>
		<ol>
			<li><span>Double check the web address for typos</span></li>
			<li><span>Head back to our home page via the navigation below</span></li>
			<li><span>Visit our full website <a href="#">sitemap here</a></span></li>
		</ol>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">About</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div><!-- end div #wrapper -->
</body>
</html>