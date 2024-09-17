<?php
$circles = array(
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
);

asort($circles);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Кружки</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Кружки</h1>
        <table class="circle-table">
            <thead>
                <tr>
                    <th>Кружок</th>
                    <th>Фамилия</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($circles as $circle => $name) {
                    echo "<tr><td>" . $circle . "</td><td>" . $name . "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
