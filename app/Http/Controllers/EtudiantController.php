<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::orderBy('id')->paginate(4);
        return view('etudiant.liste' ,compact('etudiants'));
    }


    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'option'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'email'=>'required',
            'classe'=>'required',
        ]);
        
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->option = $request->option;
        $etudiant->age = $request->age;
        $etudiant->sexe = $request->sexe;
        $etudiant->email = $request->email;
        $etudiant->classe = $request->classe;
        
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'Etudiant Enrégistrer avec succes.');
    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    
    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'option'=>'required',
            'age'=>'required',
            'sexe'=>'required',
            'email'=>'required',
            'classe'=>'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->option = $request->option;
        $etudiant->age = $request->age;
        $etudiant->sexe = $request->sexe;
        $etudiant->email = $request->email;
        $etudiant->classe = $request->classe;

        $etudiant->update();
        return redirect('/etudiant')->with('status', 'Etudiant Modifier avec succes.');
    }


    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'Etudiant Supprimer avec succes.');
    }
        
    

}
