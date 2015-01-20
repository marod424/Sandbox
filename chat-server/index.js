var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('/', function(req, res){
    res.sendfile('index.html');
});

http.listen(3000, function(){
    console.log('listening on *:3000');
});

io.on('connection', function(socket){
    console.log('a user connected');

    socket.on('disconnect', function(){
        console.log('user disconnected');
    });

    socket.on('chat message', function(msg){
        console.log('message: ' + msg);
        io.emit('chat message', msg);
    });
});

// Do stuff like this when organizing file system directory:

// // The client path is for client specific code.
// app.use('/client', express.static(__dirname + '/client'));
// // The common path is for shared code: used by both client and server.
// app.use('/common', express.static(__dirname + '/common'));
// // The root path should serve the client HTML
// app.get('/', function (req, res) {
//     res.sendfile(__dirname + '/client/index.html');
// });
