var express = require('express'); 
var bodyParser = require("body-parser");
var mysql = require('mysql');
var jwt = require('jsonwebtoken');
let cors = require('cors');
 
// Nous définissons ici les paramètres du serveur.
var hostname = 'localhost'; 
var port = 3000; 
 
var app = express(); 

var con = mysql.createConnection({
      host: "localhost",
      user: "root",
      password: "",
      database: "projetweb"
});

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(cors());

// On renseigne les routes  
app.get('/produit', (req, res) => {
      
      con.query("SELECT * FROM produit", function (err, result) {
            if (err) throw err;
            res.json(result);
      });
});

app.get('/produit/:categorie/:produit_id', (req, res) => {
      
      var adr = req.params.categorie
      var adr2 = req.params.produit_id
      var sql = "SELECT * FROM produit WHERE Categorie_Produit = ? AND ID_produit = ?"
      con.query(sql, [adr, adr2], function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/produit/:categorie', (req, res) => {
      
      var adr = req.params.categorie
      var sql = "SELECT * FROM produit WHERE Categorie_Produit = ?"
      con.query(sql, [adr], function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/evenement', (req, res) => {
      
      con.query("SELECT * FROM evenement", function (err, result) {
            if (err) throw err;
            res.json(result);
      });
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
 
// Démarrer le serveur 
app.listen(port, hostname, function(){
	console.log("Mon serveur fonctionne sur http://"+ hostname +":"+port+"\n"); 
});