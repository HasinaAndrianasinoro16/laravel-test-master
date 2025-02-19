<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{

    // Table associée au modele
    protected $table = 'destinations';

    // Cle primaire
    protected $primaryKey = 'id';

    // Colonnes pouvant être massivement assignées
    protected $fillable = ['country_name', 'conjunction', 'name', 'computer_name'];

    // Définir la relation avec le modèle Quote
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
    use HasFactory;
}
