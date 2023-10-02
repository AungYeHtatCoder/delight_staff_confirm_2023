<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // salary with user and role
        $salaries = Salary::with('user.roles') // Eager load the user and their roles
    ->get();
               
        return view('admin.salary.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // user pluck
        $users = User::all()->pluck('name', 'id');
        // return view
        return view('admin.salary.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    // Validation
    $request->validate([
        'user_id' => 'required',
        'amount' => 'required',
        'payment_date' => 'required',
    ]);

    // Format the payment_date value to 'YYYY-MM-DD' format
    $formattedPaymentDate = Carbon::createFromFormat('m/d/Y', $request->input('payment_date'))->format('Y-m-d');

    // Create a new Salary record with the formatted payment_date
    Salary::create([
        'user_id' => $request->input('user_id'),
        'amount' => $request->input('amount'),
        'payment_date' => $formattedPaymentDate,
    ]);

    // Toast message
    toast('Salary Created Successfully', 'success');

    // Redirect to the salary index page
    return redirect()->route('admin.salaries.index');
}

    // public function store(Request $request)
    // {
    //     // validation
    //     $request->validate([
    //         'amount' => 'required',
    //         'payment_date' => 'required',
    //         'user_id' => 'required',
    //     ]);

    //     // salary create
    //     Salary::create($request->all());
    //     // toast message
    //     toast('Salary Created Successfully', 'success');
    //     // redirect salary index page
    //     return redirect()->route('admin.salaries.index');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // salary find with id
        $salary = Salary::findOrFail($id);
        // return view
        return view('admin.salary.show', compact('salary'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // salary find with id
        $salary = Salary::findOrFail($id);
        // user pluck
        $users = User::all()->pluck('name', 'id');
        // return view
        return view('admin.salary.edit', compact('salary', 'users'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation
       $request->validate([
            'user_id' => 'required',
            'amount' => 'required|numeric|between:0,9999999.99',
            'payment_date' => 'required|date_format:Y-m-d',
        ]);


        // salary find with id
        $salary = Salary::findOrFail($id);
        // salary update
        $salary->update($request->all());
        // toast message
        toast('Salary Updated Successfully', 'success');
        // redirect salary index page
        return redirect()->route('admin.salaries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // salary find with id
        $salary = Salary::findOrFail($id);
        // salary delete
        $salary->delete();
        // toast message
        toast('Salary Deleted Successfully', 'success');
        // redirect salary index page
        return redirect()->route('admin.salaries.index');
    }
}