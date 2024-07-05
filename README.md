# LARAVEL Matser Test SAYNA


## Introduction
Ce projet consiste à refactoriser un projet PHP existant en utilisant le framework Laravel. L'objectif est de rendre le code plus compréhensible et maintenable pour les futurs développeurs qui travailleront sur ce projet.

### processus et commande executer
voici le processus que j'ai suivis pour la refactprisation:
 - creation du projet laravel `composer create-project --prefer-dist laravel/laravel laravel`
 - creation et configuration de la base de donnees dans `.env`
 - creation des models:
    - `php artisan make:model Destination`
    - `php artisan make:model Quote`
    - `php artisan make:model Template`
    - `php artisan make:model user`
    - `php artisan make:model Sites`
  - creation des fichier php :
     - `app/Traits/SingleTraits.php`
     - `app/Context/ApplicationContext`
     - `app/Template/TemplateManager`
       
pour la refactorisation j'ai juger preferable de ne pas utiliser les fonctionalites de laravel notement le `Helper` pour creer `SingleTraits.php` car sa aurais changer le code et que les Helpers je ne connais que quelque notions et
je l'ai rarement utiliser. Je n'ai pas aussi utiliser de migrations ni seeders car les tables sont deja present dans la base de données.

### principes suivis
voici les principes que j'ai suivis pour la refactorisation (probleme et amelioration):

 - #### clarete et nom des variables
   - **Probleme:** Les noms des variables, des parametres et des méthodes dans le code original étaient parfois vagues ou ambigus.
   - **Amelioration:** Les noms de variables, de parametre et de methodes ont été rendus plus explicites pour ameliorer la lisibilité et la comprehension du code.
   - **Avantage:** le code est plus facile a lire et comprehensible, de plus on comprend mieux le role de chaque variable et fonction.
 - #### Les Exceptions
   - **probleme:** les exceptions du code original sont mal approprié.
   - **Ameliorations:** j'ai ajouté des verification et ajusté la gestion des erreurs.
   - **Avantage:** cette refactorisation a permis de capturer et mieux traiter les erreurs de maniere efficace.
 - #### Les relations Eloquent
   - **Probleme:** le code original melange la logique metier et presentation mais.
   - **Ameliorations:** creation de TemplateManager pour la gestion des Templates.
   - **Avantage:** Une separation claire entre la logique metier et la présentation rend le code plus modulaire et testable.
