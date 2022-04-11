<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Flashy;
use App\Taxes;
class TaxesController extends Controller
{
    public function index()
    {
       $this->check('view_all_taxes');
     $taxes=Taxes::get();
     return view('backend.taxes.index', compact(['title', 'taxes']));  
    }

    public function create()
    {
         $this->check('create_taxes');
      $taxes = new Taxes;
      $title="Ajout Taxes";
        return view('backend.taxes.create', compact(['taxes', 'title']));
    }

    public function store(Request $request)
    {
        //Verification de l'existance de la taxes
         $taxes=Taxes::where('taxes', request('taxes'))
                     ->first();
         if(!empty($taxes)){
             return back()
             ->withErrors([
                 'taxes' => 'cet taxes existe déjà'])
             ->withInput();
         }
      $this->check('create_taxes');
      $taxes = new Taxes;
      $this->inputValidation($request, $taxes);
      $taxes->taxes = $request['taxes'];
      $taxes->taux = $request['taux'];

      $taxes->save();
       return redirect('/taxes')->with('success','taxes Ajouter Avec successfully');
    }

    
    public function show($id)
    {
        
      $this->check('show_taxes');
      $taxes = new Taxes;
      return view('backend.taxes.show',['taxes'=>$taxes]);
    }

   
    public function edit($id)
    {
         $this->check('edit_taxes');
      $title = 'Gestion des Taxes';
      $taxes = Taxes::findOrFail($id);
      return view('backend.taxes.edit',compact(['taxes', 'title']));
    }

   
    public function update(Request $request, $id)
    {
        $this->check('edit_taxes');
      $taxes = Taxes::findOrFail($id);
      $this->validate($request,[
          "taxes" => "required",
          "taux" => "required"

      ]);
      $taxes ->taxes = $request['taxes'];
      $taxes ->taux = $request['taux'];
      $taxes ->update();
      return redirect('/taxes')->with('success','taxes modifier avec successfully');
    }
     public function changeStatus($id){
        $this->check('show_taxes');
        $taxes = Taxes::findOrFail($id);
        $taxes->status = !$taxes->status;
        $taxes->save();
        return back();
    }

   
    public function destroy($id)
    {
        
        $this->check('delete_taxes');
        Taxes::whereId($id)->delete();
       return redirect()->route('taxes.index')->with('success','Suppression effectuer avec Success!');
    }
    public function inputValidation(Request $request, Taxes $taxes)
    {
        if($request->getMethod() == 'POST')
        {
            return $this->validate($request, [
              "taxes" => 'required',
              "taux" => 'required'

            ]);
        }
        else
        {
            return $this->validate($request, [
              "taxes" => 'required',
              "taux" => 'required'

            ]);
        }
    }
     public function check($permission)
    {
        if(!Auth::user()->hasPermission($permission))
            abort(401);
    }
}
