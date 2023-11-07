<?php

namespace App\Http\Controllers\Admin\Themes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Themes;
use Illuminate\Support\Facades\File;
// use Intervention\Image\Facades\Image;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

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


        $feature = "";
        $code = "";
        $bordercover = "";
        $kiriatas = "";
        $kananatas = "";
        $tengahatas = "";
        $kiribawah = "";
        $kananbawah = "";
        $tengahbawah = "";

        if ($request->hasFile('background')) {
            $background = $request->file('background');
            $filename1 = time() . 'background' . '.'. $background->getClientOriginalExtension();
            $background->move(public_path('theme'), $filename1);
            $feature = "/theme/".$filename1;
        }

        if ($request->hasFile('code')) {
            $codex = $request->file('code');
            $filename2 = time() . 'morkup' . '.'. $codex->getClientOriginalExtension();
            $codex->move(public_path('theme'), $filename2);
            $code = "/theme/".$filename2;
        }

        if ($request->hasFile('bordercover')) {
            $bordercoverx = $request->file('bordercover');
            $filename3 = time() . 'bordercover' . '.'. $bordercoverx->getClientOriginalExtension();
            $bordercoverx->move(public_path('theme'), $filename3);
            $bordercover = "/theme/".$filename3;
        }

        if ($request->hasFile('kiriatas')) {
            $kiriatasx = $request->file('kiriatas');
            $filename4 = time() . 'kiriatas' . '.'. $kiriatasx->getClientOriginalExtension();
            $kiriatasx->move(public_path('theme'), $filename4);
            $kiriatas = "/theme/".$filename4;
        }

        if ($request->hasFile('kananatas')) {
            $kananatasx = $request->file('kananatas');
            $filename5 = time() . 'kananatas' . '.'. $kananatasx->getClientOriginalExtension();
            $kananatasx->move(public_path('theme'), $filename5);
            $kananatas = "/theme/".$filename5;
        }

        if ($request->hasFile('tengahatas')) {
            $tengahatasx = $request->file('tengahatas');
            $filename6 = time() . 'tengahatas' . '.'. $tengahatasx->getClientOriginalExtension();
            $tengahatasx->move(public_path('theme'), $filename6);
            $tengahatas = "/theme/".$filename6;
        }

        if ($request->hasFile('kiribawah')) {
            $kiribawahx = $request->file('kiribawah');
            $filename7 = time() . 'kiribawah' . '.'. $kiribawahx->getClientOriginalExtension();
            $kiribawahx->move(public_path('theme'), $filename7);
            $kiribawah = "/theme/".$filename7;
        }

        if ($request->hasFile('kananbawah')) {
            $kananbawahx = $request->file('kananbawah');
            $filename8 = time() . 'kananbawah' . '.'. $kananbawahx->getClientOriginalExtension();
            $kananbawahx->move(public_path('theme'), $filename8);
            $kananbawah = "/theme/".$filename8;
        }

        if ($request->hasFile('tengahbawah')) {
            $tengahbawahx = $request->file('tengahbawah');
            $filename9 = time() . 'tengahbawah' . '.'. $tengahbawahx->getClientOriginalExtension();
            $tengahbawahx->move(public_path('theme'), $filename9);
            $tengahbawah = "/theme/".$filename9;
        }

        $data = new Themes();
        $data->name = $request->name;
        $data->background = $feature;
        $data->code = $code;
        $data->cover_border = $bordercover;
        $data->kiri_atas = $kiriatas;
        $data->kanan_atas = $kananatas;
        $data->tengah_atas = $tengahatas;
        $data->kiri_bawah = $kiribawah;
        $data->kanan_bawah = $kananbawah;
        $data->tengah_bawah = $tengahbawah;
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

        $data = Themes::find($id);

        if ($request->hasFile('background')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->background))) {
                unlink(public_path($data->background));
            }
            $background = $request->file('background');
            $filename1 = time() . 'background' . '.'. $background->getClientOriginalExtension();
            $background->move(public_path('theme'), $filename1);
            $feature = "/theme/".$filename1;
        } else {
            $filename1 = $data->background;
        }

        if ($request->hasFile('code')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->code))) {
                unlink(public_path($data->code));
            }
            $codex = $request->file('code');
            $filename2 = time() . 'morkup' . '.'. $codex->getClientOriginalExtension();
            $codex->move(public_path('theme'), $filename2);
            $code = "/theme/".$filename2;
        } else {
            $filename2 = $data->code;
        }

        if ($request->hasFile('bordercover')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->cover_border))) {
                unlink(public_path($data->cover_border));
            }
            $bordercoverx = $request->file('bordercover');
            $filename3 = time() . 'bordercover' . '.'. $bordercoverx->getClientOriginalExtension();
            $bordercoverx->move(public_path('theme'), $filename3);
            $bordercover = "/theme/".$filename3;
        } else {
            $filename3 = $data->cover_border;
        }

        if ($request->hasFile('kiriatas')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->kiri_atas))) {
                unlink(public_path($data->kiri_atas));
            }
            $kiriatasx = $request->file('kiriatas');
            $filename4 = time() . 'kiriatas' . '.'. $kiriatasx->getClientOriginalExtension();
            $kiriatasx->move(public_path('theme'), $filename4);
            $kiriatas = "/theme/".$filename4;
        } else {
            $filename4 = $data->kiri_atas;
        }

        if ($request->hasFile('kananatas')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->kanan_atas))) {
                unlink(public_path($data->kanan_atas));
            }
            $kananatasx = $request->file('kananatas');
            $filename5 = time() . 'kananatas' . '.'. $kananatasx->getClientOriginalExtension();
            $kananatasx->move(public_path('theme'), $filename5);

            $kananatas = "/theme/".$filename5;
        } else {
            $filename5 = $data->kanan_atas;
        }

        if ($request->hasFile('tengahatas')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->tengah_atas))) {
                unlink(public_path($data->tengah_atas));
            }
            $tengahatasx = $request->file('tengahatas');
            $filename6 = time() . 'tengahatas' . '.'. $tengahatasx->getClientOriginalExtension();
            $tengahatasx->move(public_path('theme'), $filename6);


            $tengahatas = "/theme/".$filename6;
        } else {
            $filename6 = $data->tengah_atas;
        }

        if ($request->hasFile('kiribawah')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->kiri_bawah))) {
                unlink(public_path($data->kiri_bawah));
            }
            $kiribawahx = $request->file('kiribawah');
            $filename7 = time() . 'kiribawah' . '.'. $kiribawahx->getClientOriginalExtension();
            $kiribawahx->move(public_path('theme'), $filename7);

            $kiribawah = "/theme/".$filename7;
        } else {
            $filename7 = $data->kiri_bawah;
        }

        if ($request->hasFile('kananbawah')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->kanan_bawah))) {
                unlink(public_path($data->kanan_bawah));
            }
            $kananbawahx = $request->file('kananbawah');
            $filename8 = time() . 'kananbawah' . '.'. $kananbawahx->getClientOriginalExtension();
            $kananbawahx->move(public_path('theme'), $filename8);

            $kananbawah = "/theme/".$filename8;
        } else {
            $filename8 = $data->kanan_bawah;
        }

        if ($request->hasFile('tengahbawah')) {
            // Hapus gambar lama
            if (file_exists(public_path($data->tengah_bawah))) {
                unlink(public_path($data->tengah_bawah));
            }
            $tengahbawahx = $request->file('tengahbawah');
            $filename9 = time() . 'tengahbawah' . '.'. $tengahbawahx->getClientOriginalExtension();
            $tengahbawahx->move(public_path('theme'), $filename9);

            $tengahbawah = "/theme/".$filename9;
        } else {
            $filename9 = $data->tengah_bawah;

        }



        $data->name = $request->name;
        $data->background = $feature;
        $data->code = $code;
        $data->cover_border = $bordercover;
        $data->kiri_atas = $kiriatas;
        $data->kanan_atas = $kananatas;
        $data->tengah_atas = $tengahatas;
        $data->kiri_bawah = $kiribawah;
        $data->kanan_bawah = $kananbawah;
        $data->tengah_bawah = $tengahbawah;
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

        if ($data) {
            if (File::exists(public_path($data->ba)))
            {
                File::delete(public_path($data->ba));
            }

            if (File::exists(public_path($data->code)))
            {
                File::delete(public_path($data->code));
            }

            if (File::exists(public_path($data->cover_border)))
            {
                File::delete(public_path($data->cover_border));
            }

            if (File::exists(public_path($data->kiri_atas)))
            {
                File::delete(public_path($data->kiri_atas));
            }

            if (File::exists(public_path($data->kanan_atas)))
            {
                File::delete(public_path($data->kanan_atas));
            }

            if (File::exists(public_path($data->tengah_atas)))
            {
                File::delete(public_path($data->tengah_atas));
            }
            if (File::exists(public_path($data->kiri_bawah)))
            {
                File::delete(public_path($data->kiri_bawah));
            }
            if (File::exists(public_path($data->kanan_bawah)))
            {
                File::delete(public_path($data->kanan_bawah));
            }
            if (File::exists(public_path($data->tengah_bawah)))
            {
                File::delete(public_path($data->tengah_bawah));
            }

            $data->delete();
        }

        return redirect()->back()->with('success', 'data deleted!');
    }
}
