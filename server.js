const express = require('express');
const mysql = require('mysql');

// Créer une connexion à la base de données MySQL
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'alex50ab3',
    database: 'projetweb'
});

// Connecter MySQL
connection.connect((err) => {
    if (err) {
        console.error('Erreur de connexion à la base de données MySQL : ' + err.stack);
        return;
    }
    console.log('Connecté à la base de données MySQL');
});

const app = express();

// Route pour récupérer des données à partir de la base de données
app.get('/', (req, res) => { 
    // Requête SQL pour récupérer des données de votre table
    connection.query('SELECT * FROM utilisateur', (err, results) => {
        if (err) {
            console.error('Erreur lors de l\'exécution de la requête SQL : ' + err.stack);
            return res.status(500).send('Erreur lors de la récupération des données');
        }
        // Envoyer les résultats au client
        res.json(results);
    });
});

// Port sur lequel le serveur écoutera
const port = 3000;

// Démarrer le serveur
app.listen(port, () => {
    console.log(`Serveur API démarré sur le port ${port}`);
});
