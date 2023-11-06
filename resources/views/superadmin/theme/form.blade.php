@extends('layouts.admin')
@section('title','themes')
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
                    <form action="@if($model->exists) {{ route('dashboard.admin.update.themes', $model->id) }} @else {{ route('dashboard.admin.store.themes') }} @endif" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($model->exists ? 'PUT' : 'POST')

                        <div class="form-group">
                            <label class="small mb-1">Name <span class="text-danger">*</span></label>
                            <input class="form-control form-control-solid" name="name" type="text" placeholder="Name" value="{{ old('name', $model->name) }}" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Background <span class="text-danger">*</span></label>
                            <input id="background-image-input" class="form-control form-control-solid" name="background" type="file" placeholder="Background" value="{{ old('background', $model->background) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="preview_background" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">Mockup Image <span class="text-danger">*</span></label>
                            <input id="mockup-image-input" class="form-control form-control-solid" name="code" type="file" placeholder="Mockup image" value="{{ old('code', $model->code) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="preview_mockup" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">border cover<span class="text-danger">*</span></label>
                            <input id="bordercover" class="form-control form-control-solid" name="bordercover" type="file" placeholder="Mockup image" value="{{ old('cover_border', $model->cover_border) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="bordercover_preview" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">kiri atas</label>
                            <input id="kiriatas" class="form-control form-control-solid" name="kiriatas" type="file" placeholder="Mockup image" value="{{ old('kiri_atas', $model->kiri_atas) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="kiriatas_preview" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">kanan atas</label>
                            <input id="kananatas" class="form-control form-control-solid" name="kananatas" type="file" placeholder="Mockup image" value="{{ old('kanan_atas', $model->kanan_atas) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="kananatas_preview" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">tengah atas</label>
                            <input id="tengahatas" class="form-control form-control-solid" name="tengahatas" type="file" placeholder="Mockup image" value="{{ old('tengah_atas', $model->tengah_atas) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="tengahatas_preview" src="#" alt="Preview Gambar">
                        </div>
                        <div class="form-group">
                            <label class="small mb-1">kanan bawah</label>
                            <input id="kananbawah" class="form-control form-control-solid" name="kananbawah" type="file" placeholder="Mockup image" value="{{ old('kanan_bawah', $model->kanan_bawah) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="kananbawah_preview" src="#" alt="Preview Gambar">
                        </div> 
                        <div class="form-group">
                            <label class="small mb-1">kiri bawah</label>
                            <input id="kiribawah" class="form-control form-control-solid" name="kiribawah" type="file" placeholder="Mockup image" value="{{ old('kiri_bawah', $model->kiri_bawah) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="kiribawah_preview" src="#" alt="Preview Gambar">
                        </div> 
                        <div class="form-group">
                            <label class="small mb-1">tengah bawah</label>
                            <input id="tengahbawah" class="form-control form-control-solid" name="tengahbawah" type="file" placeholder="Mockup image" value="{{ old('tengah_bawah', $model->tengah_bawah) }}" />
                            <br>
                            <img style="width: 200px; height: auto;" id="tengahbawah_preview" src="#" alt="Preview Gambar">
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
<script>
    var backgroundInput = document.getElementById('background-image-input');
    var bgpreviewImg = document.getElementById('preview_background');

    backgroundInput.addEventListener('change', function(e) {
      var file = backgroundInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        bgpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
</script>
<script>
    var mockupInput = document.getElementById('mockup-image-input');
    var mkpreviewImg = document.getElementById('preview_mockup');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('kiriatas');
    var mkpreviewImg = document.getElementById('kiriatas_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('kananatas');
    var mkpreviewImg = document.getElementById('kananatas_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('tengahatas');
    var mkpreviewImg = document.getElementById('tengahatas_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('kiribawah');
    var mkpreviewImg = document.getElementById('kiribawah_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('kananbawah');
    var mkpreviewImg = document.getElementById('kananbawah_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
  <script>
    var mockupInput = document.getElementById('tengahbawah');
    var mkpreviewImg = document.getElementById('tengahbawah_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
   <script>
    var mockupInput = document.getElementById('bordercover');
    var mkpreviewImg = document.getElementById('bordercover_preview');

    mockupInput.addEventListener('change', function(e) {
      var file = mockupInput.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        mkpreviewImg.src = e.target.result;
      }

      reader.readAsDataURL(file);
    });
  </script>
@endsection
