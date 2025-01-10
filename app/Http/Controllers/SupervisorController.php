<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Staf;

class SupervisorController extends Controller
{
    public function index(){
        return view("supervisor", ["product" => Product::all(), "staf" => Staf::all()]);
    }

}
