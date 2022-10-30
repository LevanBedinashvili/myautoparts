<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\About;
use App\Models\Service_list;
use App\Models\Photo_gallery;
use App\Models\Video_gallery;
use App\Models\Blogs;
use App\Models\Filialebi;
use App\Models\Mxileba;
use App\Models\Main_page;
use App\Models\User;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::orderBy('id', 'DESC')->get();
        return view('adminadmin.list_user', compact('users'));
    }

    public function create() {
        return view('adminadmin.add_user');
    }


    public function edit($id) {
        $user = User::find($id);
        return view('adminadmin.edit_user',compact('user'));
    }

    public function update(Request $request, $id) {

        try {

            $this->validateRequest($request); //გადმოცემული პარამეტრების ვალიდაცია

            $User = User::find($id);
            $User->name = $request->name;
            $User->email = $request->email;
                if($request->password == $request->repassword AND !empty($request->password)){ $User->password = Hash::make($request->password); }
            $User->save();

            return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('Error', 'მოცემული ელ. ფოსტით მომხმარებელი უკვე არსებობს');
        }

    }

    public function destroy($id) {
        $User = new User();
        $User->destroy($id);
        return redirect()->back()->with('Success', 'წარმატებით წაიშალა');
    }

    public function settings()
    {
        return view('adminadmin.settings');
    }

    public function updatePassword(Request $request, $id)
    {
        $this->validate($request,[
            'password' => 'sometimes'
        ]);

        if($request->filled('password'))
        {
            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('changePasswordSuccess', 'პაროლი წარმატებით შეიცვალა');
        }
        return redirect()->back()->with('changePasswordDanger', 'პაროლის შეცვლა ვერ მოხერხდა');
    }

    public function validateRequest(Request $request) // ჩემს მიერ შექმნილი ფუნქცია
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'sometimes',
            'repassword' => 'sometimes',
        ]);
    }



}
