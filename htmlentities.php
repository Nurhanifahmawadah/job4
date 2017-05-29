<html>
<head>
<title>MENGENAL FUNGSI STRING</title>title>
</head>
<body>
<?php
echo"<b>";
$str="A 'quote' is <b>bold</b>
<a href=wwww.stekom.ac.id> stekom</a>";
//Qutputs: A 'quot' is<b>bold</b>
echo"Sebelum: $str<br>";
echo htmlentities($str);
echo"</b>";
?>
</body>
</html>
