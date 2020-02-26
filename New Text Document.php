<html>
<body>

<form action="" method="post">
<table>
  <tr>
    <th>Nume prenume</th>
    <th><input type="text" name="name"></th> 
  </tr>
  <tr>
    <td>Sex</td>
    <td><input type="radio" name="o" value="m"> Masculin<br><input type="radio" name="o" value="f"> Feminin</td>
  </tr>
  <tr>
    <td>Studii</td>
    <td><select name="studii">
	<option>Gimaziale</option>
	<option>Medii</option>
	<option>Superioare</option>
	<option>Postuniversitare</option>
	</td>
  </tr>
  <tr>
    <td>CV</td>
    <td><textarea rows="4" cols="50" name="CV"></textarea></td>
  </tr>
  <tr>
    <td><br></td>
    <td></td>
  </tr>
  <tr>
    <td><input type="submit" value="Trimite"></td>
    <td><input type="reset" value="Sterge"></td>
  </tr>
</table>
</form>

<?php

$nume=$_POST["name"];
$sex=$_POST["o"];
$studii=$_POST["studii"];
$CV=$_POST["CV"];

echo $nume.'<br>'.$sex."<br>".$studii."<br>".$CV;

?>

</body>
</html>
