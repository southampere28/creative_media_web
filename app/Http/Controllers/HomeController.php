<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Study;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $serviceposts = Service::with('author')->get();
        $studyposts = Study::with('author')->get();
        return view('index', compact('studyposts', 'serviceposts'));
    }
}
