<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsSubscriber extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'session',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
