<html>
	<head>
		<meta charset="windows-1251">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">
		<title>Web Shell</title>
	</head>
	<body>
		<?php 
			echo shell_exec('ping 8.8.8.8');
		?>
	</body>
</html>

