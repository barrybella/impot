<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Zones;
use  App\Quartier;
use PDF;
class ZonesController extends Controller
{

    public function index()
    {
      $this->check('view_all_zones');
      $zones = DB::table('zones')
        ->join('quartiers','zones.id_quartier', '=', 'quartiers.id')
        ->select('zones.*','quartiers.Quartier')->get();
    return view('backend.zones.index', compact(['title', 'zones']));
    }
      public function zonesPdf($id){
        $zones =Zones::findOrFail($id);
        $pdf=PDF::loadView('zonesPdf',compact('zones'));
        $name="zone".$zones->id.".pdf";
        return $pdf->download($name);
      }
    public function create()
    {

      $this->check('create_Zones');
      $zones = new Zones;
      $title="Gestion des Zones";
        return view('backend.zones.create', compact(['zones', 'title']));
    }


    public function store(Request $request,Zones $zones)
    {
       $this->check('create_zones');
      $request->validate([
        'zone' => 'required',
        'id_quartier' => 'required',
    ]);
    $data = array();
    $data['zone'] = $request->zone;
    $data['id_quartier'] = $request->id_quartier;
      DB::table('zones')->insert($data);
      return redirect('/zones')->with('success','Zones Ajouter Avec successfully');
    }
    public function show($id)
    {
      $this->check('show_zones');
      $zones = Zones::findOrFail($id);
      $Quartier = Quartier::all();
      // dd($zones);
      return view('backend.zones.show',compact('zones','Quartier'));
    }

    public function edit($id)
    {
      $this->check('edit_zones');
      $title = 'Gestion des Zones';
      $zones = Zones::findOrFail($id);
      $Quartier=Quartier::all();
      return view('backend.zones.edit',compact(['zones', 'title']));
    }

    public function update(Request $request, $id)
    {
   $this->check('edit_zones');
  $zones = Zones::findOrFail($id);
  $this->validate($request,[
      "zone" => 'required',
      "id_quartier" => 'required'
  ]);
  $zones ->zone = $request['zone'];
  $zones ->id_quartier = $request['id_quartier'];
  $zones ->update();
  return redirect('/zones')->with('success','zones modifier avec successfully');
}
public function changeStatus($id){
    $this->check('show_zones');
    $zones = Zones::findOrFail($id);
    $zones->status = !$zones->status;
    $zones->save();
    return back();
}
     public function destroy($id)
       {
          $this->check('delete_zones');
         Zones::whereId($id)->delete();
          return redirect()->route('zones.index')->with('success','Suppression effectuer avec Success!');
       }
       private function validateInput($request) {
           $this->validate($request, [
           'zone' => 'zone',
           'id_quartier' => 'id_quartier'
       ]);
       }
       public function check($permission)
       {
           if(!Auth::user()->hasPermission($permission))
               abort(401);
       }
}
