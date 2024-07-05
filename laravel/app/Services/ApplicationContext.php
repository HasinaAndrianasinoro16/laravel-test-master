<?php

namespace App\Services;

use App\Models\Site;
use App\Models\User;
use Faker\Factory as Faker;
use App\Traits\SingletonTrait;
use Illuminate\Support\Facades\Auth;

class ApplicationContext
{
    use SingletonTrait;

    private $currentSite;
    private $currentUser;

//     * Constructeur protégé initialisant le contexte de l'application
//     * avec des données factices.
    protected function __construct()
    {
        $faker = Faker::create();
        $this->currentSite = new Site(['id' => $faker->randomNumber(), 'url' => $faker->url]);
        $this->currentUser = new User(['id' => $faker->randomNumber(), 'firstname' => $faker->firstName, 'lastname' => $faker->lastName, 'email' => $faker->email]);
    }

//Retourne le site actuel.
    public function getCurrentSite()
    {
        return $this->currentSite;
    }

// Retourne l'utilisateur actuel.
    public function getCurrentUser()
    {
        return $this->currentUser;
    }
}
