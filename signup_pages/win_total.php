<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win the Whole Competition</title>
</head>

<body>
    <fieldset>
        <legend>Win the Whole Competition Data Insert</legend>
        <form action="../includes/win_total.inc.php" method="POST">
            <label for="medal_id">Medal ID</label>
            <input type="text" name="medal_id"><br>
            <label for="team_id">Team ID</label>
            <input type="text" name="team_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Win the Whole Competition Data View</legend>
        <form action="../includes/win_total.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Win the Whole Competition Data Modify</legend>
        <form action="../includes/win_total.inc.php" method="POST">
            <label for="old_medal_id">Medal ID to Modify</label>
            <input type="text" name="old_medal_id"><br>
            <label for="old_team_id">Team ID to Modify</label>
            <input type="text" name="old_team_id"><br>
            <label for="medal_id">New Medal ID</label>
            <input type="text" name="medal_id"><br>
            <label for="team_id">New Team ID</label>
            <input type="text" name="team_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>