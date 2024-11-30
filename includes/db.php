<?php
// db.php : Gestion de la connexion à la base de données
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cms_jeff";

$conn = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Fonction générique pour récupérer toutes les données d'une table
function getAll($conn, $table) {
    $stmt = $conn->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
?>
