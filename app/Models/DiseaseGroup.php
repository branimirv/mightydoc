<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Disease;

class DiseaseGroup extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function diseases()
    {
        $this->hasMany(Disease::class);
    }
}
