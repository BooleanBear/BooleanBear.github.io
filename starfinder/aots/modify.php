<html>
<body>

<?php 

$myfile = fopen("foundry.html", "w") 

$ip = $_POST["ip"]
$txt = "<html><body> <meta http-equiv=\"refresh\" content=$ip\" /> </body></html>"

$_POST["ip"];
fwrite($myfile, $txt);
?>

</body>
</html> 
