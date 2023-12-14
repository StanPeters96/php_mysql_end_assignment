<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soortLid extends Model
{
    
    protected $fillable = ['id', 'omschrijving','contributies_id', 'created_at', 'updated_at'];
    
    use HasFactory;

    //relatie tot familie lid
    public function familielid() {
        return $this->hasMany(Familielid::class, 'familielids_id');
    }

    //relatie tot contributie
    public function contributie() {
        return $this->hasMany(Contributie::class, 'contributies_id');
    }

}
