<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comparison Operators</title>
    <style>
        body {
            background-position: center;
            background-repeat: repeat-x;
            background-size: contain;
            background-image: url(img/bg.jpg);
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: white;
            color: #333;
        }
        h1{
            text-align: center;
            color: white ;
        }
        .table {
            border-radius: 15px;
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            border-radius: 15px;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .table th {
            border-radius: 15px;
            background-color: #4CAF50;
            color: white;
        }
        .table tr:nth-child(even) {
            border-radius: 15px;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1> Tabel 5 Dan 4</h1>
<?php
$a = 5;
$b = 4;


echo '<table class="table">';
echo '<tr><th>Expression</th><th>Result</th></tr>';
echo "<tr><td>$a == $b</td><td>" . (($a == $b) ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>$a != $b</td><td>" . (($a != $b) ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>$a > $b</td><td>" . (($a > $b) ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>$a < $b</td><td>" . (($a < $b) ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>($a != $b) && ($a > $b)</td><td>" . ((($a != $b) && ($a > $b)) ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>($a != $b) || ($a > $b)</td><td>" . ((($a != $b) || ($a > $b)) ? 'true' : 'false') . "</td></tr>";
echo '</table>';
?>

</body>
</html>
