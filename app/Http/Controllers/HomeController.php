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
        // Récupérer 5 appareils aléatoires
        $randomDevices = Device::inRandomOrder()->limit(5)->get();

        // Récupérer 5 dernières réparations enregistrées
        $lastRepairs = Repair::limit(5)->get();

        // Récupérer 5 derniers prêts qui prendront fin bientôt
        // $soonExpireLoans = Loan::

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Retourner les données à la vue
        return view('home', compact('user', 'randomDevices', 'lastRepairs'));
    }

    public function displayAdmin()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer tous les appareils
        $devices = Device::all();

        // Récupérer le nombre d'appareils
        $devicesCount = Device::get()->count();

        // Récupérer le nombre de défaillances
        $repair = Repair::get()->count();

        if ($user->role == "admin") {
            return view('admin', compact('user', 'devices', 'devicesCount'));
        } else {
            return redirect('/');
        }
    }

    public function displayDevices()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer tous les appareils
        $devices = Device::all();

        // Retourner les données à la vue
        if ($user->role == "admin") {
            return view('devices', compact('devices'));
        } else {
            return redirect('/');
        }
    }

    public function displayRepairs()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer tous les appareils
        $repairs = Repair::all();

        // Retourner les données à la vue
        if ($user->role == "admin") {
            return view('repairs', compact('repairs'));
        } else {
            return redirect('/');
        }
    }

    public function displayLoans()
    {
        // Récupérer tous les appareils
        $loans = Loan::all();

        // Retourner les données à la vue
        return view('loans', compact('loans'));
    }
}
