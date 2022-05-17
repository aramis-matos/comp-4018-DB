<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Choose Open Question for Admin</title>
</head>

<body>
    <fieldset>
        <legend>Choose Open Question Data Insert</legend>
        <form action="../includes/choose_open.inc.php" method="POST">
            <label for="admin_id_insert">Admin ID:</label>
            <input type="text" name="admin_id_insert"><br>
            <label for="open_id_insert">Open Question ID</label>
            <input type="text" name="open_id_insert"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Choose Open Question Data View</legend>
        <form action="../includes/choose_open.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Choose Open Question Data Modify</legend>
        <form action="../includes/choose_open.inc.php" method="POST">
            <label for="admin_id_modify">Admin ID of the Chosen Problem</label>
            <input type="text" name="admin_id_modify"> <br>
            <label for="open_id_modify">Open Question ID of the Chosen Problem</label>
            <input type="text" name="open_id_modify"> <br>
            <label for="new_admin_id_modify">New Admin ID of the Chosen Problem</label>
            <input type="text" name="new_admin_id_modify"> <br>
            <label for="new_open_id_modify">Open Question ID of the Chosen Problem</label>
            <input type="text" name="new_open_id_modify"> <br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>