<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Verwerking Form</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">
    <link rel="stylesheet" href="css/PHPCSS.css">
</head>
<body>


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


<div class="masthead d-flex">
    <div class="container text-center my-auto text-div">
        <?php
        if (isset($_POST["InputVoornaam"]) && $_POST["InputVoornaam"] != "") {
            echo "<h1 class='mb-1'>Hallo " . $_POST["InputVoornaam"] . " ";
        } else {
            echo "<h3 class='mb-1'>Je hebt geen voornaam ingevuld.</h3>\n";
        }
        if (isset($_POST["InputAchternaam"]) && $_POST["InputAchternaam"] != "") {
            echo $_POST["InputAchternaam"] . "</h1>\n";
        } else {
            echo "<h3 class='mb-1'>Je hebt geen achternaam ingevuld.</h3>\n";
        }

        if (isset($_POST["Textarea"]) && $_POST["Textarea"] != "") {
            $leeg = False;
            echo "<h3 class='mb-5'>Het antwoord op de vraag '" . $_POST["Textarea"];
        } else {
            $leeg = True;
        }
        if (isset($_POST["InputEmail1"]) && $_POST["InputEmail1"] != "" && $leeg != True) {
            echo "' wordt naar " . $_POST["InputEmail1"] . " verstuurd.<h3>";
        } else {
            $leeg = True;
        }

        if ($leeg == True) {
            echo "<h3>Je hebt geen e-mailadress of vraag ingevuld.</h3>";
        }
        $var = $_POST['exampleCheck1'];
        if (isset($var))  {
            echo "<p>Je hebt jezelf ingeschreven voor de nieuwsbrief.</p>";
        }
        else {
            echo "<p>Je hebt jezelf niet ingeschreven voor de nieuwsbrief.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>



