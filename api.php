<?php
$db = new SQLite3('database.db');

// Exemple de requête pour créer une table Utilisateur
$db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)');
?>
