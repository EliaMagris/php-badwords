<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $textFile = 'Se ni mondo esistesse un po di bene
e ognun si considerasse suo fratello
ci sarebbe meno pensieri e meno pene
e il mondo ne sarebbe assai più bello'
        ?>
    <?php
    $replaceV = '***'
        ?>

    <h2>
        <?php echo $textFile ?>
    </h2>
    <p> lunghezza testo =
        <?php echo (strlen($textFile)) ?> caratteri
    </p>

    <form action="" method="GET">
        <label for="replace"></label>
        <input placeholder="filtra una parola" type="text" name="replace">

        <button type="submit">Invio</button>
    </form>

    <p>
        <?php echo str_replace($_GET['replace'], $replaceV, $textFile) ?>
    </p>
    <p> lunghezza nuovo testo
        <?php echo (strlen(str_replace($_GET['replace'], $replaceV, $textFile))) ?> caratteri
    </p>
</body>

</html>