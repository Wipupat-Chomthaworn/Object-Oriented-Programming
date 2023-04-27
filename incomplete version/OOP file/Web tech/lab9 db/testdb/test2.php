<!DOCTYPE html>
<html lang="en">
<!-- owen -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        label {
            font-weight: bold;
            padding-left: 10px;
        }
        body{
            padding: 1%;
        }
    </style>
</head>
<body>

    <p class="h1">Account Form</p>
    <form action="" method="POST">
        <label>Email :</label>
        <input type="text" name="email"><br><br>
        <label>Name :</label>
        <input type="text" name="name"><br><br>
        <label>Password :</label>
        <input type="text" name="password"><br><br>
<br><br>
        <button name="Submit" name="Submit" class="btn btn-primary">Submit</button>
    </form>
    <h1>List of account</h1>
    <?php
    // Connect to Database
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('Account.db');
        }
    }

    // Open Database
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "<br>";
    }

    //Add data to db if click submit

    if (isset($_POST["Submit"])) {
        $em_email = $_POST["email"];
        $em_name = $_POST["name"];
        $em_password = $_POST["password"];


        $sql = <<<EOF
       INSERT INTO ACCOUNT (NAME,EMAIL,PASSWORD)
       VALUES ('$em_name', '$em_email', '$em_password');
   EOF;
        $ret = $db->exec($sql);
        // if (!$ret) {
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "Records created successfully<br>";
        // }
    }
    // SQL SELECT
    // $sqlQ = "SELECT * from ACCOUNT";
    // $ret = $db->query($sqlQ);

    ?>
    <table class="table">

        <tr>
            <thead>
                <td>ID </td>
                <td>Name </td>
                <td>Password</td>
            </thead>
        </tr>
        <?php while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['EMAIL'] . "</td>";
            echo "<td>" . $row['NAME'] . "</td>";
            echo "<td>" . $row['PASSWORD'] . " </td>";
      echo "</tr>";
            // $em_email = $row['ID'];
        } ?>
    </table>
    </form>
</body>

</html>