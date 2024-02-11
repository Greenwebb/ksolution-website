<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'amount',
        'type',
        'user_id',
        'status',
        'organization_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
