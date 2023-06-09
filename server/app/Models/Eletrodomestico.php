<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eletrodomestico extends Model
{
    use HasFactory;

    protected $table = 'eletrodomesticos';

    protected $fillable = [
        'nome',
        'descricao',
        'marca',
        'tensao'
    ];
}
