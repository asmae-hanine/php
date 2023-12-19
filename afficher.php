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

var_dump($user_id);

$sql = "SELECT * FROM utilisateur WHERE id = $user_id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<ul>
    <li><?php echo $row["id"] ?></li>
    <li><?php echo $row["username"] ?></li>
    <li><?php echo $row["email"] ?></li>
    <li><?php echo $row["statut"] ?></li>
</ul>
<?php

// var_dump($row);

die();
?>