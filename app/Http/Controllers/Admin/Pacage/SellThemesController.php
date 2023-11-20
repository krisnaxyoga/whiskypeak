<?php

namespace App\Http\Controllers\Admin\Pacage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThemesSell;
use App\Models\Themes;
use App\Models\PakageUndangan;
use Illuminate\Support\Facades\Validator;

class SellThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ThemesSell::all();

        return view('superadmin.sellthemes.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $model = new ThemesSell;
        $theme = Themes::all();
        $pacage = PakageUndangan::all();
        return view('superadmin.sellthemes.form',compact('model','theme','pacage'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pakage_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = new ThemesSell();
        $data->theme_id = $request->theme_id;
        $data->pakage_id = $request->pakage_id;
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
        $model = ThemesSell::find($id);

        return view('superadmin.sellthemes.form',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'pakage_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $data = ThemesSell::find($id);
        $data->theme_id = $request->theme_id;
        $data->pakage_id = $request->pakage_id;
        $data->save();

        return redirect()->back()->with('success', 'Data saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = ThemesSell::find($id);
        $model->delete();

        return redirect()->back()->with('success', 'Data deleted!');
    }
}
