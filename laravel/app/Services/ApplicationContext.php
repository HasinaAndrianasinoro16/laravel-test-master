<?php

namespace App\Services;

use App\Models\Site;
use Illuminate\Support\Facades\Auth;

class ApplicationContext
{
    // Récupérer l'utilisateur actuellement authentifié
    public function getCurrentUser()
    {
        return Auth::user();
    }

    // Récupérer un site par défaut
    public function getCurrentSite()
    {
        return Site::first();
    }
}
