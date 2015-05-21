<?php 

require 'pdo.php';
$pdo = connect();

// $email = "matt@mattrods.com";
// $email = "any_value' OR '1' = '1";
// $email = "any_value' OR members.email = '1";
// $email = "any_value' OR users.email = '1";
// $email = "any_value' OR users.email != '1";
// $email = "any_value'; UPDATE users set email='darthvader@thedarkside.com' WHERE email='matt@mattrods.com";
$email = "any_value'; DROP TABLE users;--"; // drops the table

// First security layer: validation
// Second secuirty layer: escaping

// $sql = "SELECT * FROM users WHERE email='$email'";
$sql = "SELECT * FROM users WHERE email=:email";
echo "<p>$sql</p>";

try {
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR); // Third Security Layer: bind parameters
    $query->execute();
    $user = $query->fetch();

    if ($user !== FALSE) {
       // Set up a password reset email
       // echo "<p>A password reset email has been sent to $email</p>";
       echo "<p>A password reset email has been sent to {$user['email']}</p>";
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}