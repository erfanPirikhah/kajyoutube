<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class AdminController extends Controller
{
    public function panel()
    {
        return view('Admin.part.panel');
    }

    
}
