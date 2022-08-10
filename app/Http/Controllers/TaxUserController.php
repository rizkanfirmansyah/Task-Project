<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Tax;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TaxUserController extends Controller
{
    public function informationCreate(Request $request)
    {  

        $err = Validator::make($request->all(), [
            'username' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            'status_pernikahan' => 'required',
            'kebangsaan' => 'required',
            'no_handphone' => 'required',
            'no_kk' => 'required',
            'klasifikasi' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'pernyataan' => 'required',
        ]);

        if ($err->fails()) {
            return response()->json(['message' => 'Data gagal diinput', 'data' => $err->errors()], 500);
        }
            $user_id = Auth::user()->id;
           
            $tax = new Tax(['user_id' => Auth::user()->id, 'penghasilan' => $request->penghasilan,  'klasifikasi' => $request->klasifikasi, 'pekerjaan' => $request->pekerjaan, 'pernyataan' => $request->pernyataan, 'npwp' => $user_id.$request->klasifikasi]);
            $tax->save();
            $profile = new Profile(['user_id' => Auth::user()->id, 'kebangsaan' => $request->kebangsaan, 'no_kk' => $request->no_kk, 'no_handphone' => $request->no_handphone, 'tempat_lahir' => $request->tempat_lahir, 'tanggal_lahir' => $request->tanggal_lahir, 'status_pernikahan' => $request->status_pernikahan, 'gender' => $request->gender]);
            $profile->save();
         
           return redirect()->route('profile');
    }
}
