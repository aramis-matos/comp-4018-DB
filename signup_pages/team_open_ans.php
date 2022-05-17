<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Team Answer For Open Question</title>
</head>

<body>
    <fieldset>
        <legend>Team Answer For Open Question Data Entry</legend>
        <form action="../includes/team_open_ans.inc.php" method="POST">
            <label for="team_id">Team ID</label>
            <input type="text" name="team_id"> <br>
            <label for="open_id">Open Question ID</label>
            <input type="text" name="open_id"> <br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Answer For Open Question Data View</legend>
        <form action="../includes/team_open_ans.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Answer For Open Question Data Modify</legend>
        <form action="../includes/team_open_ans.inc.php" method="POST">
            <label for="old_team_id">Team ID to Modify</label>
            <input type="text" name="old_team_id"> <br>
            <label for="old_open_id">Open Question ID to Modify</label>
            <input type="text" name="old_open_id"> <br>
            <label for="team_id">New Team ID</label>
            <input type="text" name="team_id"> <br>
            <label for="open_id">New Open Question ID</label>
            <input type="text" name="open_id"> <br>
            <input type="submit" name="modify">
        </form>
    </fieldset>

</body>

</html>