<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Open Question</title>
</head>

<body>
    <fieldset>
        <legend>Open Question Data Insert</legend>
        <form action="../includes/open.inc.php" method="POST">
            <label for="actual_ans">Actual Answer </label>
            <input type="text" name="actual_ans"><br>
            <label for="coord_id">Coordinator ID </label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Open Question Data View</legend>
        <form action="../includes/open.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Open Question Data Modify</legend>
        <form action="../includes/open.inc.php" method="POST">
            <label for="id">Open Question ID to Modify</label>
            <input type="text" name="id"> <br>
            <label for="actual_ans">Actual Answer </label>
            <input type="text" name="actual_ans"><br>
            <label for="coord_id">Coordinator ID </label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>