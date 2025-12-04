<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    public function index() {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer les appareils
        $devices = Device::all();

        // Récupérer le nombre d'appareils
        $devicesCount = Device::get()->count();

        if ($user->role === 'admin') {
            return view('/manage/device', compact('user', 'devices', 'devicesCount'));
        } else {
            return redirect('/');
        }
    }

    public function addForm()
        {
            // Récupérer l'utilisateur connecté
            $user = Auth::user();

            if ($user->role == "admin") {
                return view('/forms/add_device', compact('user'));
            } else {
                return redirect('/');
            }
        }
}
