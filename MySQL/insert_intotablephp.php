<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Print host information
    echo "Connect Successfully. Host info: " . 
$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

try{
    $sql = "INSERT INTO persons(first_name,last_name,email) VALUES
    ('Clark', 'Kent', 'clarkkent@mail.com'),
    ('John', 'Carter', 'johncarter@mail.com')
    ";
    $pdo->exec($sql);
    echo "Records created successfully";
}
catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);
?>