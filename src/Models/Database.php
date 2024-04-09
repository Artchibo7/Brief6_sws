<?php

// namespace src\Models;

// use PDO;
// use PDOException;

// final class Database
// {
//     private $DB;
//     private $config;

//     public function __construct()
//     {
//         $this->config = __DIR__ . '/../../config.php';
//         require_once $this->config;

//         try {
//             $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
//             $this->DB = new PDO($dsn, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//         } catch (PDOException $error) {
//             echo "Erreur de connexion à la Base de Données : " . $error->getMessage();
//         }
//     }
    
//     public function getDB(): PDO
//     {
//         return $this->DB;
//     }

//     public function initialisationBDD(): string
//     {
//         // Vérifier si la base de données est vide
//         if ($this->testIfTableUtilisteursExists()) {
//             return "La base de données semble déjà remplie.";
//         } else {
//             try {
//                 $i = 0;
//                 $migrationExistante = TRUE;
//                 while ($migrationExistante === TRUE) {
//                     $migration = __DIR__ . "/../Migrations/migration$i.sql";

                     
//                     if (file_exists($migration)) {
//                         $sql = file_get_contents($migration);
//                         $this->DB->query($sql);
//                         $i++;
//                     } else {
//                         $migrationExistante = FALSE;
//                     }
//                 }

//                 if ($this->UpdateConfig()) {
//                     return "installation de la Base de Données terminée !";
//                 }
//             } catch (PDOException $erreur) {
//                 return "impossible de remplir la Base de données : " . $erreur->getMessage();
//             }
//         }

//         return "La Base de Données est totalement remplie.";
//     }

//     public function UpdateConfig(): bool
//     {
//         $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
//         $this->DB = new PDO($dsn, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//         $sql = "INSERT INTO " . PREFIXE . "config (config_name, config_value) VALUES ('DB_INITIALIZED', '1')";
//         $this->DB->query($sql);

//         return TRUE;
//     }

//     public function testIfTableUtilisteursExists(): bool
//     {
//         $sql = "SELECT * FROM " . PREFIXE . "utilisateurs";
//         $query = $this->DB->query($sql);
//         $result = $query->fetch();
//         if ($result) {
//             return TRUE;
//         } else {
//             return FALSE;
//         }
//     }
// }