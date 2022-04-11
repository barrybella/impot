<?php

namespace App\Http\Controllers;
use App\Activites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flashy;
use Session;
session_start();
class ActivitesController extends Controller
{

  public function authVerif()
  {
      $id_user = Session::get('id');
      if($id_user){
          return;
      }else{
          return Redirect::to('/')->send();
      }
      }
    public function index()
    {
      $this->check('view_all_Activites');
     $Activites=Activites::get();
     return view('backend.Activites.index', compact(['title', 'Activites']));
    }
    public function create()
    {
      $this->check('create_Activites');
      $Activites = new Activites;
      $title="Ajout Activites";
        return view('backend.Activites.create', compact(['Activites', 'title']));
    }
    public function store(Request $request)
    {
      //Verification de unicité de l'email
         $Activites=Activites::where('Activites', request('Activites'))
                     ->first();
         if(!empty($Activites)){
             return back()
             ->withErrors([
                 'Activites' => 'cet Activites existe déjà'])
             ->withInput();
         }
      $this->check('create_Activites');
      $Activites = new Activites;
      $this->inputValidation($request, $Activites);
      $Activites->Activites = $request['Activites'];
      $Activites->TVA = $request['TVA'];

      $Activites->save();
       return redirect('/Activites')->with('success','Activites Avec successfully');
    }
    public function show($id)
    {
      $this->check('show_Activites');
        $Activites = new Activites;
      return view('backend.Activites.show',['Activites'=>$Activites]);
    }
    public function edit($id)
    {
      $this->check('edit_Activites');
      $Activites = new Activites;
        $title = 'Gestion des Activites';
      $Activites = Activites::findOrFail($id);
      return view('backend.Activites.edit',compact(['Activites', 'title']));
    }
    public function update(Request $request, $id)
    {
      $this->check('edit_Activites');
      $Activites = Activites::findOrFail($id);
      $this->validate($request,[
          "Activites" => "required",
          "TVA" => "required"
      ]);
      $Activites ->Activites = $request['Activites'];
      $Activites ->TVA = $request['TVA'];
      $Activites ->update();
      return redirect('/Activites')->with('success','Activites modifier avec successfully');
    }
    public function destroy($id)
    {
           $this->check('delete_Activites');
          Activites::whereId($id)->delete();
         return redirect()->route('Activites.index')->with('success','Suppression effectuer avec Success!');
    }
    public function inputValidation(Request $request, Activites $Activites)
    {
        if($request->getMethod() == 'POST')
        {
            return $this->validate($request, [
                'Activites' => 'required',
                'TVA' => 'required',
            ]);
        }
        else
        {
            return $this->validate($request, [
              'Activites' => 'required',
              'TVA' => 'required',
            ]);
        }
    }
    public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }
}
