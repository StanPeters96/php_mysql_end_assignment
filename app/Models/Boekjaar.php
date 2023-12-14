<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boekjaar extends Model
{
    
    protected $fillable = ['id', 'jaar', 'created_at', 'updated_at'];
    
    use HasFactory;

    //relatie tot contributie
    public function contributie() {
        return $this->hasMany(Contributie::class, 'contributies_id');
    }
}
