<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contestaciónes Possibles para Selección Multiple</title>
</head>
<body>
    <form action="../includes/getPossibleAns.inc.php" method="POST">
        <label for="ans">Possible Contestación</label> 
        <input type="text" name="ans"> <br>
        <label for="problem_id">ID de la Selección Multiple</label> 
        <input type="text" name="problem_id"> <br>
        <input type="submit">
    </form>
</body>
</html>