<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Answer For Multiple Choice</title>
</head>
<body>
<fieldset>
        <legend>Team Answer For Multiple Choice Data Entry</legend>
        <form action="../includes/team_selec_ans.inc.php" method="POST">
            <label for="team_id">Team ID</label>
            <input type="text" name="team_id"> <br>
            <label for="selec_id">Multiple Choice ID</label>
            <input type="text" name="selec_id"> <br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Answer For Multiple Choice Data View</legend>
        <form action="../includes/team_selec_ans.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Answer For Multiple Choice Data Modify</legend>
        <form action="../includes/team_selec_ans.inc.php" method="POST">
            <label for="old_team_id">Team ID to Modify</label>
            <input type="text" name="old_team_id"> <br>
            <label for="old_selec_id">Multiple Choice ID to Modify</label>
            <input type="text" name="old_selec_id"> <br>
            <label for="team_id">New Team ID</label>
            <input type="text" name="team_id"> <br>
            <label for="selec_id">New Multiple Choice ID</label>
            <input type="text" name="selec_id"> <br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>
</html>