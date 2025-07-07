<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
   
    public function index(Request $request) 
    {
        $customers = Customers::paginate();
        return view('customers.index',compact('customers'));
    }

    public function show()
    {
        
    }
}
