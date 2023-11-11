<?php

namespace App\Http\Controllers\Admin\Themes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThemeSepatahkata;

use Illuminate\Support\Facades\Validator;

class SepatahKataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ThemeSepatahkata::all();

        return view('superadmin.katakata.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new ThemeSepatahkata;

        return view('superadmin.katakata.form',compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategory' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = new ThemeSepatahkata();
        $data->user_id = auth()->user()->id;
        $data->kategori = $request->kategory;
        $data->description = $request->desc;
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
        $model = ThemeSepatahkata::find($id);

        return view('superadmin.katakata.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kategory' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = ThemeSepatahkata::find($id);
        $data->kategori = $request->kategory;
        $data->description = $request->desc;
        $data->save();

        return redirect()->back()->with('success', 'Data saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = ThemeSepatahkata::find($id);
        $model->delete();

        return redirect()->back()->with('success', 'Data delete');
    }
}
