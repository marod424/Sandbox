<?php

// use validation!
require '../vendor/autoload.php';
require 'escape.php';

$string = '<html><h1>Foo</h1><script type="text/javascript">alert("Foo");</script></html>';
echo escape_html($string);

require 'views/head.php';
require 'views/body.php';
require 'views/comment.php';
require 'views/tail.php';