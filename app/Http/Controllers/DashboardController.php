<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.main', [
            'transactions' => Transaction::all(),
            'product' => Product::all(),
            'user' => User::all()
        ]);
    }

}
