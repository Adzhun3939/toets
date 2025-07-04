<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docent extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'hobby'];

    public function vaks()
    {
        return $this->hasMany(Vak::class);
    }
}
