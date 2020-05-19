<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST method</title>
</head>
<body>
<?php
if(isset($_POST["name"])){
    echo "<p>Hi, " . $_POST["name"] . "</p>";
    echo "<p>Hi, " . $_POST["id"] . "</p>";
}
else{
    echo"Enter all";
}
?>
<form method="POST" action="#">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName" placeholder="Enter Name"><br>
    <label for="inputid">Input ID:</label>
    <input type="text" name="id" id="inputid" placeholder="Enter ID">
    <input type="submit" value="Submit">
</form>
</body>