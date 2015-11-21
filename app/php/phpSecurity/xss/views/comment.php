<?php

if (!empty($_POST['comment'])) {
    echo '<h1>Your name</h1>';
    echo escape($_POST['name']);
    echo '<h1>Your comment</h1>';
    echo escape($_POST['comment']);
}