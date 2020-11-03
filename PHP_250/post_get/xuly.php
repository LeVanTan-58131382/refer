<?php

if (isset($_POST["gui"])) {
    if (isset($_POST["name"]) && isset($_POST["age"])) {
        $name = $_POST["name"];
        $age = $_POST["age"];

        echo "Name: " . $name . " age " . $age . "<br>";

        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        // Array
        // (
        //     [name] => tan
        //     [age] => 21
        //     [gui] => 
        // )

        echo $_REQUEST["name"];
        echo $_REQUEST["age"];

        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
    }
}
