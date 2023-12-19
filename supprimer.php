<?php
$servername = "localhost";
$usernamemysql = "root";
$password = "";
$dbname = "user";
$conn = mysqli_connect($servername, $usernamemysql, $password, $dbname);
if (!$conn) {
    echo "connexion impossible <br>";
} else {
    echo "connexion reussie <br>";
}

$user_id = $_GET["id"];


$sql = "DELETE FROM utilisateur WHERE id = $user_id ";
$result = mysqli_query($conn, $sql);

header("location:list.php");
