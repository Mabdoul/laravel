<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = [
            ['id' => '1', 'nom' => 'Jamaoui', 'metier' => 'Exper technique'],
            ['id' => '2', 'nom' => 'Mabdoul', 'metier' => 'Directeur'],
            ['id' => '3', 'nom' => 'Zouhair', 'metier' => 'Moul chi'],
        ];
        $title = "Page d'accueil";  // You can set a default title here
        return view('home', compact('users', 'title'));
    }
}
