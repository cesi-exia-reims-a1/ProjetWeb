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
app.get('/api/produit', (req, res) => {  
      con.query("SELECT * FROM produit", function (err, result) {
            if (err) throw err;
            res.json(result);
      });
});

app.get('/api/personne', (req, res) => {  
      con.query("SELECT * FROM personne", function (err, result) {
            if (err) throw err;
            res.json(result);
      });
});

app.get('/api/evenement', (req, res) => {  
      con.query("SELECT * FROM evenement", function (err, result) {
            if (err) throw err;
            res.json(result);
      });
});

app.get('/api/participer', (req, res) => {  
      var sql = "SELECT p.ID_Personne, p.Nom_Personne, p.Prenom_Personne, e.Nom_Evenement, e.ID_Evenement FROM personne p JOIN participer pa ON p.ID_Personne = pa.ID_Personne JOIN evenement e ON e.ID_Evenement = pa.ID_Evenement GROUP BY pa.ID_Personne, pa.ID_Evenement ORDER BY e.Nom_Evenement"
      con.query(sql, function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/api/commande', (req, res) => {  
      var sql = "SELECT ID_Commande, Prix_Total, Prenom_Personne, Nom_Personne from commande JOIN Personne on commande.ID_Personne=personne.ID_Personne"
      con.query(sql, function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/api/photo', (req, res) => {
      var sql = "SELECT * FROM photo"
      con.query(sql, function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/api/commentaire', (req, res) => {
      var sql = "SELECT * FROM commentaire"
      con.query(sql, function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
      });
});

app.get('/api/:categorie', (req, res) => {   
      var adr2 = req.params.categorie
      var sql = "SELECT * FROM produit WHERE Categorie_Produit = ?"
      con.query(sql, [adr2], function (err, result) {
            if (err) throw err;
            if(result == false){
                  res.sendStatus(404);
            } else {
                  res.json(result);
            }
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