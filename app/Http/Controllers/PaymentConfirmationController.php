<?php

namespace App\Http\Controllers;

use App\Models\PaymentConfirmation;
use App\Http\Requests\StorePaymentConfirmationRequest;
use App\Http\Requests\UpdatePaymentConfirmationRequest;

class PaymentConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payment-confirmation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment-confirmation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentConfirmationRequest $request)
    {
        $validateData = $request->validate([
            'image' => 'image|file|max:1024',
            'nominal' => 'required',
            'payment' => 'required',
            'tfDate' => 'required',
            'school' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'information' => 'required'
        ]);
        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }
        $validateData['$id'] = auth()->user()->id;
        PaymentConfirmation::create($validateData);
        return redirect('/payment-confirmation')->with('success', 'Berhasil konfirmasi, Terimakasih!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentConfirmation $paymentConfirmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentConfirmation $paymentConfirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentConfirmationRequest $request, PaymentConfirmation $paymentConfirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentConfirmation $paymentConfirmation)
    {
        //
    }
}
