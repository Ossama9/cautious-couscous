<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $primaryKey = 'id_film';

    use HasFactory;

    public function genre()
    {
        return $this->hasOne(Genre::class, 'id_genre', 'id_film');
    }

    public function distributeur()
    {
        return $this->hasOne(Distributeur::class, 'id_distributeur', 'id_film');

    }
}
