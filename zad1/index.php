<?php
$students = ["Петров", "Иванов", "Сидоров", "Кузнецов", "Смирнов", "Белов", "Соколов"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Список студентов</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Список студентов</h1>
        <ul class="student-list">
            <?php
            foreach ($students as $student) {
                echo "<li>" . $student . "</li>";
            }
            ?>
        </ul>
        <div class="info">
            <p>Количество студентов: <?php echo count($students); ?></p>
            <?php
            if (in_array("Сидоров", $students)) {
                echo "<p>Сидоров есть в списке.</p>";
            } else {
                echo "<p>Сидорова нет в списке.</p>";
            }
            $expelled = array_pop($students);
            echo "<p>Удалена фамилия: " . $expelled . "</p>";
            ?>
        </div>
    </div>
</body>
</html>
