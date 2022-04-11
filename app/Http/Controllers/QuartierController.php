<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Flashy;
use App\Quartier;
class QuartierController extends Controller
{

    public function index()
    {
      $this->check('view_all_Quartier');
     $Quartier=Quartier::get();
     return view('backend.Quartier.index', compact(['title', 'Quartier']));
    }

    public function create()
    {
      $this->check('create_Quartier');
      $Quartier = new Quartier;
      $title="Ajout Quartier";
        return view('backend.Quartier.create', compact(['Quartier', 'title']));
    }


    public function store(Request $request)
    {
      //Verification de unicité de l'email
         $Quartier=Quartier::where('Quartier', request('Quartier'))
                     ->first();
         if(!empty($Quartier)){
             return back()
             ->withErrors([
                 'Quartier' => 'cet Quartier existe déjà'])
             ->withInput();
         }
      $this->check('create_Quartier');
      $Quartier = new Quartier;
      $this->inputValidation($request, $Quartier);
      $Quartier->Quartier = $request['Quartier'];

      $Quartier->save();
       return redirect('/Quartier')->with('success','Quartier Ajouter Avec successfully');
    }


    public function show($id)
    {
      $this->check('show_Quartier');
      $Quartier = Quartier::findOrFail($id);
      return view('backend.Quartier.show',['Quartier'=>$Quartier]);
    }


    public function edit($id)
    {
      $this->check('edit_Quartier');
      $title = 'Gestion des Quartiers';
      $Quartier = Quartier::findOrFail($id);
      return view('backend.Quartier.edit',compact(['Quartier', 'title']));
    }

    public function update(Request $request, $id)
    {
      $this->check('edit_Quartier');
      $Quartier = Quartier::findOrFail($id);
      $this->validate($request,[
          "Quartier" => "required"
      ]);
      $Quartier ->Quartier = $request['Quartier'];
      $Quartier ->update();
      return redirect('/Quartier')->with('success','Quartier modifier avec successfully');
    }
    public function changeStatus($id){
        $this->check('show_Quartier');
        $Quartier = Quartier::findOrFail($id);
        $Quartier->status = !$Quartier->status;
        $Quartier->save();
        return back();
    }



    public function destroy($id)
    {
        $this->check('delete_Quartier');
        Quartier::whereId($id)->delete();
       return redirect()->route('Quartier.index')->with('success','Suppression effectuer avec Success!');
    }
    public function inputValidation(Request $request, Quartier $Quartier)
    {
        if($request->getMethod() == 'POST')
        {
            return $this->validate($request, [
                'Quartier' => 'required',

            ]);
        }
        else
        {
            return $this->validate($request, [
              'Quartier' => 'required',

            ]);
        }
    }
    public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }
}
