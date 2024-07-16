@extends('layouts.admin')
@section('title', 'katakata')
@section('content')
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Kata kata</h2>

                            <a href="{{ route('sepatahkata.create') }}" class="btn btn-primary mb-2">add</a>
                        </div>
                        <div class="card-body">
                            {{-- <a href="{{ route('excel.sepatahkata') }}" class="btn btn-success mb-2">Download Excel</a> --}}

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>kategory</th>
                                        <th>description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->kategori }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td><a href="{{ route('sepatahkata.edit', $item->id) }}"
                                                    class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i
                                                        data-feather="edit"></i></a>

                                                <form class="d-inline"
                                                    action="{{ route('sepatahkata.destroy', $item->id) }}" method="POST"
                                                    onSubmit="return confirm('Apakah anda yakin akan menghapus data ini?');">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit"
                                                        class="btn btn-datatable btn-icon btn-transparent-dark mr-2">
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
    </section>
@endsection
