<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add(){
        return view('admin.addProduct');
    }
    //
    public function addProduct(Request $request) {
        $request->validate([
            'photo' =>'required|file',
            'name' =>'required',
            'category' =>'required',
            'quantity' =>'required',
        ]);

        $image = $request->file('photo');

        // Générer un nom unique pour le fichier
        $nomFichier = uniqid() . '.' . $image->getClientOriginalExtension();
    
        // Déplacer le fichier vers le dossier spécifique (par exemple, 'public/images')
        $chemin = $image->storeAs('images', $nomFichier, 'public');

        // $path = $request->photo->store('images', 'public');

        $product = new Produit;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->photo = $chemin;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->enStock = false;
        $product->admin_id = 1;
        $product->category = $request->category;

        $save = $product->save();

        if ($save){
            return back()->with('success', 'product saved successfully');
        }
    }
}
