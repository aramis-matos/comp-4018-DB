<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
</head>

<body>
    <fieldset>
        <legend>Team Data Insert</legend>
        <form action="../includes/team.inc.php" method="POST">
            <label for="score">Team Score</label>
            <input type="text" name="score"><br>
            <label for="est_1">Student 1 ID</label>
            <input type="text" name="est_1"><br>
            <label for="est_2">Student 2 ID</label>
            <input type="text" name="est_2"><br>
            <label for="est_3">Student 3 ID</label>
            <input type="text" name="est_3"><br>
            <label for="uni_id">University ID</label>
            <input type="text" name="uni_id"><br>
            <label for="coord_id">Coordinator ID</label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Data View</legend>
        <form action="../includes/team.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Team Data Modify</legend>
        <form action="../includes/team.inc.php" method="POST">
            <label for="id">Team ID</label>
            <input type="text" name="id"><br>
            <label for="score">Team Score</label>
            <input type="text" name="score"><br>
            <label for="est_1">Student 1 ID</label>
            <input type="text" name="est_1"><br>
            <label for="est_2">Student 2 ID</label>
            <input type="text" name="est_2"><br>
            <label for="est_3">Student 3 ID</label>
            <input type="text" name="est_3"><br>
            <label for="uni_id">University ID</label>
            <input type="text" name="uni_id"><br>
            <label for="coord_id">Coordinator ID</label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>