<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Redevables;
use App\Quartier;
use App\Activites;
use App\User;
use App\Role;
use App\typesRedevabilites;
// use DateTime;
use Flashy;
 use Illuminate\Support\Carbon;
class ControllertRedevables extends Controller
{

    public function index()
    {
      $this->check('view_all_Redevables');

      $redevables = DB::table('redevables')
            ->join('activites','redevables.id_activite', '=', 'activites.id')
            ->join('quartiers','redevables.id_quartier', '=', 'quartiers.id')
            ->join('types_redevabilites','redevables.id_typeR', '=', 'types_redevabilites.id')
            ->select('redevables.*','quartiers.Quartier','activites.Activites','types_redevabilites.Types')->get();
        return view('backend.Redevables.index', compact('redevables'));
    }
    public function create()
    {
      $this->check('create_Redevables');
      $redevables = new Redevables;
      $title="Ajouter une Redevables";
        return view('backend.Redevables.create', compact(['redevables', 'title']));
    }
    public function store(Request $request,Redevables $redevables)
    {
      //Verification de unicité de l'email

       // $count = Redevables::count();
        $redevables = new Redevables();
      // $this->validate($request,['email'=>'required|unique:redevables']);
         $redevables=Redevables::where('Email', request('Email'))
                     ->orWhere('Telephone', request('Telephone'))
                     ->first();
         if(!empty($redevables)){
             return back()
             ->withErrors([
                 'Email' => 'cet Email existe déjà',
                 'Telephone' => 'Ce Numero de Telephone existe déjà'])
             ->withInput();
         }

   $this->check('create_Redevables');
   $redevables = new Redevables();
   $this->inputValidation($request, $redevables);
   $redevables->noms = $request['noms'];
   $redevables->prenoms = $request['prenoms'];
   $redevables->Email = $request['Email'];
   $redevables->Telephone = $request['Telephone'];
   $redevables->Nature = $request['Nature'];
   $redevables->Patente = $request['Patente'];
   $redevables->password = bcrypt($request['password']);
   $redevables->id_activite = $request['id_activite'];
   $redevables->id_quartier = $request['id_quartier'];
   $redevables->id_typeR = $request['id_typeR'];
   $redevables['created_at'] = Carbon::now();
//enregistrement de donnée de redevables dans la table users
   $user = new User();
   $user->email = request('Email');
   $user->password=bcrypt(request('password'));
   $user->nom = request('noms');
   $user->prenom = request('prenoms');
   //recuperation de role dans la tables role
   $role = Role::where('nom','Redevable')->first();
//recuperation id du roles
   $user->role_id = $role->id;
    $redevables->save();
   $user->save();
    return redirect('/Redevables')->with('success','Redevables Ajouter Avec successfully');
    }

    public function show($id)
    {
      $this->check('show_Redevables');
      $redevables = Redevables::findOrFail($id);
      $Quartier = Quartier::all();
      $typesRedevabilites = typesRedevabilites::all();
      $Activites = Activites::all();
      return view('backend.Redevables.show',compact('redevables','Quartier','typesRedevabilites','Activites'));
    }
    public function edit($id)
    {
      $this->check('edit_Redevabilites');
      $title = 'Modifier une Redevables';
      $redevables = Redevables::findOrFail($id);
      return view('backend.Redevables.edit',compact(['redevables', 'title']));
    }

    public function update(Request $request, $id)
    {
    $this->check('edit_Redevabilites');
     $redevables = Redevables::findOrFail($id); 
      $user = User::where(['email'=>$redevables->email])->first();    
      $redevables->noms = $request['noms'];
      $redevables->prenoms = $request['prenoms'];
      $redevables->Email = $request['Email'];
      $redevables->Telephone = $request['Telephone'];
      $redevables->Nature = $request['Nature'];
      $redevables->Patente = $request['Patente'];
      $redevables->id_activite = $request['id_activite'];
      $redevables->id_quartier = $request['id_quartier'];
      $redevables->id_typeR = $request['id_typeR'];
      $redevables->save();       
       $user->email = request('Email');
       $user->nom = request('noms');
       $user->prenom = request('prenoms');
       //recuperation de role dans la tables role
       $role = Role::where('nom','Redevable')->first();
       $user->update();   
        return redirect('/Redevables')->with('success','Redevables modifier avec successfully');
    }
    public function changeStatus($id){
        $this->check('show_Redevables');
        $redevables = Redevables::findOrFail($id);
        $redevables->status = !$redevables->status;
        $redevables->save();
        return back();
    }
    public function destroy($id)
    {
       $this->check('delete_Redevables');
      Redevables::whereId($id)->delete();
     return redirect()->route('Redevables.index')->with('success','Suppression effectuer avec Success!');
    }
    public function inputValidation(Request $request, Redevables $redevables)
    {
        if($request->getMethod() == 'POST')
        {
            return $this->validate($request, [
                'noms' => 'required',
                'prenoms' => 'required',
                'Email' => 'required|Email|unique:redevables',
                'Telephone' => 'required',
                'Nature' => 'required',
                'Patente'=>'required',
                'password' => 'required',
                'id_activite' => 'required',
                'id_quartier' => 'required',
                'id_typeR' => 'required',


            ]);
        }
        else
        {
            return $this->validate($request, [
              'noms' => 'required',
              'prenoms' => 'required',
              'Email' => 'required|Email|unique:redevables',
              'Telephone' => 'required',
              'Nature' => 'required',
              'Patente'=>'required',
              'password' => 'required',
              'id_activite' => 'required',
              'id_quartier' => 'required',
              'id_typeR' => 'required',
            ]);
        }
    }

    public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }

}
