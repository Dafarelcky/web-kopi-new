<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('dashboard.section.transaction.index', [
            'data' => Transaction::all()
        ]);
    }

    public function order(Request $request)
    {
       
        $rules = [
            'cust_name' => 'required|string',
            'address' => 'required|string',
            'product_name' => 'required|string',
            'weights' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
        ];

        $validated = $request->validate($rules);

        $totalPrice = $validated['quantity'] * $validated['price'];
        $validated['price'] = $totalPrice;

        Transaction::create($validated);

        $contact = Contact::get();
        $no_wa = $contact[0]->no_wa;

        $whatsappMessage = urlencode("Order Details:\n\nCustomer Name: {$validated['cust_name']}\nAddress: {$validated['address']}\nProduct: {$validated['product_name']}\nWeight: {$validated['weights']}\nQuantity: {$validated['quantity']}\nTotal Price: {$validated['price']}");

        $whatsappUrl = "https://api.whatsapp.com/send?phone={$no_wa}&text={$whatsappMessage}";

        return redirect()->away($whatsappUrl)->with('success', 'Order has been placed successfully.');
        
        // return redirect('/')->with('success', 'Order has been placed successfully.');
        

    }

    public function statusPaid(Request $request)
    {
        $transaction = Transaction::find($request->id);
        if($transaction)
        {
            $transaction->status = 'paid';
            $transaction->save();

            return redirect('/dashboard/transactions');
        }
        
    }
    public function statusFailed(Request $request)
    {
        $transaction = Transaction::find($request->id);
        if($transaction)
        {
            $transaction->status = 'failed';
            $transaction->save();

            return redirect('/dashboard/transactions');
        }
        
    }
}
