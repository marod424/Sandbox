<?php
// function.php?id=1&template=home
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$template = isset($_GET['template']) ? htmlentities($_GET['template']) : 'home';

// validate
$valid = array('home');
if (!is_int($id) && !in_array($template, $valid)) {
    // ABORT!
    die('Page cannot be found');
}

// this is bad coding practice, but for demonstration purposes
echo $template($id);

// this is the right way: 
// no dynamic function call; separation of concerns
$data = get_page_data($id);
$output = get_template($template, $data);
echo $output;

function get_template($template, $data) {
    
}

function get_page_data($id) {
    return array('title' => 'Some title');
}

function home($id) {
    $data = get_page_data($id);
    $html = "<html><h1>{$data['title']}</h1></html>";
    return $html;
}