@extends('layouts.admin')
@section('title', 'themes2')
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
                    <a href="{{ route('dashboard.admin.create.themes') }}" class="btn btn-primary mb-2">add</a>
                    {{-- <a href="{{ route('excel.themes') }}" class="btn btn-success mb-2">Download Excel</a> --}}
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>created</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><img src="{{ asset($item->code) }}" style="width:200px" alt=""> </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="{{route('dashboard.admin.edit.themes',$item->id)}}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit"></i></a>
                                        <a href="{{route('dashboard.admin.show.themes',$item->id)}}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye"></i></a>

                                        <form class="d-inline" action="{{route('dashboard.admin.destroy.themes',$item->id)}}" method="POST" onSubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
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
