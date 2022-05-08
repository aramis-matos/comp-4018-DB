<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contestación para Selección multiple de Estudiante</title>
</head>

<body>
    <form action="../includes/getContestarSelec.inc.php" method="POST">
        <label for="selec_id" >ID de Contestación Abierta</label>
        <input type="text" name="selec_id">
        <label for="team_id">ID de Equipo</label>
        <input type="text" name="team_id">
        <label for="ans">Contestación</label>
        <input type="text" name="ans">
        <input type="submit">
    </form>

</body>

</html>