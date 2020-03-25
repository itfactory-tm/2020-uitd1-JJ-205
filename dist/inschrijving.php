<?php
if (isset($_POST["InputVoornaam"]) && $_POST["InputVoornaam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["InputVoornaam"] . "</p>\n";
} else {
    echo "<p> je hebt geen voornaam ingevuld</p>\n";
}
if (isset($_POST["InputAchternaam"]) && $_POST["InputAchternaam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["InputAchternaam"] . "</p>\n";
} else {
    echo "<p> Je hebt geen achternaam ingevuld</p>\n";
}

if (isset($_POST["InputEmail1"]) && $_POST["InputEmail1"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["InputEmail1"] . "</p>\n";
} else {
    echo "<p> Je hebt geen e-mailadress ingevuld</p>\n";
}
?>
