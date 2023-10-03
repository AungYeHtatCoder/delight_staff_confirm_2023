<?php

namespace App\Models;

use App\Models\Lottery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['customer_name', 'phone'];

    public function lotteries()
    {
        return $this->belongsToMany(Lottery::class, 'customer_lottery', 'customer_id', 'lottery_id')
            ->withPivot('ticket_no');
    }
}