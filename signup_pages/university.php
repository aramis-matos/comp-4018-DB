<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
</head>

<body>
    <fieldset>
        <legend>University Data Entry</legend>
        <form action="../includes/university.inc.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="country">Country</label>
            <input type="text" name="country"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>University Data View</legend>
        <form action="../includes/university.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>University Data Modify</legend>
        <form action="../includes/university.inc.php" method="POST">
            <label for="id">University ID to Modify</label>
            <input type="text" name="id"><br>
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="country">Country</label>
            <input type="text" name="country"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>