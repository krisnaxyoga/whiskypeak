@extends('layouts.admin')
@section('title', 'themes')
@section('content')
<section>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>theme sell</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('selltheme.create') }}" class="btn btn-primary mb-2">add</a>
                    {{-- <a href="{{ route('excel') }}" class="btn btn-success mb-2">Download Excel</a> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>thema</th>
                                    <th>paket</th>
                                    <th>created</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td><img src="{{ asset($item->theme->code) }}" style="width:200px" alt=""> </td>
                                    <td>{{$item->theme->name}}</td>
                                    <td>{{ $item->pakage->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="{{route('selltheme.edit',$item->id)}}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="edit"></i></a>
                                        <a href="{{route('selltheme.show',$item->id)}}" class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="eye"></i></a>

                                        <form class="d-inline" action="{{route('selltheme.destroy',$item->id)}}" method="POST" onSubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
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
