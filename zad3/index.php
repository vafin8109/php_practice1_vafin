<?php
$student = array(
    array(
        "name" => "Султан",
        "surname" => "Вафин",
        "group" => "425 ВЕБ",
        "hobbies" => array("Программирование", "Игры", "Музыка"),
        "social_media" => array(
            "VK" => "https://vk.com/id203570285",
            "Telegram" => "https://t.me/useerrrnaaame"
        )
    )
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Информация о студенте</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Информация о студентах</h1>
    <?php foreach ($student as $s) { ?>
        <div class="student-card">
            <h2><?php echo $s["name"] . " " . $s["surname"]; ?></h2>
            <p>Группа: <?php echo $s["group"]; ?></p>
            <p>Хобби:</p>
            <ul>
                <?php foreach ($s["hobbies"] as $hobby) { ?>
                    <li><?php echo $hobby; ?></li>
                <?php } ?>
            </ul>
            <p>Социальные сети:</p>
            <ul>
                <?php foreach ($s["social_media"] as $platform => $username) { ?>
                    <li><?php echo $platform . ": " . $username; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>

</html>