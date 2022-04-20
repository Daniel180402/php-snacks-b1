<?php
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>
<body>
    <ul>
        <?php
            $postsValues = array_values($posts);
            $postsKeys = array_keys($posts);
            for($i = 0; $i < count($postsKeys) ; $i++){?>
                <h4>Post in date: <?php echo $postsKeys[$i]; ?></h4>
                <?php for($postIndex = 0 ; $postIndex < count($postsValues[$i]) ; $postIndex++){ ?>
                    <h5>
                        <?php echo $postsValues[$i][$postIndex]["title"]; ?>
                    </h5>
                    <p>
                        <em><?php echo $postsValues[$i][$postIndex]["author"]; ?></em>
                    </p>
                    <p>
                        <?php echo $postsValues[$i][$postIndex]["text"]; ?>
                    </p>
                <?php } ?>

            <?php } ?>
    </ul>
</body>
</html>