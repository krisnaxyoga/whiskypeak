@extends('layouts.admin')
@section('title','katakata')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">@if($model->exists) Edit @else Tambah @endif  @yield('title')</div>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert with-close alert-danger mb-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="@if($model->exists) {{ route('sepatahkata.update', $model->id) }} @else {{ route('sepatahkata.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($model->exists ? 'PUT' : 'POST')

                        <div class="form-group">
                            <label class="small mb-1">Kategori <span class="text-danger">*</span></label>
                            <select name="kategory" id="" class="form-control">
                                
                                <option value="">- pilih kategori -</option>
                                <option value="sambutan">Sambutan</option>
                                {{-- <option value="kata_isi_1">kata isi pertama</option>
                                <option value="kata_isi_2">kata isi kedua</option> --}}
                                {{-- <option value="Quote">Quotes</option> --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Kata Kata</label>
                           <textarea name="desc" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit"><i class="far fa-save mr-1"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
