<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin_amount',
        'settled_amount',
        'penalty_amount',
        'balance',
        'loan_id',
        'payment_date',
        'notes',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function loan(){
        return $this->belongsTo(Loan::class, 'loan_id');
    }
}
