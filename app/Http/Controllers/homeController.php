<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
       $users = [
        ['id'=>'1','nom'=>'jamaoui','metier'=>'Exper technique'],
        ['id'=>'2','nom'=>'Mabdoul','metier'=>'directueur'],
        ['id'=>'3','nom'=>'Zouhair','metier'=>'moul chi'],
       ];
        return view('home',compact('users'));
    }
}
