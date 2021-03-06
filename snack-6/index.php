<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack-6</title>
</head>
<body>
    <main>
        <p class="gray">
            <?php 
                foreach ($db['teachers'] as $teacher) {
                    echo $teacher['name'] . " " . $teacher['lastname'] . '<br>';
                }
            ?>
        </p>
        <p class="green">
                <?php 
                foreach ($db['pm'] as $pm) {
                    echo $pm['name'] . " " . $pm['lastname'] . '<br>';
                }
            ?>
        </p>
    </main>
</body>
</html>