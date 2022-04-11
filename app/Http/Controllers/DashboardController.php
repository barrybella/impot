<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Taxes;
use App\Redevables;
use App\User;
use App\Quartier;
class DashboardController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = "Tableau de bord";
      $taxes=Taxes::all();
      $User=User::all();
      $Quartier=Quartier::all();
      $redevables=Redevables::all();
        return view('backend.dashboard', compact(['title'],['taxes'],['User'],['redevables'],['Quartier']));

    }
}
