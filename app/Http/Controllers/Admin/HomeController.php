<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Incident;
use App\Models\SecurityWanted;
use Exception;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'incident_count' =>  0,
            'initial_incident_count' =>  0,
            'supplementary_incident_count' =>  0,
            'transferred_incident_count' =>  0,
            'checked_incident_count' =>  0,
            'fake_incident_count' =>  0,
            'security_wanted_count' =>  0,
            'deleted_security_wanted_count' =>  0,
        ];
        return view('page.dashboard')->with('data', $data);
    }

}
