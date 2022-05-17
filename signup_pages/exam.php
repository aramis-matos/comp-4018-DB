<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Exam</title>
</head>

<body>
    <fieldset>
        <legend>Exam Data Entry</legend>
        <form action="../includes/exam.inc.php" method="POST">
            <label for="s1">Multiple Choice Question 1</label>
            <input type="text" name="s1"><br>
            <label for="s2">Multiple Choice Question 2</label>
            <input type="text" name="s2"><br>
            <label for="s3">Multiple Choice Question 3</label>
            <input type="text" name="s3"><br>
            <label for="s4">Multiple Choice Question 4</label>
            <input type="text" name="s4"><br>
            <label for="s5">Multiple Choice Question 5</label>
            <input type="text" name="s5"><br>
            <label for="s6">Multiple Choice Question 6</label>
            <input type="text" name="s6"><br>
            <label for="s7">Multiple Choice Question 7</label>
            <input type="text" name="s7"><br>
            <label for="s8">Multiple Choice Question 8</label>
            <input type="text" name="s8"><br>
            <label for="o1">Open Question 1</label>
            <input type="text" name="o1"><br>
            <label for="o2">Open Question 2</label>
            <input type="text" name="o2"><br>
            <label for="o3">Open Question 3</label>
            <input type="text" name="o3"><br>
            <label for="o4">Open Question 4</label>
            <input type="text" name="o4"><br>
            <label for="admin_id">Admin ID</label>
            <input type="text" name="admin_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Data View</legend>
        <form action="../includes/exam.inc.php" method="POST"><input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Exam Data Modify</legend>
        <form action="../includes/exam.inc.php" method="POST">
            <label for="id">Exam ID to Modify</label>
            <input type="text" name="id"><br>
            <label for="s1">Multiple Choice Question 1</label>
            <input type="text" name="s1"><br>
            <label for="s2">Multiple Choice Question 2</label>
            <input type="text" name="s2"><br>
            <label for="s3">Multiple Choice Question 3</label>
            <input type="text" name="s3"><br>
            <label for="s4">Multiple Choice Question 4</label>
            <input type="text" name="s4"><br>
            <label for="s5">Multiple Choice Question 5</label>
            <input type="text" name="s5"><br>
            <label for="s6">Multiple Choice Question 6</label>
            <input type="text" name="s6"><br>
            <label for="s7">Multiple Choice Question 7</label>
            <input type="text" name="s7"><br>
            <label for="s8">Multiple Choice Question 8</label>
            <input type="text" name="s8"><br>
            <label for="o1">Open Question 1</label>
            <input type="text" name="o1"><br>
            <label for="o2">Open Question 2</label>
            <input type="text" name="o2"><br>
            <label for="o3">Open Question 3</label>
            <input type="text" name="o3"><br>
            <label for="o4">Open Question 4</label>
            <input type="text" name="o4"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>