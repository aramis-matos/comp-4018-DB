<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
    <fieldset>
        <legend>Student Data Insert</legend>
        <form action="../includes/student.inc.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="age">Age</label>
            <input type="text" name="age"><br>
            <label for="grade">Grade</label>
            <input type="text" name="grade"><br>
            <label for="school">School</label>
            <input type="text" name="school"><br>
            <label for="coord_id">Coordinator ID</label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="insert">
        </form>
    </fieldset>

    <fieldset>
        <legend>Student Data View</legend>
        <form action="../includes/student.inc.php" method="POST">
            <input type="submit" name="view">
        </form>
    </fieldset>

    <fieldset>
        <legend>Student Data Modify</legend>
        <form action="../includes/student.inc.php" method="POST">
            <label for="id">Student ID to Modify</label>
            <input type="text" name="id"><br>
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            <label for="age">Age</label>
            <input type="text" name="age"><br>
            <label for="grade">Grade</label>
            <input type="text" name="grade"><br>
            <label for="school">School</label>
            <input type="text" name="school"><br>
            <label for="coord_id">Coordinator ID</label>
            <input type="text" name="coord_id"><br>
            <input type="submit" name="modify">
        </form>
    </fieldset>
</body>

</html>