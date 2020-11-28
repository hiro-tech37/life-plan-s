<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestExpenseController extends Controller
{
    public function show(){
        
        $data = ['guest_income'=>0,
                'guest_expense'=>0,
                'guest_total_expense'=>0,
                'text'=>""];
        
        return view('guest.guest_expense',$data);
    }
    
    
    
    public function store(Request $request){
        
        $request->validate([
            'guest_income' => 'required|numeric',
            'guest_expense' => 'required|numeric',
            ]);
        
        $guest_income=$request->guest_income;
        $guest_expense=$request->guest_expense;
        $guest_total_expense=$guest_income - $guest_expense;
        
        if($guest_total_expense>=0){
            $text="なんと、収支がマイナスになりませんでした！！　　この場合、生命保険は不要です。";
        }else{
            $text="このマイナス分をうまく補いましょう。";
        }
        
        $data = ['guest_income'=>$guest_income,
                'guest_expense'=>$guest_expense,
                'guest_total_expense'=>$guest_total_expense,
                'text'=>$text];
        
        return view('guest.guest_expense',$data);
    }
}
