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
        //
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
    
        $feature = $this->uploadAndSaveImage($request, 'background');
        $code = $this->uploadAndSaveImage($request, 'code');
        $bodercover = $this->uploadAndSaveImage($request, 'bodercover');
        $kiriatas = $this->uploadAndSaveImage($request, 'kiriatas');
        $kananatas = $this->uploadAndSaveImage($request, 'kananatas');
        $tengahatas = $this->uploadAndSaveImage($request, 'tengahatas');
        $kiribawah = $this->uploadAndSaveImage($request, 'kiribawah');
        $kananbawah = $this->uploadAndSaveImage($request, 'kananbawah');
        $tengahbawah = $this->uploadAndSaveImage($request, 'tengahbawah');
    
        $data = new Themes();
        $data->name = $request->name;
        $data->background = $feature ? "/theme/" . $feature : "0";
        $data->code = $code ? "/theme/" . $code : "0";
        $data->cover_border = $bodercover ? "/theme/" . $bodercover : "0";
        $data->kiri_atas = $kiriatas ? "/theme/" . $kiriatas : "0";
        $data->kanan_atas = $kananatas ? "/theme/" . $kananatas : "0";
        $data->tengah_atas = $tengahatas ? "/theme/" . $tengahatas : "0";
        $data->kiri_bawah = $kiribawah ? "/theme/" . $kiribawah : "0";
        $data->kanan_bawah = $kananbawah ? "/theme/" . $kananbawah : "0";
        $data->tengah_bawah = $tengahbawah ? "/theme/" . $tengahbawah : "0";
        $data->save();
    
        return redirect()->back()->with('success', 'Data saved!');
    }
    
    protected function uploadAndSaveImage($request, $fileField) {
        if ($request->hasFile($fileField)) {
            $file = $request->file($fileField);
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $compressedImage = Image::make($file->getRealPath());
            $compressedImage->resize(1500, 1000)->save(public_path('theme/' . $filename), 90);
            return $filename;  // Hanya nama file tanpa "/theme/"
        }
        return "";
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
