<?php 
$command = escapeshellcmd('pytest.py');
$output = shell_exec($command);
echo $output;
?>
