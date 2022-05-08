<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Contestación Abierta</title>
</head>

<body>
    <form action="../includes/getCrearConsMult.inc.php" method="POST">
        <label for="coord_id">ID de Coordinador</label>
        <input type="text" name="coord_id">
        <label for="problem_id">ID de Contestación Abierta</label>
        <input type="text" name="problem_id">
        <input type="submit">
    </form>
</body>

</html>