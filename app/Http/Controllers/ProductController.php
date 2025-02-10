<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(5); 
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'nume' => ['required','string', 'max:255'],
            'descriere' => ['required','string', 'max:255'],
            'pret' => ['required','numeric'],
        ]);
        $products = new Products();

        $products->nume = $request->nume;
        $products->descriere = $request->descriere;
        $products->pret = $request->pret;
        $products->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Products::findorFail($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request ->validate([
            'nume' => ['required','string', 'max:255'],
            'descriere' => ['required','string', 'max:255'],
            'pret' => ['required','numeric'],
        ]);
        
        $products=Products::findorFail($id);

        $products->nume = $request->nume;
        $products->descriere = $request->descriere;
        $products->pret = $request->pret;

        $products->save();       
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::findorFail($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}
