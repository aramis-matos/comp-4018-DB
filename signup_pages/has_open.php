<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Open Questions</title>
</head>

<body>
    <fieldset>
        <legend>Exam Open Questions Data Insert</legend>
        <form action="../includes/has_open.inc.php" method="POST">
            <label for="exam_id">Exam ID</label>
            <input type="text" name="exam_id"><br>
            <label for="open_id">Open Question ID</label>
            <input type="text" name="open_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Open Questions Data View</legend>
        <form action="../includes/has_open.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Open Questions Data modify</legend>
        <form action="../includes/has_open.inc.php" method="POST">
            <label for="old_exam_id">Exam ID to Modify</label>
            <input type="text" name="old_exam_id"><br>
            <label for="old_open_id">Open Question ID to Modify</label>
            <input type="text" name="old_open_id"><br>
            <label for="exam_id">New Exam ID</label>
            <input type="text" name="exam_id"><br>
            <label for="open_id">New Open Question ID</label>
            <input type="text" name="open_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>