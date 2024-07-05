<?php

namespace App\Traits;


// * SingletonTrait implémente le modèle de conception Singleton
// * pour garantir qu'une classe n'a qu'une seule instance.
trait SingletonTrait
{
    private static $instance;

//  Retourne l'instance unique de la classe.
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

//     Constructeur protégé pour empêcher l'instanciation directe.
    protected function __construct()
    {
    }

//  Empêche le clonage de l'instance.
    protected function __clone()
    {
    }


// Empêche la désérialisation de l'instance.
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}
