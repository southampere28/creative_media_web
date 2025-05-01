<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Study;
use App\Models\Team;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teamposts = Team::get(); 
        $clientposts = Client::get();
        $testimoniposts = Testimoni::orderBy('created_at', 'desc')->limit(3)->get();
        $serviceposts = Service::with('author')->get();
        $studyposts = Study::with('author')->get();
        $contactposts = Contact::get();
        return view('index', compact('studyposts', 'serviceposts', 'testimoniposts', 'clientposts', 'teamposts', 'contactposts'));
    }

    public function testimoni()
    {
        $videotestimoniposts = Testimoni::where('type', 'video')->get();
        $texttestimoniposts = Testimoni::where('type', 'message')->get();
        return view('detail.testimoni', compact('texttestimoniposts', 'videotestimoniposts'));
    }
}
