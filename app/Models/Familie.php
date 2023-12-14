<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familie extends Model
{

    protected $fillable = ['id', 'name_family', 'adress', 'created_at', 'updated_at'];

    use HasFactory;

        //relatie tot  familie
        public function familielid() {
            return $this->hasMany(Familielid::class, 'familielids_id');
        }
}
