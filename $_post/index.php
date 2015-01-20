<?php

// print_r($_POST);

// if ( !empty($_POST) ) {
//     print_r($_POST);
// }

// echo $_SERVER['REQUEST_METHOD'];

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $to = 'marod424@gmail.com';
    $subject = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $headers = 'From: ' . htmlspecialchars($_POST['email']);

    if (mail($to, $subject, $message, $headers)) {
        $status = 'Thank you for your message.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        form ul { margin: 0; padding: 0; }
        form li { list-style: none; margin-bottom: 1em; }
    </style>
</head>
<body>
    
    <h1>Contact Form</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
            </li>

            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </li>

            <li>
                <label for="message">Your Message: </label><br/>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </li>

            <li>
                <input type="submit" value="Go!">
            </li>
        </ul>
    </form>

    <?php if(isset($status)) echo $status ?>
</body>
</html>