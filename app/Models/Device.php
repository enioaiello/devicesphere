<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function showRandomDevices()
    {
        // Récupérer 5 éléments aléatoires de la table 'devices'
        $randomDevices = Device::inRandomOrder()->limit(5)->get();

        // Retourner les données à la vue
        return view('home', compact('randomDevices'));
    }
}
