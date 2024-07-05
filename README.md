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
  - creation des fichier php :
     - `app/Traits/SingleTraits.php`
     - `app/Context/ApplicationContext`
     - `app/Template/TemplateManager`
       
pour la refactorisation j'ai juger preferable de ne pas utiliser les fonctionalites de laravel notement le `Helper` pour creer `SingleTraits.php` car sa aurais changer le code et que les Helpers je ne connais que quelque notions et
je l'ai rarement utiliser.
