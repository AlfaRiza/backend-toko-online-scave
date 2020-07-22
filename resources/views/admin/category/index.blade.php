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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kaos Oblong</td>
                        <td>Kaos oblong terbuat dari bahan katun bambu china, nyaman dipakai, tidak panas saat terik matahari kalau di rumah aja dan tidak dingin saat hujan kalo pake jaket</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-info mr-1" href="" title="Detail"><i class="fas fa-fw fa-info"></i></a>
                                <a class="btn btn-success mr-1" href="" title="Edit"><i class="far fa-fw fa-edit"></i></a>
                                <form action="">
                                    <a class="btn btn-danger" href="" title="Hapus"><i class="fas fa-fw fa-trash"></i></a>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection