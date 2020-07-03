@extends('layouts.app')

@section('content')

<style>
            html, body {
                background-color: #599101;
                color: #FFF;

</style>
 <div class="container">
     <h3>DAFTAR CATEGORY </h3>
     <a href="{{ url('category/create') }}" class="btn btn-primary my-3">Tambah Data Category</a>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>NAMA BARANG</th>
                 <th>TEXT</th>
                 <th>AKSI</th>
             </tr>
             @foreach ($categories as $ctg)
            <tr style="color: #fff">
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $ctg->name }}</td>
                <td>{{ $ctg->text }}</td>
                <td>
                    <a href="{{ url('category/' . $ctg->id . '/edit') }}" class="badge badge-success">Edit</a>
                <form action="{{ url('category/' . $ctg->id) }}" method="POST" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                    @method('delete')
                    @csrf
                    <button class="badge badge-danger">Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
             </thead>
        </table>
</div>
@endsection