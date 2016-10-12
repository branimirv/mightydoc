<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Disease;

class ApiController extends Controller
{
     public function index()
    {
        $diseases = Disease::with('diseaseGroup')->with('symptoms')->get();
        return json_encode($diseases);
    }
}
 