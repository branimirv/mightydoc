<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Disease;

class Symptom extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'body_area'];

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_symptom');
    }
    public function bodyArea()
    {
        return $this->belongsTo(BodyArea::class, 'body_area', 'id');
    }
}
