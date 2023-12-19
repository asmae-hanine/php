<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Agout User</h1>
    <form action="enregistrer.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="statut">Statut</label>
        <input type="text" name="statut" id="statut">
        <input type="submit" name="enregistrer" value="enregistrer">
    </form>
</body>

</html>