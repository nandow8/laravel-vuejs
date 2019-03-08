<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MedicoAtestado;

class MedicoAtestadoController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    public function index(){
        return MedicoAtestado::all();
    }

    public function show($id){
        return MedicoAtestado::find($id);
    }
}