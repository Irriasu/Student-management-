<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $filiere=Filiere::all();
        return view('filieres.index',['filieres'=>$filiere]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("filieres.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
         //creation de la filere //
         $filiere = new Filiere();
         $filiere->nom = $request->input('nom');
         $filiere->save();
         return Redirect('filieres');
         #==============================3
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etds=Etudiant::where('filiere_id',$id)->get();
        return view('filieres.show', ['etudiants' =>$etds]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fil=Filiere:: find($id);
        return view('filieres.edit',['filieres'=>$fil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fil = filiere:: find($id);
        $fil->nom = $request->input("nom");
        $fil->save();
        return Redirect('/filieres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fil =Filiere::find($id);
        $fil->delete();
        return redirect('/filieres');
    }
}
