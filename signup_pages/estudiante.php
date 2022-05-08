<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>

<body>
    <form action="../includes/getEstudiante.inc.php" method="POST">
        <label for="student_name">Nombre de Estudiante: </label>
        <input type="text" name="student_name"> <br>
        <label for="student_team_id">ID del equipo</label>
        <input type="text" name="student_team_id"> <br>
        <input type="submit" value="Ingresar">
    </form>
</body>

</html>