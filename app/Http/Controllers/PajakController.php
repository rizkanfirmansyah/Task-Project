<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class PajakController extends Controller
{
    public function index()
    {
        $title = 'Tax Page';
        return view('contents.dashboard.pajak', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Tax::all();
        return DataTables::of($data)
            ->addColumn('action', function ($tax) {
                $category = '
                    <a class="btn btn-sm btn-danger Delete" data-id="' . $tax->id . '"><i class="fas fa-trash"></i></a>
                    <a class="btn btn-sm btn-warning Edit" data-id="' . $tax->id . '"><i class="fas fa-edit"></i></a>
                    ';
                return $category;
            })
            ->addColumn('check', function ($tax) {
                return InputElement('checkbox', $tax->id);
            })
            ->editColumn('created_at', function ($tax) {
                return FormatDate($tax->created_at);
            })
            ->rawColumns(['check', 'action'])->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $err = Validator::make($request->all(), [
            'tipe_pajak' => 'required',
            'deskripsi' => 'required|',
            'penghasilan' => 'required',
        ]);

        if ($err->fails()) {
            return response()->json(['message' => 'Data gagal diinput', 'data' => $err->errors()], 500);
        }
        $request->request->add(['created_by' => 'admin']);
        // Tax::create($request->all());
        if ($request->penghasilan > 54000000) {
            $jumlah = ($request->penghasilan * 5) / 100;
            $tax = new Tax(['tipe_pajak' => $request->tipe_pajak, 'deskripsi' => $request->deskripsi, 'penghasilan' => $request->penghasilan, 'jumlah_pajak' => $jumlah]);
            $tax->save();
        }else {
            $tax = new Tax(["tipe_pajak" => $request->tipe_pajak, "deskripsi" => $request->deskripsi, "penghasilan" => $request->penghasilan, "jumlah_pajak" => 'Rp. '.$jumlah.'(Wajib Pajak)']);
            $tax->save();
        }
        return response()->json(['message' => 'Data berhasil diinput', 'data' => $request->all()], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = [
            "all" => Tax::all()->count(),
            // "active" => User::where("status", "Y")->count(),
            // "inactive" => User::where("status", "N")->count(),
            // "trash" => User::onlyTrashed()->count(),
        ];
        return response()->json(['message' => 'Data berhasil diinput', 'data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tax::find($id);
        if ($data === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }

        return response()->json(['message' => 'Data ditemukan', 'data' => $data], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Tax::find($id);
        if ($data === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }

        $validated = Validator::make($request->all(), [
            'tipe_pajak' => 'required' . $id,
            'deskripsi' => 'required' . $id,
            'penghasilan' => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json(['message' => 'Data gagal diperbaharui', 'data' => $validated->errors()], 500);
        }

        $data->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbaharui', 'data' => $data], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Tax::find($request->data);
        if ($data === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }

        if (is_array($request->data)) {
            foreach ($request->data as $value) {
                $data = Tax::find($value);
                $data->delete();
            }
        }else{
            $data->delete();
        }

        return response()->json(['message' => 'Data berhasil dihapus', 'data' => $data], 200);
    }
}
