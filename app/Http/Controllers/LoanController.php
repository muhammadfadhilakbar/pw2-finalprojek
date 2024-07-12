<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('loans.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',
        ]);

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'Loan added successfully!');
    }





    public function edit(Loan $loan)
    {
        $cars = Car::all();
        return view('loans.edit', compact('loan', 'cars'));
    }

    public function update(Request $request, Loan $loan)
{
    $validatedData = $request->validate([
        'car_id' => 'required',
        'user' => 'required',
        'loan_date' => 'required',
        'return_date' => 'required',
        'total_cost' => 'required',
        'status' => 'required',

    ]);

    $loan->update($validatedData);

    return redirect('/loans')->with('success', 'Loan updated successfully!');
}





    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/loans')->with('success', 'Loan deleted successfully!');
    }
}
