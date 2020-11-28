<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestChartController extends Controller
{
     public function show(){
        
        $data = ['guest_chartExpenses'=>0,
                ];
        
        return view('guest.guest_chart',$data);
    }
    
    
    
    public function store(Request $request){
        
        $request->validate([
            'guest_chartExpenses' => 'required|numeric',
        ]);
        
        $guest_chartExpenses=$request->guest_chartExpenses;
        
        $data = ['guest_chartExpenses'=>$guest_chartExpenses,
                ];
        
        return view('guest.guest_chart',$data);
    }
}
