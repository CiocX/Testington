<html>
<body>

<form action="" method="post">
a:<input type="text" name="a">
<br>
<input type="submit" value="trimite">
form>

<?php
/*define('PI',3.14);
$A=PI*120*120;
$P=2*PI*120;

echo $A;
echo ' ';
echo $P;*/

$a=$_POST["a"];
$sum=0;
function sumcif($a)
	{while($a!=0)
		{$sum=$sum+$a%10;
		 $a=$a/10;
		}
	return $sum;
	}
echo "<br>suma cifrelor este".sumcif($a);
?>

</body>
</html>