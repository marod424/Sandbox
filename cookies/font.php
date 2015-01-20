<?php
    
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('fontSize', (int) $_POST['font-size'], time() + 60 * 60);
    header('Location: font.php');
}

$font_size = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px';

// if ( isset($_POST['font-size']) ) {
//     $font_size = $_POST['font-size'];
// } else if ( isset($_COOKIE['fontSize']) ) {
//     $font_size = $_COOKIE['fontSize'];
// } else {
//     $font_size = 16;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Font Cookie</title>
    <style>
        body {font-size: <?= htmlspecialchars($font_size) . ';'; ?>}
        li { list-style: none; }
        ul, li { margin:0; padding: 0; }      
    </style>
</head>
<body>

    <form action="" method="post">
        <li>
            <label for="font-size">Your Preferred Font Size?</label><br/>
            <select name="font-size" id="font-size">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </li>

        <li>
            <input type="submit" name="Submit">
        </li>
    </form>

    <h2>My Page</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Magnam molestiae, veniam eius rem excepturi, ullam odio culpa, 
        mollitia et aut sed unde nostrum accusamus, 
        doloremque amet animi neque voluptatibus ratione.
    </p>
    
</body>
</html>