<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'income_a', 'income_b', 'income_c',
        'expense_a','expense_b','expense_c',
        'total_expense'];

    
    public function user()
    {   
        return $this->belongsTo(User::class);
    }
}
