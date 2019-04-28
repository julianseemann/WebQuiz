<?php
//das Fetchstatement wird andere Variablen haben ... aber das da ist gut genug für mich... 
//es wird nicht gehen, ohne dass ihr eine DB test erstellt und einer tabelle User ... und das per phpmyAdmin
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// verbinden
$conn = new mysqli($servername, $username, $password, $dbname);
// schauen ob die verbindung hingehaun is
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,Vorname,PenisSize FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // ausgabe von daten
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["Vorname"]. " Penisgröße: " . $row["PenisSize"]. "cm <br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
