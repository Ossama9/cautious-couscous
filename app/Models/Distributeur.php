<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributeur extends Model
{
    protected $primaryKey = 'id_distributeur';

    use HasFactory;

    public function filsm()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}
