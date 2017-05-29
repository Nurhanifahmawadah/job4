<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body bgcolor="#00FFFF">
<?php
echo"<b>";
$email='emailmu@yahoo.com';
$domain=strstr(@email, '@');
echo $domain."<br>"; //prints yahoo.com
$mail=strstr($email, 'm');
echo $mail; //prints mailmu@yahoo.com
echo"</b>";
?>
</body>
</html>