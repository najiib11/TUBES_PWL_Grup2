<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Staf;

class ProfileController extends Controller
{

    public function index(){
        return view("profile");
    }

    public function edit(){
        return view("edit-page");
    }

    public function saveEdit(Request $request){

        $data_exists = Storage::disk("public")->exists($request->gambarUrl->getClientOriginalName());
        if($data_exists){
            Storage::disk("public")->put("images/". $request->gambarUrl->getClientOriginalName(), file_get_contents($request->gambarUrl->getRealPath()));
        }
        Staf::where(["nama" => $request->nama])->update([
            "nama" => $request->nama,
            "gambarUrl" => "storage/images/".$request->gambarUrl
        ]);
        return redirect()->route("profile.index")->with(["success-edit"=> "Perubahan akun berhasil diterapkan"]);
    }
    /**
     * Display the user's profile form.
     */
    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, ): RedirectResponse
    {
        // $request->validateWithBag('userDeletion', [
        //     'password' => ['required', 'current_password'],
        // ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
