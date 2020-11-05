<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function show(){
        
        if (\Auth::check()) {
        
        $user=\Auth::user();
        
        $expenses = $user->expenses()->orderBy('id', 'desc')->first();
        
        $data=[
            'user'=>$user,
            'expenses'=>$expenses];
                 
        return view('user.expense',$data);
        }
    }
    
    public function store(Request $request){
        
        
         $request->user()->expenses()->create([
            'income_a' => $request->income_a,
            'income_b' => $request->income_b,
            'income_c' => $request->income_c,
            
            'expense_a' => $request->expense_a,
            'expense_b' => $request->expense_b,
            'expense_c' => $request->expense_c,
            
            'total_expense'=>$request->income_a + $request->income_b + $request->income_c
                             - $request->expense_a - $request->expense_b, - $request->expense_c
        ]);
                 
        return redirect('expense');
    }
}
