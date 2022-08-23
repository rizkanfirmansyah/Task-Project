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
            'alamat_kantor' => 'required',
            'pekerjaan' => 'required',
            'penghasilan' => 'required',
            'pernyataan' => 'required',
        ]);

        if ($err->fails()) {
            return response()->json(['message' => 'Data gagal diinput', 'data' => $err->errors()], 500);
        }
            $user_id = Auth::user()->id;
            $penghasilan = $request->penghasilan;
            $jumlah_pajak = ($penghasilan * 5) /100;
            if($penghasilan > 5000000){
                $tipe = "Wajib Pajak";
            }else{
                $tipe = "Tidak Wajib Pajak";
            }   
           
            $tax = new Tax(['user_id' => Auth::user()->id, 'penghasilan' => $penghasilan,  'alamat_kantor' => $request->alamat_kantor, 'pekerjaan' => $request->pekerjaan, 'pernyataan' => $request->pernyataan, 'jumlah_pajak' => $jumlah_pajak, 'tipe_pajak' => $tipe, 'npwp' => $user_id.$request->no_kk]);
            $tax->save();
            $profile = new Profile(['user_id' => Auth::user()->id, 'kebangsaan' => $request->kebangsaan, 'no_kk' => $request->no_kk, 'no_handphone' => $request->no_handphone, 'tempat_lahir' => $request->tempat_lahir, 'tanggal_lahir' => $request->tanggal_lahir, 'status_pernikahan' => $request->status_pernikahan, 'gender' => $request->gender]);
            $profile->save();
         
           return redirect()->route('profile');
    }
}
