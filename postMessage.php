<?php

    function postMessage() {
        echo $_POST["name"] . ": " . $_POST["message"];
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(!empty($_POST["name"]) and !empty($_POST["message"])) {
            postMessage();
            Header("Location: index.php?success=".true);
        } else {
            echo "No name / message value";
            Header("Location: index.php?success=".false);
        }
    }
?>