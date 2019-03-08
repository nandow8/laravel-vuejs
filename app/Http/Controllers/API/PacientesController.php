<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Paciente;

class PacientesController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function index(){
        return Paciente::all();
    }

    public function show($id){
        return Paciente::find($id);
    }

}