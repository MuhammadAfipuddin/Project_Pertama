<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasukanController extends Controller
{
    //
    public function index(){
        return view("pemasukan");
    }
}
