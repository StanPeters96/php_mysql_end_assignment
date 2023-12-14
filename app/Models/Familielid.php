<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familielid extends Model
{
    
    protected $fillable = ['id', 'name', 'dateOfBirth','soort_lids_id', 'families_id', 'created_at', 'updated_at'];

    use HasFactory;

    //relatie tot soort lid
    public function soortlid() {
        return $this->belongsTo(soortLid::class, 'soort_lids_id');
    }

    //relatie tot soort familie
    public function familie() {
        return $this->belongsTo(Familie::class, 'families_id');
    }
}
