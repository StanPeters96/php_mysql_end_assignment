<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributie extends Model
{
    
    protected $fillable = ['id', 'leeftijd', 'soort_lids_id', 'boekjaars_id', 'bedrag', 'created_at', 'updated_at'];
    
    use HasFactory;

    //relatie tot soort lid
    public function soortlid() {
        return $this->belongsTo(soortLid::class, 'soort_lids_id');
    }

    //relatie tot boekjaar
    public function boekjaar() {
        return $this->belongsTo(Boekjaar::class, 'boekjaars_id');
    }
}
