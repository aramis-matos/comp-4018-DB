<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Multiple Choice Questions</title>
</head>

<body>
    <fieldset>
        <legend>Exam Multiple Choice Questions Data Insert</legend>
        <form action="../includes/has_selec.inc.php" method="POST">
            <label for="selec_id">Multiple Choice ID</label>
            <input type="text" name="selec_id"><br>
            <label for="exam_id">Exam ID</label>
            <input type="text" name="exam_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Multiple Choice Questions Data View</legend>
        <form action="../includes/has_selec.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Multiple Choice Questions Data Modify</legend>
        <form action="../includes/has_selec.inc.php" method="POST">
            <label for="old_selec_id">Multiple Choice ID to Modify</label>
            <input type="text" name="old_selec_id"><br>
            <label for="old_exam_id">Multiple Choice ID to Modify</label>
            <input type="text" name="old_exam_id"><br>
            <label for="selec_id">New Multiple Choice ID</label>
            <input type="text" name="selec_id"><br>
            <label for="exam_id">New Exam ID</label>
            <input type="text" name="exam_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>