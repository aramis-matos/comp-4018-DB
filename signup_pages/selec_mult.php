<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección Multiple</title>
</head>

<body>
    <form action="../includes/getSelecMult.inc.php" method="POST">
        <label for="descrip">Descripción del Problema</label>
        <input type="text" name="descrip"><br>
        <label for="real_ans">Contestación Correcta</label>
        <input type="text" name="real_ans"><br>
        <input type="submit">
    </form>
</body>

</html>