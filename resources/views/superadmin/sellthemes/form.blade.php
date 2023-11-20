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
                    <form action="@if($model->exists) {{ route('selltheme.update', $model->id) }} @else {{ route('selltheme.store') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($model->exists ? 'PUT' : 'POST')

                        <div class="form-group">
                            <label class="small mb-1">theme <span class="text-danger">*</span></label>
                            <select name="theme_id" id="" class="form-control">
                                
                                <option value="">- pilih theme -</option>
                                @foreach ($theme as $item)
                                <option value="{{$item->id}}"><img src="{{ asset($item->code) }}" style="width:50px" alt=""> {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Pacage</label>
                            <select class="form-control" name="pakage_id" id="">
                                <option value="">- pilih paket -</option>
                                @foreach ($pacage as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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
