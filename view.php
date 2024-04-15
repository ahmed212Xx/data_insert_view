<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>VIEW DATA</h1>
    <a href="insert.html"><button type="button">INSERT DATA</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASS</th>
        </tr>
        <?php
$view = "select * from std";
$result = mysqli_query($connection, $view);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) { // Corrected the variable name here
        $id = $row['id'];
        $name = $row['name'];
        $pass = $row['password'];
        echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$pass</td>
        </tr>";
    }
}
?>
    </table>
</body>
</html>
