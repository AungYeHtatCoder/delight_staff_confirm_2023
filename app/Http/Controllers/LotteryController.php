<?php

namespace App\Http\Controllers;

use App\Models\Lottery;
use Illuminate\Http\Request;
use App\Models\Customer;
class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all lotteries from the database
        $lotteries = Lottery::all();

        // Pass the lotteries data to the view
        return view('lottery_index', compact('lotteries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */




    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'times' => 'required|string|max:255',
            'ticket_no' => 'required|array', // Ensure ticket_no is an array
            'ticket_no.*' => 'required|integer', // Validate each ticket_no value
        ]);

        // Create a new Customer record or retrieve an existing one by name and phone
        $customer = Customer::firstOrCreate(
            ['customer_name' => $request->input('customer_name'), 'phone' => $request->input('phone')]
        );

        // Create a new Lottery record
        $lottery = new Lottery();
        $lottery->times = $request->input('times');
        $lottery->save();

        // Serialize the array of ticket numbers
        $ticketNos = json_encode($request->input('ticket_no'));

        // Attach the customer to the lottery and store ticket numbers in the pivot table
        $customer->lotteries()->attach($lottery, ['ticket_no' => $ticketNos]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Lottery placed successfully.');
    }
     // public function store(Request $request)
    // {
    //     // Validate the form data
    //     $request->validate([
    //         'customer_name' => 'required|string|max:255',
    //         'phone' => 'required|string|max:255',
    //         'times' => 'required|string|max:255',
    //         'ticket_no' => 'required|array', // Ensure ticket_no is an array
    //         'ticket_no.*' => 'required|integer', // Validate each ticket_no value
    //     ]);

    //     // Create a new Customer record or retrieve an existing one by name and phone
    //     $customer = Customer::firstOrCreate(
    //         ['customer_name' => $request->input('customer_name'), 'phone' => $request->input('phone')]
    //     );

    //     // Create a new Lottery record
    //     $lottery = new Lottery();
    //     $lottery->times = $request->input('times');
    //     $lottery->save();

    //     // Attach the customer to the lottery and store ticket numbers in the pivot table
    //     $ticketNos = $request->input('ticket_no');
    //     $customer->lotteries()->attach($lottery, array_map(function ($ticketNo) {
    //         return ['ticket_no' => $ticketNo];
    //     }, $ticketNos));

    //     // Redirect back with a success message
    //     return redirect()->back()->with('success', 'Lottery placed successfully.');
    // }


// public function store(Request $request)
// {
//     // Validate the form data
//     $request->validate([
//         'customer_name' => 'required|string|max:255',
//         'ticket_no' => 'required|array', // Ensure ticket_no is an array
//         'ticket_no.*' => 'required|integer', // Validate each ticket_no value
        
//     ]);

//     // Create a new Lottery record
//     $lottery = new Lottery();
//     $lottery->customer_name = $request->input('customer_name');
//     $lottery->save();

//     // Loop through the submitted ticket data and associate them with the lottery record
//     for ($i = 0; $i < count($request->input('ticket_no')); $i++) {
//         $lottery->tickets()->create([
//             'ticket_no' => $request->input('ticket_no')[$i],
            
//         ]);
//     }

//     // Redirect back with a success message
//     return redirect()->back()->with('success', 'Lottery placed successfully.');
// }
// public function store(Request $request)
// {
//     // Validate the form data
//     $request->validate([
//         'customer_name' => 'required|string|max:255',
//         'ticket_no' => 'required|array', // Ensure ticket_no is an array
//         'ticket_no.*' => 'required|integer', // Validate each ticket_no value
//     ]);

//     // Serialize the array of ticket_no values
//     $serializedTicketNos = json_encode($request->input('ticket_no'));

//     // Create a new Lottery record
//     $lottery = new Lottery();
//     $lottery->customer_name = $request->input('customer_name');
//     $lottery->ticket_no = $serializedTicketNos; // Store the serialized array
//     $lottery->save();

//     // Redirect back with a success message
//     return redirect()->back()->with('success', 'Lottery placed successfully.');
// }



    /**
     * Display the specified resource.
     */
    public function show(Lottery $lottery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lottery $lottery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lottery $lottery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lottery $lottery)
    {
        //
    }
}