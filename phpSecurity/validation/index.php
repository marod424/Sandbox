<?php
if ($_POST) {
    require 'validation.php';

    $rules = array(
        'email' => 'email|required|billtrust',
        'password' => 'required',
        'environment' => 'required|environment'
    );
    $validation = new Validation();

    if ($validation->validate($_POST, $rules) == TRUE) {
        var_dump($_POST);
    } else {
        echo '<ul>';
        foreach ($validation->errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        die('ABORT!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation</title>
</head>
<body>
    <form action="#" method="post" novalidate>
        <input type="hidden" name="environment" id="environment" value="admin">
        <p>
            E-mail: <input type="email" name="email" id="email" required>
        </p>
        <p>
            Password: <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Log in">
        </p>
    </form>
</body>
</html>