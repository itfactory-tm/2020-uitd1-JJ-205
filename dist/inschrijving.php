<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Werwerking Form</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/PHP-CSS.css">
</head>
<body>

<div class="">
    <?php
    if (isset($_POST["InputVoornaam"]) && $_POST["InputVoornaam"] != "") {
        echo "<p> Hallo " . $_POST["InputVoornaam"]." ";
    } else {
        echo "<p>je hebt geen voornaam ingevuld</p>\n";
    }
    if (isset($_POST["InputAchternaam"]) && $_POST["InputAchternaam"] != "") {
        echo $_POST["InputAchternaam"] . "</p>\n";
    } else {
        echo "<p> Je hebt geen achternaam ingevuld</p>\n";
    }

    if (isset($_POST["InputEmail1"]) && $_POST["InputEmail1"] != "") {
        echo "<p> Het antwoord op de vraag '" . $_POST["Vraag"] . "' wordt naar " . $_POST["InputEmail1"]." verstuurd </p>";
    } else {
        echo "<p> Je hebt geen e-mailadress ingevuld</p>\n";
    }
    ?>
</div>
</body>
</html>



