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


$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($conn, $sql); ?>
<button><a href="ajout.php">ajout</a></button>
<table border="2px" width="100%">
    <tr>
        <th>id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Statut</th>
        <th>action</th>
    </tr>

    <?php

    while ($row = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["statut"] ?></td>
            <td><a href="supprimer.php?id=<?php echo $row["id"] ?>">supprimer</a> <a href="modifier.php?id=<?php echo $row["id"] ?>">Modifier</a> <a href="afficher.php?id=<?php echo $row["id"] ?>">Afficher</a></td>
        </tr>


    <?php
    }

    ?>
</table>