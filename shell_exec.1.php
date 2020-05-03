<html>
	<head>
		<meta charset="utf8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">
		<title>Web Shell</title>
	</head>
	<body>
		Hello!
		<br>
		<?php 
			echo shell_exec('ping 8.8.8.8');
		?>
	</body>
</html>

