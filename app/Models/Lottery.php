<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lottery extends Model
{
    use HasFactory;
    protected $fillable = ['times'];

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_lottery', 'lottery_id', 'customer_id')
            ->withPivot('ticket_no');
    }
}