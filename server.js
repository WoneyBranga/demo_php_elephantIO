var socket = require('socket.io'),
    express = require('express'),
    http = require('http'),
    logger = require('winston');

logger.remove(logger.transports.Console);
logger.add(logger.transports.Console, {colorize:true, timestamp:true});
logger.info('socketIO > Ouvindo porta! ');
    
var app = express();
var http_server = http.createServer(app).listen(3001);

function emiteNotificacao(http_server) {

    var io = socket.listen( http_server );

    io.sockets.on('connection', function(socket){
        console.log('nova conexao!');

        socket.on('fila1', function(data){
            console.log(data);
            io.emit('fila1',data);
        });

        socket.on('fila2', function(data){
            console.log(data);
            io.emit('fila2',data);
        });

        socket.on('fila3', function(data){
            console.log(data);
            io.emit('fila3',data);
        });

        socket.on('fila4', function(data){
            console.log(data);
            io.emit('fila4',data);
        });

    });
}

emiteNotificacao(http_server);
