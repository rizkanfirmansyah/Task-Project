<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkoutCreate(Request $request)
    {
        $err = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'payment' => 'required',
            'name_card' => 'required',
            'cc_number' => 'required',
            'expiration' => 'required',
            'cvv' => 'required',
        ]);

        if ($err->fails()) {
            return response()->json(['message' => 'Data gagal diinput', 'data' => $err->errors()], 500);
        }
            $user_id = Auth::user()->id;

            $transaction = new Transaction(['user_id' => Auth::user()->id, 'first_name' => $request->first_name,  'last_name' => $request->last_name, 'email' => $request->email, 'address' => $request->address, 'payment' => $request->payment, 'name_card' => $request->name_card, 'cc_number' => $request->cc_number, 'expiration' => $request->expiration, 'cvv' => $request->cvv]);
            $transaction->save();
         
           return redirect()->route('profile');
    }
}
