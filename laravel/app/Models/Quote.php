<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{

    // Table associee au modele
    protected $table = 'quotes';

    // Cle primaire de la table dans la base de donne
    protected $primaryKey = 'id';

    // Colonnes pouvant etre massivement assignées
    protected $fillable = ['site_id', 'destination_id', 'date_quoted'];

    // Definir la relation avec le modele Site
    public function site(){
        return $this->belongsTo(Site::class);
    }

    // Definir la relation avec le modele Destination
    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    // Methode pour rendre une citation en HTML
    public static function renderHtml($quote){
        return '<p>' . htmlspecialchars($quote->id, ENT_QUOTES, 'UTF-8') . '</p>';
    }

    // Methode pour rendre une citation en texte brut
    public static function renderText($quote){
        return (string) $quote->id;
    }
    use HasFactory;
}
