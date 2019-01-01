<?php
$uploaddir = 'artikel/';
$uploadfile = $uploaddir.$_FILES['artikel']['name'];
if(move_uploaded_file($_FILES['artikel']['tmp_name'],
	$uploadfile))
{
	echo "file uploaded</br>";
}
else
{
	echo "<font color='red'> file not uploaded</font></br>";
}
$uploaddir = 'artikel/';
$uploadfile2 = $uploaddir.$_FILES['Pictures']['name'];
if(move_uploaded_file($_FILES['Pictures']['tmp_name'],
	$uploadfile2))
{
	echo "file uploaded</br>";         	
}
else
{
	echo "<font color='red'> file not uploaded</font></br>";
}
?>

<html>
<head>
	<title> - </title>
</head>
<body>
<form method="post" action="baru.html">
	<button type="submit">
		Next
	</button>
	
</form>
</body>
</html>