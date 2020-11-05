<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestExpenseController extends Controller
{
    public function show(){
        
        $data = ['guest_income'=>0,
                'guest_expense'=>0,
                'guest_total_expense'=>0];
        
        return view('guest.guest_expense',$data);
    }
    
    
    
    public function store(Request $request){
        
        $guest_income=$request->guest_income;
        $guest_expense=$request->guest_expense;
        $guest_total_expense=$guest_income - $guest_expense;
        
        $data = ['guest_income'=>$guest_income,
                'guest_expense'=>$guest_expense,
                'guest_total_expense'=>$guest_total_expense,];
        
        return view('guest.guest_expense',$data);
    }
}
