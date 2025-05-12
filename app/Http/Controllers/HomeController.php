<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Repair;
use App\Models\Loan;
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

        // Récupérer tous les appareils
        $device = Device::all();

        // Récupérer le nombre d'appareils
        $deviceCount = Device::get()->count();

        // Récupérer le nombre de défaillances

        // Retourner les données à la vue
        return view('admin', compact('user', 'device', 'deviceCount'));
    }

    public function displayDevices()
    {
        // Récupérer tous les appareils
        $devices = Device::all();

        // Retourner les données à la vue
        return view('devices', compact('devices'));
    }

    public function displayRepairs()
    {
        // Récupérer tous les appareils
        $repairs = Repair::all();

        // Retourner les données à la vue
        return view('repairs', compact('repairs'));
    }

    public function displayLoans()
    {
        // Récupérer tous les appareils
        $loans = Loan::all();

        // Retourner les données à la vue
        return view('loans', compact('loans'));
    }
}
