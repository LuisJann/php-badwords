<?php
$nome = "Michele";
var_dump($nome);
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
    <main>
        <h2>Che parola vuoi censurare?</h2>
        <form action="censuredWord.php" method="GET">
            <div>
                <label for="text">Inserisici il testo</label>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="word">Parola censurata</label>
                <input type="text" id="word" name="word">
            </div>
            <button type="submit">invia</button>
        </form>
    </main>

</body>

</html>