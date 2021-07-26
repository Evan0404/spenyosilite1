<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SetorModel;
use App\Models\LiterasiModel;


class SetorController extends Controller
{
    public function add()
    {
        return view('setor');
    }

   

}
