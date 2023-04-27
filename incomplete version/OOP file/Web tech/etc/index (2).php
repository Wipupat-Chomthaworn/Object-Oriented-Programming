<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>2</title>
</head>
<body>
    <p class="h1">Employee Form</p>
    <form action="form.php" method="POST">
        <label>ID :</label>
        <input type="number" name="id"><br><br>
        <label>Name :</label>
        <input type="text" name="name"><br><br>
        <label>Age :</label>
        <input type="number" name="age"><br><br>
        <label>Salary :</label>
        <input type="number" name="salary"><br><br>
        <label>Address :</label>
        <textarea name="address" id="address" cols="30" rows="4"></textarea><br><br>
        <button name="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
        // Connect to Database 
        class MyDB extends SQLite3 {
            function __construct() {
                $this->open('company.db');
            }
        }

        // Open Database 
        $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        } else {
            echo "<br>";
        }

        // Query process 
        

        // Close database
        $db->close();

    ?>
</body>
</html>