<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Home(){
        $brands = Produit::where('category', 'Vêtement')
               ->orderBy('created_at', 'DESC')
               ->take(4)
               ->get();
        $shoes = Produit::where('category', 'Chaussure')
               ->orderBy('created_at', 'DESC')
               ->take(4)
               ->get();
        $bijoux = Produit::where('category', 'Bijou')
               ->orderBy('created_at', 'DESC')
               ->take(4)
               ->get();
        return view('welcome')->with(['brands'=> $brands, 'shoes' => $shoes, 'bijoux' => $bijoux]);;
    }

    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    public function dashboard(){
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard', $data);
    }
    public function newUser(Request $request) {
        $request->validate([
            'email' =>'required|email|unique:users',
            'username' =>'required|max:10|unique:users',
            'password' =>'required|min:5'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = Hash::make($request->email);
        $save = $user->save();

        if($save){
            $request->session()->put('LoggedUser', $user->id);
            return redirect('dashboard')->with('user', $user);
         }else{
             return back()->with('fail','Une erreur s\'est produite, veuiller réessayer plutard');
         }
        
    }

    public function check(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:12',
        ]);

        $userInfo = User::where('username', '=', $request->username)->first();

        if($userInfo) {
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('dashboard')->with('userInfo', $userInfo);
            } else {
                return back()->with('fail','Mot de passe incorrecte');
            }
        } else {
            return back()->with('fail','Connexion échoué');
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }
}
