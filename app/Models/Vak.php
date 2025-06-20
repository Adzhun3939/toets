<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'docent_id'];

    public function docent()
    {
        return $this->belongsTo(Docent::class);
    }
}
