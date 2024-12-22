<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lek extends Model
{
    use HasFactory;

    protected $fillable = ['nazwa', 'opis_leku', 'rozmiar', 'ilosc', 'cena'];

    protected $table = 'lek';
}