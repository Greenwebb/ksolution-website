<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'expected_loan',
        'loan_percentage',
        'installments',
        'total_loan',
        'amount_settled',
        'amount_balance',
        'current_installment',
        'next_date',
        'user_id',
        'assistant_id',
        'status',
        'compliance_rate',
        'nrc_no',
        'customer_type',
        'email',
        'phone',
        'file',
        'file2',
        'file3',
        'file4',
        'file5'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assistant(){
        return $this->belongsTo(User::class, 'assistant_id');
    }
}
