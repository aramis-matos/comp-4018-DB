<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinadores</title>
</head>

<body>
    <form action="../includes/getCoordinador.inc.php" method="POST">
        <label for="coordinator_name">Nombre de Coordinador: </label>
        <input type="text" name="coordinator_name">
        <label for="uni_id">ID de la Universidad</label>
        <input type="text" name="uni_id">
        <label for="uni_country">Pais de la Universidad</label>
        <input type="text" name="uni_country">
        <input type="submit">
    </form>
</body>

</html>