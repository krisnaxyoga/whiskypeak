@extends('layouts.admin')
@section('title','pacage')
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
                    <form action="@if($model->exists) {{ route('pacage.update', $model->id) }} @else {{ route('pacage.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($model->exists ? 'PUT' : 'POST')

                        <div class="form-group">
                            <label class="small mb-1">Nama paket <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $model->name) }}">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Harga</label>
                            <input type="text" name="price" class="form-control" value="{{ old('price', $model->price) }}">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Discount</label>
                            <input type="text" name="discount" class="form-control" value="{{ old('discount', $model->discount) }}">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Status</label>
                            <select name="status" id="" class="form-select form-control">
                                <option value="">Select Status </option>
                                    <option value="1" {{ old('status', $model->status) == 1 ? 'selected' : '' }}>
                                        active
                                    </option>
                                    <option value="2" {{ old('status', $model->status) == 2 ? 'selected' : '' }}>
                                        Non active
                                    </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Description</label>
                           <textarea name="description" class="form-control" id="" cols="30" rows="10" value="{{ old('description', $model->description) }}">{{ old('description', $model->description) }}</textarea>
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
