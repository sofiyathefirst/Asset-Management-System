<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;
use App\Models\Loan;
use Hash;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'loan_code' => 'required',
            'loan_name' => 'required',
            'loan_type' => 'required',
            'loan_borrower' => 'required',
            'loan_financiar' => 'required',
            'loan_account_num' => 'nullable|integer',
            'loan_principal' => 'required',
            'loan_interest' => 'required',
            'loan_amount' => 'required',
            'loan_monthly_payment' => 'nullable',
        ]);
    
        Loan::create($request->all());
    
           return redirect()->route('loan.index')
                            ->with('success','Loan added successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $loans = Loan::find($id);
        return view('loan.show',compact('loans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $loans = Loan::find($id);
        return view('loan.edit',compact('loans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $loans = Loan::findOrFail($id);

        //Validate the request data
        $validated = $request->validate([
            'loan_code' => 'required',
            'loan_name' => 'required',
            'loan_type' => 'required',
            'loan_borrower' => 'required',
            'loan_financiar' => 'required',
            'loan_account_num' => 'nullable|integer',
            'loan_principal' => 'required',
            'loan_interest' => 'required',
            'loan_amount' => 'required',
            'loan_monthly_payment' => 'nullable',
    ]);

       $loans->update($validated);

        return redirect()->route('loan.index')->with('success', 'Loan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $loans = Loan::findOrFail($id);
        $loans->delete();

        return redirect()->route('loan.index')->with('success', 'Loan deleted successfully.');
    }
}
