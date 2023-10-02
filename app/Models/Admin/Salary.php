<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id',
        'amount',
        'payment_date',
    ];
    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}