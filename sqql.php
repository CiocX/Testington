<html>
<body>

<?php
$servername = "localhost";
$username = "XCioc";
$password = "aurash45";
$dbname = "XCioc";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Nume,Prenume,Elev.CNP,Media,Clasa,Adres FROM `Elev`,`Adresa` WHERE Elev.CNP=Adresa.CNP";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "CNP: " . $row["CNP"]. " - Nume: " . $row["Nume"]. " " . $row["Prenume"]." Clasa: ". $row["Clasa"]." Adresa: ". $row["Adres"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>