<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function show(){
        
        if (\Auth::check()) {
        
        $user=\Auth::user();
        
        $expenses = $user->expenses()->orderBy('id', 'desc')->first();
        
        $data=[
            'user'=>$user,
            'expenses'=>$expenses];
                 
        return view('user.chart',$data);
        }
    }
}
