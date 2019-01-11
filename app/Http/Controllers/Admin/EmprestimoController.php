<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmprestimoController extends Controller
{
    //
    public function novo(){
        return view('admin.emprestimo.novo');
    }

    public function baixa(){
        return view('admin.emprestimo.baixa');
    }
}
