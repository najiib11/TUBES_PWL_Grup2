<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionItem;
use App\Models\User;

class ManagerController extends Controller
{
    public function index(){
        return view("manager", ["transactionItem" => TransactionItem::all(), "user" => User::where(["name" => "kasir"])]);
    }
}
