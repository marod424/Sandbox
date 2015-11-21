<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SSE</title>
    <style>
        h1 { text-align: center; }
        ul {
            list-style: none;
            background-color: rgb(244, 203, 141);
            border: 2px solid rgb(211, 138, 75);
            padding-bottom: 1em;
        }
        li a { text-decoration: none; }
        #output {
            width: 100%;
            border: 1px solid #DDDDDD;
        }
    </style>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    <h1><i class="fa fa-html5 fa-2x"> Server-Sent Events</i></h1>
    <div id="output"></div>

    <script type="text/javascript">
        function init() {

            var source;
            if (!!window.EventSource) {
                source = new EventSource('events.php');

                // show when opening a connection
                source.addEventListener('open', function(e) {
                    document.getElementById('output').innerHTML += 'connection opened<br />';
                   console.log('connection opened');
                }, false);

                // show messages
                source.addEventListener('message', function(e) {
                    document.getElementById('output').innerHTML += e.data + '<br />';
                    console.log(e.data);
                }, false);

                // show any errors
                source.addEventListener('error', function(e) {
                    document.getElementById('output').innerHTML += 'error<br />';
                    console.log('error');
                }, false);
            } else {
                alert("Browser doesn't support Server-Sent Events");
            }
        }

        window.onload = init;
    </script>
</body>
</html>