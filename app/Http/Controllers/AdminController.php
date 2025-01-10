<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use App\Models\User;

use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct(){
    }
    public function index(){
        return view("admin");
    }

    public function viewListUser(){
        return view("admin.list_user", ["staf" => Staf::with("user")->get()]);
    }

    public function viewInput(){
        return view("admin.input");
    }

    public function viewLaporan(){
        return view("admin.laporan");
    }

    public function viewPengaturan(){
        return view("profile");
    }

<<<<<<< HEAD
    public function listUser(){
        return view("admin.list_user");
=======
    public function viewEditUser($id){
        return view("admin.edit-user", ["id" => $id, "role" => Role::all()]);
    }

    public function saveEdit(Request $request, $id){
        $staf = User::find($id)->update($request->all());
        if($staf){
            return redirect()->route("admin.list")->with(["success-edit" => "Perubahan data berhasil diterapkan"]);
        }
        return redirect()->route("admin.list")->with(["fail-edit" => "Perubahan data gagal diterapkan"]);
    }

    public function deleteUser($id){
        $user = Staf::with("user")->find($id);
        $user->user->delete();
        $user->delete();

        return redirect()->back()->with(["success-delete" => "Data berhasil dihapus"]);
>>>>>>> f8ac8ce8e8f819d2b718d71ff03b81e67d16eb90
    }
}
