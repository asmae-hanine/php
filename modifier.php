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
<form action="" method="post">
    <label for="id">Id</label>
    <input type="text" name="id" id="id" value="<?php echo $row["id"] ?>" readonly>
    <label for="username">Username</label>
    <input type="text" id="username" name="username" value="<?php echo $row["username"] ?>">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $row["email"] ?>">
    <label for="statut">Statut</label>
    <input type="text" name="statut" id="statut" value="<?php echo $row["statut"] ?>">
    <input type="submit" name="enregistrer" value="modifier">
</form>

<?php

if (isset($_POST["enregistrer"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $statut = $_POST["statut"];
    $user_id = $_POST["id"];
    echo "Username: " . $username . "Email: " . $email . "Statut: " . $statut . "<br>";

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
    $sql1 = "UPDATE utilisateur SET
             username = '$username' ,
             email = '$email',
             statut ='$statut'
             WHERE id=$user_id";
    var_dump($sql1);
    // die();

    mysqli_query($conn, $sql1);
    header("location:list.php");
}


?>