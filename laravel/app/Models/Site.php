<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    // Table associée au modele
    protected $table = 'sites';

    // Clé primaire
    protected $primaryKey = 'id';

    // Colonnes pouvant être massivement assignées
    protected $fillable = ['url'];

    // Définir la relation avec le modele Quote
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
    use HasFactory;
}
