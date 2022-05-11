<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    
    <fieldset>
        <legend>Admin Data Insertion</legend>
        <form action="" method="POST">
            <label for="name_insert">Admin name: </label>
            <input type="text" name="name_insert"> <br>
            <label for="email_insert">Admin name: </label>
            <input type="text" name="email_insert"> <br>
            <label for="position_insert">Position: </label>
            <input type="text" name="position_insert"> <br>
            <label for="uni_id_insert">University ID: </label>
            <input type="text" name="uni_id_insert"> <br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Admin Data View</legend>
        <form action="" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>
</body>

</html>