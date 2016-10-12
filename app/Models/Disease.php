<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Symptom;
use App\Models\DiseaseGroup;

class Disease extends Model
{

    protected $fillable = ['name', 'disease_group'];
    public $timestamps = false;

    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'disease_symptom');
    }

    public function diseaseGroup()
    {
        return $this->belongsTo(DiseaseGroup::class, 'disease_group', 'id');
    }
}
