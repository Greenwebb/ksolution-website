<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanSpecifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'duration',
        'per',
        'penalt_value',
        'penalty_type',
        'requirements',
        'borrower_group_size',
        'original_fee',
        'need_business_plan',
        'need_recommendation_plan',
        'need_tpin',
        'need_nrc',
        'need_company_profile',
        'need_police_report',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assistant(){
        // return $this->belongsTo(User::class, 'assistant_id');
    }
}
