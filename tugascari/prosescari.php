<html>
<head>
</head>

<body>
<?php
$mas1 =$_POST["dalam"];
$mas2 =$_POST["luar"];
$di = explode(" ",$mas2);
for
($x=0;$x<count($di);$x++)
{
if
($di[$x] == $mas1)
{
	 echo $di[$x] = "<b>$mas1</b>"." ";
}
		else
			{
				echo $di[$x]." " ;
			}
}
?>
</body>
</html>
