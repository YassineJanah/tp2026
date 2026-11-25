<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class MiniSite extends Controller
{
    public function acceuil()
    {
        return view('acceuil');
    }

    public function filieres()
    {
        $filieres=[
            ['code' => 'Dev', 'nom' => 'Developpement digital', 'duree' => '2 ans'],
            ['code' => 'INFO', 'nom' => 'Infrastructure digital', 'duree' => '3 ans'],
            ['code' => 'GS', 'nom' => 'Gestion des entreprise', 'duree' => '1 ans'],
            ['code' => 'GC', 'nom' => 'Genie Civil', 'duree' => '6 ans'],
            ['code' => 'COMPTA', 'nom' => 'Comptabilité', 'duree' => '8 ans']
        ];
        return view('filieres.index', compact('filieres'));
    }

    public function Contact()
    {
        return view('Contact');
    }
}
