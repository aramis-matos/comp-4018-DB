<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Multiple Choice for Admin</title>
</head>

<body>
    <fieldset>
        <legend>Choose Multiple Choice Data Insert</legend>
        <form action="../includes/choose_selec_inc.php" method="POST">
            <label for="admin_id_insert">Admin ID</label>
            <input type="text" name="admin_id_insert">
            <label for="selec_id_insert">Multiple Choice ID</label>
            <input type="text" name="selec_id_insert">
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Choose Multiple Choice Data View</legend>
        <form action="../includes/choose_selec_inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Choose Multiple Choice Data Modify</legend>
        <form action="../includes/choose_selec_inc.php" method="POST">
            <label for="admin_id_modify">Admin ID of the Chosen Problem</label>
            <input type="text" name="admin_id_modify">
            <label for="selec_id_modify">Open Question ID of the Chosen Problem</label>
            <input type="text" name="selec_id_modify">
            <label for="new_admin_id_modify">New Admin ID of the Chosen Problem</label>
            <input type="text" name="new_admin_id_modify">
            <label for="new_selec_id_modify">New Multiple Choice ID of the Chosen Problem</label>
            <input type="text" name="new_selec_id_modify">
            <input type="submit" name="modify">
        </form>
    </fieldset>

</body>

</html>