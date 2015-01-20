<?php 
$months = array('january', 'february', 'march', 'april', 'may', 'june');
// var_dump($months);
// echo $months[4];
// print_r($months);
$tuts_sites = array (
    'nettuts' => 'http://net.tutsplus.com',
    'psdtuts' => 'http://psd.tutsplus.com',
    'wptuts' => 'http://wp.tutsplus.com'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <ul>
        <?php 

        // foreach($months as $month) {
        //  echo "<li>$month</li>";
        // }

        // foreach($tuts_sites as $name => $url) {
        //  echo "<li><a href=\"$url\">" . ucwords($name) . "+</a></li>";
        // }

        // foreach($tuts_sites as $name => $url) {
        //     echo "<li><a href='$url'>" . ucwords($name) . "+</a></li>";
        // }

        foreach($tuts_sites as $name => $url) : ?>
            <li>
                <a href="<?= $url; ?>"><?= $name; ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>