<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class PessoaController extends Controller
{
    //
    public function nova(){
        return view('admin.pessoa.nova');
    }
}
