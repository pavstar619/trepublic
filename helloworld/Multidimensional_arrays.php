<?php
// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];


$values = array(
    array("Name:" => "pavel",
    "id" => "12"),
    array("Name:" => "ke",
    "id" => "32"),
    array("Name:" => "qwer",
    "id" => "123"),
);
echo "ID for". $values[0]["id"];
?>