var express = require('express'); 
var bodyParser = require("body-parser");
var mysql = require('mysql');
var jwt = require('jsonwebtoken');
 
// Nous définissons ici les paramètres du serveur.
var hostname = 'localhost'; 
var port = 3000; 
 
var app = express(); 

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "wsprosit5"
  });
 
// On renseigne les routes  
app.get('/api', (req, res) => {
      res.json({message: 'Welcome to the API'});
});
    
app.post('/api/posts', verifyToken, (req, res) => {  
      jwt.verify(req.token, 'secretkey', (err, authData) => {
            if(err) {
                  res.sendStatus(403);
            } else {
                  res.json({
                  message: 'Post created...',
                  authData          
            });
      }
   });
});
    
app.post('/api/login', (req, res) => {
      // Mock user
      const user = {
        id: 1, 
        username: 'vivien',
        email: 'vivien@gmail.com'
      }
    
      jwt.sign({user}, 'secretkey', { expiresIn: '1h' }, (err, token) => {
            res.json({
            token
        });
      });
});
    

function verifyToken(req, res, next){
      const bearerHeader = req.headers['authorization'];
      if(typeof bearerHeader !== 'undefined'){
            const bearer = bearerHeader.split(' ');
            const bearerToken = bearer[1];
            req.token = bearerToken;
            next();
      } else {
            res.sendStatus(403);
      }
}

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
 
// Démarrer le serveur 
app.listen(port, hostname, function(){
	console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port+"\n"); 
});