<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Verwerking Form</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/PHPCSS.css">
</head>
<body>
<<<<<<< HEAD
<!---->
<!--<header class="masthead d-flex">-->
<!--    <div class="container text-center my-auto text-div">-->
<!--        <h1 class="mb-1">HTMLife</h1>-->
<!--        <h3 class="mb-5">-->
<!--            <em>Webdesigners tot uw dienst.</em>-->
<!--        </h3>-->
<!--        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Ontdek meer!</a>-->
<!--    </div>-->
<!--    <div class="overlay"></div>-->
<!--</header>-->


<div class="masthead d-flex omslag">
    <div class="container text-center my-auto text-div">
        <?php
        if (isset($_POST["InputVoornaam"]) && $_POST["InputVoornaam"] != "") {
            echo "<p> Hallo " . $_POST["InputVoornaam"] . " ";
        } else {
            echo "<p>je hebt geen voornaam ingevuld</p>\n";
        }
        if (isset($_POST["InputAchternaam"]) && $_POST["InputAchternaam"] != "") {
            echo $_POST["InputAchternaam"] . "</p>\n";
        } else {
            echo "<p> Je hebt geen achternaam ingevuld</p>\n";
        }

        if (isset($_POST["Textarea"]) && $_POST["Textarea"] != "") {
            echo "<p> Het antwoord op de vraag '" . $_POST["Textarea"] . "' wordt naar " . $_POST["InputEmail1"] . " verstuurd </p>";
        } else {
            echo "<p> Je hebt geen vraag of e-mailadress ingevuld</p>\n";
        }
        ?>
    </div>
</div>
</body>
</html>



