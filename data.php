<?php
$word = $_POST['word'];
$text = $_POST['text'];
$censoredText = str_replace($word, '***', $text)
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
        }

        #results {
            width: 30%;
            margin: auto;

            display: flex;
            flex-direction: column;
            align-items: center;

            background-color: #00dd00;
            padding: 20px;

            border-radius: 20px;
        }

        #text-print {
            text-decoration: underline;
        }
    </style>
</head>


<body>
    <div id="results">

        <h4>Questo è il testo che ci hai fornito, e la sua lunghezza</h4>
        <p id="text-print"><?php echo $text ?></p>
        <p><?php echo strlen($text) ?> </p>

        <h4>Qua il testo con la parola censurata:</h4>
        <p id="text-print"><?php echo $censoredText ?></p>
        <p><?php echo strlen($censoredText) ?></p>
    </div>
</body>


</html>