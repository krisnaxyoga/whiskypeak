<?php

namespace App\Http\Controllers\Admin\Themes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Themes;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

class ThemesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Themes::all();
        return view('superadmin.theme.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Themes;
        return view('superadmin.theme.form',compact('model'));
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

        if ($request->hasFile('background')) {
            $background = $request->file('background');
            $filename1 = time() . 'background' . '.'. $background->getClientOriginalExtension();
            $background->move(public_path('theme'), $filename1);
        } else {
            $filename1 = "";
        }
        
        if ($request->hasFile('code')) {
            $codex = $request->file('code');
            $filename2 = time() . 'morkup' . '.'. $codex->getClientOriginalExtension();
            $codex->move(public_path('theme'), $filename2);
        } else {
            $filename2 = "";
        }
        
        if ($request->hasFile('bordercover')) {
            $bordercoverx = $request->file('bordercover');
            $filename3 = time() . 'bordercover' . '.'. $bordercoverx->getClientOriginalExtension();
            $bordercoverx->move(public_path('theme'), $filename3);
        } else {
            $filename3 = "";
        }
        
        if ($request->hasFile('kiriatas')) {
            $kiriatasx = $request->file('kiriatas');
            $filename4 = time() . 'kiriatas' . '.'. $kiriatasx->getClientOriginalExtension();
            $kiriatasx->move(public_path('theme'), $filename4);
        } else {
            $filename4 = "";
        }
        
        if ($request->hasFile('kananatas')) {
            $kananatasx = $request->file('kananatas');
            $filename5 = time() . 'kananatas' . '.'. $kananatasx->getClientOriginalExtension();
            $kananatasx->move(public_path('theme'), $filename5);
        } else {
            $filename5 = "";
        }
        
        if ($request->hasFile('tengahatas')) {
            $tengahatasx = $request->file('tengahatas');
            $filename6 = time() . 'tengahatas' . '.'. $tengahatasx->getClientOriginalExtension();
            $tengahatasx->move(public_path('theme'), $filename6);
        } else {
            $filename6 = "";
        }
        
        if ($request->hasFile('kiribawah')) {
            $kiribawahx = $request->file('kiribawah');
            $filename7 = time() . 'kiribawah' . '.'. $kiribawahx->getClientOriginalExtension();
            $kiribawahx->move(public_path('theme'), $filename7);
        } else {
            $filename7 = "";
        }
        
        if ($request->hasFile('kananbawah')) {
            $kananbawahx = $request->file('kananbawah');
            $filename8 = time() . 'kananbawah' . '.'. $kananbawahx->getClientOriginalExtension();
            $kananbawahx->move(public_path('theme'), $filename8);
        } else {
            $filename8 = "";
        }
        
        if ($request->hasFile('tengahbawah')) {
            $tengahbawahx = $request->file('tengahbawah');
            $filename9 = time() . 'tengahbawah' . '.'. $tengahbawahx->getClientOriginalExtension();
            $tengahbawahx->move(public_path('theme'), $filename9);
        } else {
            $filename9 = "";
        }
        

        $feature = "/theme/".$filename1;
        $code = "/theme/".$filename2;
        $bordercover = "/theme/".$filename3;
        $kiriatas = "/theme/".$filename4;
        $kananatas = "/theme/".$filename5;
        $tengahatas = "/theme/".$filename6;
        $kiribawah = "/theme/".$filename7;
        $kananbawah = "/theme/".$filename8;
        $tengahbawah = "/theme/".$filename9;
        
    
        $data = new Themes();
        $data->name = $request->name;
        $data->background = $feature ? $feature : "0";
        $data->code = $code ? $code : "0";
        $data->cover_border = $bordercover ? $bordercover : "0";
        $data->kiri_atas = $kiriatas ? $kiriatas : "0";
        $data->kanan_atas = $kananatas ? $kananatas : "0";
        $data->tengah_atas = $tengahatas ? $tengahatas : "0";
        $data->kiri_bawah = $kiribawah ? $kiribawah : "0";
        $data->kanan_bawah = $kananbawah ? $kananbawah : "0";
        $data->tengah_bawah = $tengahbawah ? $tengahbawah : "0";
        $data->status = "1";
        $data->save();
    
        return redirect()->back()->with('success', 'Data saved!');
    }

    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $theme = Themes::find($id);
        return view('theme.defautlt',compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Themes::find($id);
        return view('superadmin.theme.form',compact('model'));
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

        if ($request->hasFile('background')) {
            $background = $request->file('background');
            $filename1 = time() . 'background' . '.'. $background->getClientOriginalExtension();
            $background->move(public_path('theme'), $filename1);
        } else {
            $filename1 = "";
        }
        
        if ($request->hasFile('code')) {
            $codex = $request->file('code');
            $filename2 = time() . 'morkup' . '.'. $codex->getClientOriginalExtension();
            $codex->move(public_path('theme'), $filename2);
        } else {
            $filename2 = "";
        }
        
        if ($request->hasFile('bordercover')) {
            $bordercoverx = $request->file('bordercover');
            $filename3 = time() . 'bordercover' . '.'. $bordercoverx->getClientOriginalExtension();
            $bordercoverx->move(public_path('theme'), $filename3);
        } else {
            $filename3 = "";
        }
        
        if ($request->hasFile('kiriatas')) {
            $kiriatasx = $request->file('kiriatas');
            $filename4 = time() . 'kiriatas' . '.'. $kiriatasx->getClientOriginalExtension();
            $kiriatasx->move(public_path('theme'), $filename4);
        } else {
            $filename4 = "";
        }
        
        if ($request->hasFile('kananatas')) {
            $kananatasx = $request->file('kananatas');
            $filename5 = time() . 'kananatas' . '.'. $kananatasx->getClientOriginalExtension();
            $kananatasx->move(public_path('theme'), $filename5);
        } else {
            $filename5 = "";
        }
        
        if ($request->hasFile('tengahatas')) {
            $tengahatasx = $request->file('tengahatas');
            $filename6 = time() . 'tengahatas' . '.'. $tengahatasx->getClientOriginalExtension();
            $tengahatasx->move(public_path('theme'), $filename6);
        } else {
            $filename6 = "";
        }
        
        if ($request->hasFile('kiribawah')) {
            $kiribawahx = $request->file('kiribawah');
            $filename7 = time() . 'kiribawah' . '.'. $kiribawahx->getClientOriginalExtension();
            $kiribawahx->move(public_path('theme'), $filename7);
        } else {
            $filename7 = "";
        }
        
        if ($request->hasFile('kananbawah')) {
            $kananbawahx = $request->file('kananbawah');
            $filename8 = time() . 'kananbawah' . '.'. $kananbawahx->getClientOriginalExtension();
            $kananbawahx->move(public_path('theme'), $filename8);
        } else {
            $filename8 = "";
        }
        
        if ($request->hasFile('tengahbawah')) {
            $tengahbawahx = $request->file('tengahbawah');
            $filename9 = time() . 'tengahbawah' . '.'. $tengahbawahx->getClientOriginalExtension();
            $tengahbawahx->move(public_path('theme'), $filename9);
        } else {
            $filename9 = "";
        }
        

        $feature = "/theme/".$filename1;
        $code = "/theme/".$filename2;
        $bordercover = "/theme/".$filename3;
        $kiriatas = "/theme/".$filename4;
        $kananatas = "/theme/".$filename5;
        $tengahatas = "/theme/".$filename6;
        $kiribawah = "/theme/".$filename7;
        $kananbawah = "/theme/".$filename8;
        $tengahbawah = "/theme/".$filename9;
        
    
        $data = Themes::find($id);
        $data->name = $request->name;
        $data->background = $feature ? $feature : $data->background;
        $data->code = $code ? $code : $data->code;
        $data->cover_border = $bordercover ? $bordercover : $data->cover_border;
        $data->kiri_atas = $kiriatas ? $kiriatas : $data->kiri_atas;
        $data->kanan_atas = $kananatas ? $kananatas : $data->kanan_atas;
        $data->tengah_atas = $tengahatas ? $tengahatas : $data->tengah_atas;
        $data->kiri_bawah = $kiribawah ? $kiribawah : $data->kiri_bawah;
        $data->kanan_bawah = $kananbawah ? $kananbawah : $data->kanan_bawah;
        $data->tengah_bawah = $tengahbawah ? $tengahbawah : $data->tengah_bawah;
        $data->status = "1";
        $data->save();
    
        return redirect()->back()->with('success', 'Data saved!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Themes::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'data deleted!');
    }
}
