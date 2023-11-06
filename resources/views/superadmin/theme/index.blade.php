@extends('layouts.admin')
@section('title', 'themes')
@section('content')
<section>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>theme</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('themes.create') }}" class="btn btn-primary mb-2">add</a>
                    {{-- <a href="{{ route('excel.themes') }}" class="btn btn-success mb-2">Download Excel</a> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Sambutan</th>
                                    <th>Penutup</th>
                                    <th>created</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ strip_tags($item->sambutan) }}</td>
                                    <td>{{ strip_tags($item->penutup) }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="{{ route('themes.edit',$item->id) }}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit"></i></a>

                                        <form class="d-inline" action="{{route('themes.destroy', $item->id)}}" method="POST" onSubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-datatable btn-icon btn-transparent-dark mr-2">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
