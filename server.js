var express = require('express');
var app = express();
var path = require('path');
var bodyParser = require('body-parser');
var request = require('request');
var fs = require('fs');

var port = process.env.PORT || 8088;

console.log('Node starting and will be up on port ' + port + '...');
console.log('If that port is not available please change the port in server.js');

app.use(express.static(__dirname + '/'));
console.log(__dirname);

app.use(function(req, res, next){
	res.setHeader('Access-Control-Allow-Origin', '*');
	res.setHeader('Access-Control-Allow-Methods', 'GET, POST');
	res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With, content-type, \Authorization');
	next();
});

//app.use('/',express.static(path.resolve('/')));
//app.use('/',express.static(__dirname + '/'));

// Set up our one route to the index.html file.
app.get('/*', function(req, res) {
	res.sendFile(path.join(__dirname + '/index.html'));
});


// Start the app
app.listen(port);
console.log('Listening on port ' + port + '...');