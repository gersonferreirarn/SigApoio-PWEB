<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaItemController extends Controller
{
    //
    public function nova(){
        return view('admin.item.categoria.nova');
    }
}
