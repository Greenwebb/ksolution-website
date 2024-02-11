<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoanFiles extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'user_loan_id'
    ];

    public function user(){
        return $this->belongsTo(UserLoan::class, 'user_loan_id');
    }
}
