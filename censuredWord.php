<?php
$text = $_GET["text"];
$word = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h2>Testo originale</h2>
        <p>
            <?php
            echo $text;
            ?>
        </p>
        <p>
            il tuo testo è lungo <?php echo strlen($text) ?> caratteri
        </p>
    </section>

    <section>
        <h2>Testo censurato</h2>
        <p>
            <?php
            $censured_text = str_replace($word, "***", $text);
            echo $censured_text;
            ?>
        </p>
        <p>
            il tuo testo è lungo <?php echo strlen($censured_text) ?> caratteri
        </p>
    </section>
</body>

</html>