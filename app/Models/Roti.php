<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roti extends Model
{
    use HasFactory;

    protected $table = "roti";

    protected $fillable = [
        "nama",
        "merk",
        "rasa",
        "kadaluarsa",
        "berat",
        "harga",
        "qty"
    ];
}
