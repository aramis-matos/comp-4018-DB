<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinator</title>
</head>

<body>
    <fieldset>
        <legend>Coordinator Data Insert</legend>
        <form action="../includes/coordinator.inc.php" method="POST">
            <label for="name">Coordinator Name</label>
            <input type="text" name="name"><br>
            <label for="uni_id">University ID</label>
            <input type="text" name="uni_id"><br>
            <label for="email">Admin email</label>
            <input type="text" name="email"><br>
            <label for="logo">Website Logo</label>
            <input type="text" name="logo"><br>
            <label for="url">Website URL</label>
            <input type="text" name="url"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Coordinator Data View</legend>
        <form action="../includes/coordinator.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Coordinator Data Modify</legend>
        <form action="../includes/coordinator.inc.php" method="POST">
            <label for="id">Target Coordinator ID</label>
            <input type="id"> <br>
            <label for="name">New Coordinator Name</label>
            <input type="text" name="name"> <br>
            <label for="uni_id">New University ID</label>
            <input type="text" name="uni_id"> <br>
            <label for="email">New Coordinator Email</label>
            <input type="text" name="email"> <br>
            <label for="logo">New Coordinator Logo</label>
            <input type="text" name="logo"> <br>
            <label for="url">New Website URL</label>
            <input type="text" name="url"> <br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>