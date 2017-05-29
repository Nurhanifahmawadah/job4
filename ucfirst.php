<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body bgcolor="#00FFFF">
<?php
echo"<b>";
$foo= 'hello world!';
$foo=  ucfirst($foo); // Hello World!
$bar= 'HELLO WORLD!';
$bar= ucfirst($bar); //HELLO WORLD!
$bar= ucfirst(strtolower($bar)); //Hello World!
echo"$foo <br>$bar";
echo"</b>"; ?>
</body>
</html>