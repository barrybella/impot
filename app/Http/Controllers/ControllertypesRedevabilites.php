<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\typesRedevabilites;
class ControllertypesRedevabilites extends Controller
{

    public function index()
    {
      $this->check('view_all_Redevabilites');
     $Redevabilites=typesRedevabilites::get();
     return view('backend.typeRedevabilites.index', compact(['title', 'Redevabilites']));
    }
    public function create()
    {
      $this->check('create_Redevabilites');
      $Redevabilites = new typesRedevabilites;
      $title="Ajout typesRedevabilites";
        return view('backend.typeRedevabilites.create', compact(['Redevabilites', 'title']));
    }

    public function store(Request $request)
    {
      $this->check('create_Redevabilites');
      $Redevabilites = new typesRedevabilites;
      $this->inputValidation($request, $Redevabilites);
      $Redevabilites->Types = $request['Types'];

      $Redevabilites->save();
       return redirect('/typeRedevabilites')->with('success','typeRedevabilites Ajputer Avec successfully');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
      $this->check('edit_Redevabilites');
      $title = 'Gestion des Redevabilites';
      $Redevabilites = typesRedevabilites::findOrFail($id);
      return view('backend.typeRedevabilites.edit',compact(['Redevabilites', 'title']));
    }


    public function update(Request $request, $id)
    {
      $this->check('edit_Redevabilites');
      $Redevabilites = typesRedevabilites::findOrFail($id);
      $this->validate($request,[
          "Types" => "required"
      ]);
      $Redevabilites ->Types = $request['Types'];
      $Redevabilites ->update();
      return redirect('/typeRedevabilites')->with('success','Redevabilités modifier avec successfully');
    }
    public function changeStatus($id){
        $this->check('show_Redevabilites');
        $Redevabilites = typesRedevabilites::findOrFail($id);
        $Redevabilites->status = !$Redevabilites->status;
        $Redevabilites->save();
        return back();
    }

    public function destroy($id)
    {
       $this->check('delete_Redevabilites');
      typesRedevabilites::whereId($id)->delete();
     return redirect()->route('typeRedevabilites.index')->with('success','Suppression effectuer avec Success!');
    }
    public function inputValidation(Request $request, typesRedevabilites $Redevabilites)
    {
        if($request->getMethod() == 'POST')
        {
            return $this->validate($request, [
                'Types' => 'required',

            ]);
        }
        else
        {
            return $this->validate($request, [
              'Types' => 'required',

            ]);
        }
        }
    public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }

}
