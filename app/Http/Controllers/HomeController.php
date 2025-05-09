<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer 5 éléments aléatoires
        $randomDevices = Device::inRandomOrder()->limit(5)->get();

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Retourner les données à la vue
        return view('home', compact('user', 'randomDevices'));
    }

    public function displayAdmin()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Retourner les données à la vue
        return view('admin', compact('user'));
    }
}
