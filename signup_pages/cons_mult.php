<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contestación Multiple</title>
</head>

<body>
    <form action="../includes/getConsMult.inc.php" method="POST">
        <label for="description">Descripción del Problema</label>
        <input type="text" name="description">
        <label for="real_ans">Contestación correcta del Problema</label>
        <input type="text" name="real_ans">
        <input type="submit">
    </form>
</body>

</html>