<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Medicofichaclinica;

class MedicofichaclinicaController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function index(){
        return Medicofichaclinica::all();
    }


}