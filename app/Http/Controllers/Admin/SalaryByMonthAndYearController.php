<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;

class SalaryByMonthAndYearController extends Controller
{

public function index()
{
    // Calculate total amount by month and retrieve user names and role titles
    $totalAmountByMonth = Salary::select(
        DB::raw('DATE_FORMAT(salaries.payment_date, "%Y-%m") as month'),
        DB::raw('SUM(salaries.amount) as total_amount'),
        'users.name as user_name', // Retrieve user names
        DB::raw('GROUP_CONCAT(roles.title) as role_titles') // Retrieve role titles as a comma-separated list
    )
    ->join('users', 'salaries.user_id', '=', 'users.id') // Join the users table
    ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
    ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id') // Join the roles table
    ->groupBy('month', 'user_name')
    ->orderBy('month')
    ->get();

    return view('admin.salary.month_index', compact('totalAmountByMonth'));
}

}