<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    
    
    public function about(){
        
        $name = 'Jeffrey way';
        //return view('pages.about') -> with('name', $name);
        // return view('pages.about') -> with([
            
            
        //     'first' => 'jefreyy',
            
        //     'last' => 'way'
            
            
        //     ]);
        
        // $data = [];
        // $data['first'] = 'douglas';
        // $data['last'] = 'quad';
        
        // return view('pages.about', $data);
        
        
        $first = 'fox';
        
        $last = 'wa';
        
        return view('pages.about', compact('first','last'));
        
        
    }
}
