<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(){
        return view("warehouse");
    }

    public function inputData(){
        return view("warehouse.input");
    }

}
