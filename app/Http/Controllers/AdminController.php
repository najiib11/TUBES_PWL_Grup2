<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin");
    }

    public function viewRole(){
        return view("admin.role");
    }

    public function viewLaporan(){
        return view("admin.laporan");
    }

    public function viewPengaturan(){
        return view("admin.pengaturan");
    }
}
