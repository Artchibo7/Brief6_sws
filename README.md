## README - Application de Gestion des Formateurs et Apprentis.

Description
Cette application est conçue pour gérer les formateurs, les promotions et les apprentis. Elle permet d'ajouter, de modifier et de supprimer des formateurs, des promotions ainsi que des apprentis.

Technologies utilisées
JavaScript
PHP
MySQL (pour la base de données)
Prérequis
Avant de commencer à utiliser l'application, assurez-vous d'avoir les éléments suivants installés sur votre machine :

Serveur web (Apache, Nginx, etc.)
PHP (version 7 ou supérieure)
MySQL (ou un autre système de gestion de base de données)
Installation
Clonez ce dépôt sur votre machine :
bash
Copy code
git clone <URL_DU_DÉPÔT>
Importez le fichier de base de données database.sql dans votre système de gestion de base de données MySQL.
Configurez les informations de connexion à la base de données dans le fichier config.php.
Démarrez votre serveur web.
Utilisation
Accédez à l'application via votre navigateur web en ouvrant le fichier index.html.
Utilisez le formulaire pour ajouter, modifier ou supprimer des formateurs, des promotions et des apprentis.
Assurez-vous de remplir tous les champs obligatoires dans les formulaires.
Vous pouvez activer ou désactiver un compte apprenti en modifiant son statut.
Les rôles des apprentis peuvent être définis comme nécessaire (par exemple, apprenti, administrateur, etc.).
Les apprentis ont la responsabilité de valider leur présence. S'ils ne font aucune action dans les 15 minutes suivant le début de la session, ils seront considérés comme absents automatiquement.
Fonctionnalités
Formateurs
Ajouter un formateur avec son nom, prénom, spécialité.
Modifier les détails d'un formateur existant.
Supprimer un formateur de la base de données.
Promotions
Ajouter une promotion avec son nom, sa date de début, sa date de fin et le nombre de places disponibles.
Modifier les détails d'une promotion existante.
Supprimer une promotion de la base de données.
Apprentis
Ajouter un apprenti avec son nom de famille, son prénom, son adresse e-mail et son rôle.
Activer ou désactiver le compte d'un apprenti.
Modifier les détails d'un apprenti existant.
Supprimer un apprenti de la base de données.
Mise en ligne
Pour mettre en ligne cette application, vous pouvez suivre les étapes suivantes :

Hébergez les fichiers de l'application sur votre serveur web.
Importez la base de données sur votre serveur MySQL.
Assurez-vous que les informations de connexion à la base de données dans le fichier config.php sont correctes pour votre environnement de production.
Assurez-vous que les permissions de fichiers et de répertoires sont correctement configurées pour garantir la sécurité de l'application.
Auteur
Ce projet a été réalisé par [Votre Nom].

