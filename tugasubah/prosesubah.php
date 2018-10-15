<html>
<head>
</head>

<body>
<?php
echo "Hasil Pencarian: </br>";
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
echo "</br></br>";
echo "Hasil Perubahan: </br>";

$mas3=$_POST["replace"];
$di=explode(" ",$mas2);
for($x=0;$x<count($di);$x++){
  if($di[$x] == $mas1){
    echo $di[$x] = "<b><font style='color:red'>$mas3</b></font>"." ";
  }
  else {
    echo $di[$x]." ";
  }
}
?>
</body>
</html>
