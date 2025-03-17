<?php

namespace App\Http\Controllers; 


use App\Models\Features;

class PageController extends Controller
{
 
    public function index()
    {
        $features = Feature::all(); 
        return view('features.index', compact('features'));
    }
}