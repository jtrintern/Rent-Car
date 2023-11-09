<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaction = Transaction::all()->reverse();
        return view('admin.transaction', compact('transaction'));
    }
    
    public function dashboard()
    {
        //
        $transaction = Transaction::all()->reverse();
        return view('admin.dashboard', compact('transaction'));
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
    public function book(TransactionRequest $request)
    {
        //
        $validated = $request->all();
        // dd($validated);

        $fileName = time() . '.' . $request->fotoktp->extension();
        $validated['fotoktp'] = $fileName;

        $request->fotoktp->move(public_path('images/transaction'), $fileName);

        $trans = Transaction::create($validated);
        return redirect('/invoice/'.$trans->id);
    }

    /**
     * Display the specified resource.
     */
    public function view(Transaction $transaction)
    {
        //
        return view('rentcarr.page.invoice', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
