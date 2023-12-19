    <?php

      if (isset($_POST["enregistrer"])) {
         $username = $_POST["username"];
         $email = $_POST["email"];
         $statut = $_POST["statut"];
         echo "Username: " . $username . "Email: " . $email . "Statut: " . $statut . "<br>";

         $servername = "localhost";
         $usernamemysql = "root";
         $password = "";
         $dbname = "user";
         $conn = mysqli_connect($servername, $usernamemysql, $password, $dbname);
      }
      if (!$conn) {
         echo "connexion impossible <br>";
      } else {
         echo "connexion reussie <br>";
      }

      $sql = "INSERT INTO utilisateur values ('','$username' , '$email' , '$statut')";
      echo $sql;

      $result = mysqli_query($conn, $sql);
      if ($result) {
         echo "user ajoute";
      } else {
         echo "error";
      }

      header("location:list.php");
      ?>