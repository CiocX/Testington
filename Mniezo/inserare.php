<?php

$servername = "localhost";
$username = "XCioc";
$password = "aurash45";
$dbname = "XCioc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query($sql);

if($result == TRUE)
{ echo "CREAT!";}
else
{ echo $conn->error;}


//1
	$sql = 'insert into CURSA(cod_cursa,destinatie,data_cursei,nr_locuri) values($_POST ["cod_cursa"],$_POST ["destinatie"],$_POST ["data_cursei"],$_POST ["nr_locuri"]'
	
	
	$sql = 'insert into REZERVARE(ID,cod_cursa,nume_client,nr_locuri_rezervate) values($_POST ["ID"],$_POST ["cod_cursa"],$_POST ["nume_client"],$_POST ["nr_locuri_rezervate"]'

if($result == TRUE)
{echo "Succes!";}

//2
/*if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["codAlbum"]. "</td><td>" . $row["codFormatie"]. "</td><td>" . $row["titlu"] . "</td><td>".$row[""]."</td></tr>";
    }

} else {
    echo "0 results";
}*/

 

mysqli_close($conn);

?>