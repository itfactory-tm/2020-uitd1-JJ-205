<?php
if (isset($_POST["InputVoornaam"]) && $_POST["InputVoornaam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["InputVoornaam"] . "</p>\n";
} else {
    echo "<p> je hebt geen voornaam ingevuld</p>\n";
}

?>
