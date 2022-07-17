<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    //
    public function index()
    {
        $title = 'User Page';
        return view('contents.dashboard.user', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (empty($_GET['status'])) {
            $data = User::all();
        }else{
            if($_GET['status'] == 'trash'){
                $data = User::onlyTrashed();
            }else{
                $data = DB::table('users')->where('deleted_at', null)->where('status', $_GET['status'])->get();
            }
        }
        return DataTables::of($data)
            ->addColumn('action', function ($user) {
                $category = '
                    <a class="btn btn-sm btn-danger Delete" data-id="' . $user->id . '"><i class="fas fa-trash"></i></a>
                    <a class="btn btn-sm btn-warning Edit" data-id="' . $user->id . '"><i class="fas fa-edit"></i></a>
                    ';
                return $category;
            })
            ->addColumn('check', function ($user) {
                return InputElement('checkbox', $user->id);
            })
            ->editColumn('created_at', function ($user) {
                return FormatDate($user->created_at);
            })
            ->editColumn('status', function ($user) {
                $checked = $user->status == 'Y' ? 'checked' : '';
                return '<input type="checkbox" class="input-toggle" ' . $checked . ' data-value="' . $user->id . '"> ';
            })
            ->rawColumns(['check', 'action', 'status'])->make(true);
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
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($err->fails()) {
            return response()->json(['message' => 'Data gagal diinput', 'data' => $err->errors()], 500);
        }
        $request->request->add(['created_by' => 'admin']);
        User::create($request->all());
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
            "all" => User::all()->count(),
            "active" => User::where("status", "Y")->count(),
            "inactive" => User::where("status", "N")->count(),
            "trash" => User::onlyTrashed()->count(),
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
        $data = User::find($id);
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
        $data = User::find($id);
        if ($data === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }

        $validated = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:users,name,' . $id,
            'email' => 'required|max:255|unique:users,email,' . $id,
            'password' => 'required',
            'role' => 'required',
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
        $data = User::find($request->data);
        if ($data === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }

        if (is_array($request->data)) {
            foreach ($request->data as $value) {
                $data = User::find($value);
                $data->delete();
            }
        }else{
            $data->delete();
        }

        return response()->json(['message' => 'Data berhasil dihapus', 'data' => $data], 200);
    }

    public function change(Request $request)
    {
        if ($request->value === null) {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => 'Value not null'], 500);
        }
        $data = User::find($request->value);
        $data->update(['status' => $data->status == 1 ? '0' : '1']);

        return response()->json(['message' => 'Data berhasil diperbaharui', 'data' => $data], 200);
    }
}
