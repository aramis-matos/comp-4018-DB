<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Medals</title>
</head>

<body>
    <fieldset>
        <legend>Medals Data Insert</legend>
        <form action="../includes/medals.inc.php" method="POST">
            <label for="gold_team_id">Gold Team ID</label>
            <input type="text" name="gold_team_id"><br>
            <label for="silver_team_id">Silver Team ID</label>
            <input type="text" name="silver_team_id"><br>
            <label for="bronze_team_id">Bronze Team ID</label>
            <input type="text" name="bronze_team_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Medals Data View</legend>
        <form action="../includes/medals.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Medals Data Modify</legend>
        <form action="../includes/medals.inc.php" method="POST">
            <label for="id">Medals ID to Modify</label>
            <input type="text" name="id">  <br>
            <label for="gold_team_id">Gold Team ID</label>
            <input type="text" name="gold_team_id"><br>
            <label for="silver_team_id">Silver Team ID</label>
            <input type="text" name="silver_team_id"><br>
            <label for="bronze_team_id">Bronze Team ID</label>
            <input type="text" name="bronze_team_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>