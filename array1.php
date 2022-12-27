<!DOCTYPE html>
<html>
<head>
<title>ABCD</title>
</head>
<body>
<?php
$cars= array('tata','mahindra','audi');
$list= count($cars);

for($x=0; $x<$list; $x++){
	echo $cars[$x];
	echo "<br>";
}
?>
</body>
</html>