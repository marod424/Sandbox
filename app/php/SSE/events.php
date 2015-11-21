<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

function sendMsg($id, $msg) {
    echo "id: $id" . PHP_EOL;
    echo "data: $msg" . PHP_EOL;
    echo PHP_EOL;
    ob_flush();
    flush();
}

while (true) {
    $serverTime = time();
    sendMsg($serverTime, 'server time: ' . date("h:i:s", time()));    
    sleep(1);
}