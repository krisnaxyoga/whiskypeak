<?php

namespace App\Http\Controllers\Admin\Pacage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PakageUndangan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PacageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PakageUndangan::all();

        return view('superadmin.pacage.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new PakageUndangan;

        return view('superadmin.pacage.form',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = new PakageUndangan();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->discount = $request->discount;
        $data->status = $request->status;
        $data->code = Str::random(4);
        $data->description = $request->description;
        $data->save();

        return redirect()->back()->with('success', 'Data saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = PakageUndangan::find($id);

        return view('superadmin.pacage.form',compact('model'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = PakageUndangan::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->discount = $request->discount;
        $data->status = $request->status;
        $data->code = Str::random(4);
        $data->description = $request->description;
        $data->save();

        return redirect()->back()->with('success', 'Data saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
