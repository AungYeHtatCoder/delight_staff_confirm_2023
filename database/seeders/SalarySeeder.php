<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $users = User::all(); // Fetch all users
        
        foreach ($users as $user) {
            DB::table('salaries')->insert([
                'user_id' => $user->id,
                'amount' => rand(100000, 500000), // Randomly generating amount between 5000 and 20000
                'payment_date' => Carbon::now()->subDays(rand(0, 10)), // Randomly generating a date within the last 10 days
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}