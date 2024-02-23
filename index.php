<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuriamo</title>
    <style>
        /* Le tue regole CSS qui */
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
        }

        h3 {
            text-align: center;
        }

        form {
            width: 30%;
            margin: auto;

            display: flex;
            flex-direction: column;
            align-items: center;

            background-color: #00dd00;
            padding: 20px;

            border-radius: 20px;
        }



        /* Altre regole CSS necessarie */
    </style>

</head>

<body>
    <h3>Dicci quale parola vuoi censurare all'interno del testo</h3>

    <form action="data.php" method="POST">
        <input name="word" type="text" placeholder="Dimmi la parola:">
        <br>
        <textarea name="text" rows="8" cols="50" placeholder="Qui il testo"></textarea>
        <br>
        <input type="submit">
    </form>
</body>



</html>