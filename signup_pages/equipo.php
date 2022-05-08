<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
</head>

<body>
    <form action="../includes/getEquipo.inc.php" method="POST">
        <label for="coordinador_id">ID del Coordinador</label>
        <input type="text" name="coordinador_id">
        <label for="est_1_id">ID de Estudiante#1</label>
        <input type="text" name="est_1_id">
        <label for="est_2_id">ID de Estudiante#2</label>
        <input type="text" name="est_2_id">
        <label for="est_3_id">ID de Estudiante#3</label>
        <input type="text" name="est_3_id">
        <input type="submit">
    </form>
</body>

</html>