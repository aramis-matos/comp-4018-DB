<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Possible Answers for Multiple Choice Questions</title>
</head>

<body>
    <fieldset>
        <legend>Possible Answer Data Entry</legend>
        <form action="../includes/possible_ans.inc.php" method="POST">
            <label for="ans">Possible Answer</label>
            <input type="text" name="ans"> <br>
            <label for="selec_id">Multiple Choice ID</label>
            <input type="text" name="selec_id"> <br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Possible Answer Data</legend>
        <form action="../includes/possible_ans.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Possible Answer Data Modify</legend>
        <form action="../includes/possible_ans.inc.php" method="POST">
            <label for="old_ans">Possible Answer to Modify</label>
            <input type="text" name="old_ans"> <br>
            <label for="old_selec_id">Multiple Choice ID to Modify</label>
            <input type="text" name="old_selec_id"> <br>
            <label for="ans">Possible Answer</label>
            <input type="text" name="ans"> <br>
            <label for="selec_id">Multiple Choice ID</label>
            <input type="text" name="selec_id"> <br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>