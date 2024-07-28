<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere; 
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etds=Etudiant::all();
        return view('etudiants.index',['etudiants'=>$etds]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("etudiants.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {   //creation de l'utilisateur//
        $user = new User();
        $user->name = $request->input("nom")." ".$request->input("prenom");;
        $user->email = $request->input("prenom").".".$request->input("nom")."@domain.com";
        $user->password = "domain2024";
        $user->save();
        #==========================#

        //creation de l'etudiant//
        $etd = new Etudiant();
        $etd->user_id = $user->id;
        $etd->nom = $request->input("nom");
        $etd->prenom = $request->input("prenom");
        $etd->sexe = $request->input("sexe");
        $etd->filiere_id=Filiere::where('nom',$request->input("filiere"))->pluck('id')->first();
        $etd->save();
        return Redirect('etudiants');
        #==============================3
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       

        $etd=Etudiant:: findOrFail($id);
        return view('etudiants.show', ['etudiants' =>$etd]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etd=Etudiant:: find($id);
        return view('etudiants.edit',['etudiants'=>$etd]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {   
        $etd = Etudiant:: find($id);
        $etd->nom = $request->input("nom");
        $etd->prenom = $request->input("prenom");
        $etd->sexe = $request->input("sexe");
        $etd->filiere_id = $request->input("filiere_id");
        $etd->save();
        return Redirect('/etudiants');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        
        $etd =Etudiant::find($id);
        $etd->delete();
        return redirect('/etudiants');
    }
}
