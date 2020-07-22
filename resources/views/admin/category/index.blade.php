@extends('layouts.admin_template')

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <h1>Category</h1>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="{{ route('category-add') }}" class="align-self-end btn btn-warning px-3 py-2 rounded-pill"><i class="fas fa-fw fa-plus"></i> Tambah Category</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Sejak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ Str::limit($category->description, 30, ' ...') }}</td>
                        <td>{{ $category->created_at <= Carbon\Carbon::now()->subDays(1)   ? Carbon\Carbon::parse($category->created_at)->format('d-m-Y i') : Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-info mr-1" href="{{ route('category-detail', $category->slug) }}" title="Detail"><i class="fas fa-fw fa-info"></i></a>
                                <a class="btn btn-success mr-1" href="{{ route('category-edit', $category->slug) }}" title="Edit"><i class="far fa-fw fa-edit"></i></a>
                                <form action="{{ route('category-destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmModal"  title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush