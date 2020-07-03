@extends('layouts.app')

@section('content')

<style>
            html, body {
                background-color: #599101;
                color: #FFF;

</style>
 <div class="container">
     <h3>DAFTAR POST</h3>
     <a href="{{ url('post/create') }}" class="btn btn-primary my-3">Tambah Data Post</a>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>TANGGAL PESANAN</th>
                 <th>KETERANGAN</th>
                 <th>TITLE</th>
                 <th>TEXT</th>
                <th>ID CATEGORY</th>
                <th>AKSI</th>
             </tr>
             @foreach ($posts as $pst)
            <tr style="color: #fff">
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $pst->date }}</td>
                <td>{{ $pst->slug }}</td>
                <td>{{ $pst->title }}</td>
                <td>{{ $pst->text }}</td>
                <td>{{ $pst->cat_id }}</td>
                <td>
                    <a href="{{ url('post/' . $pst->id . '/edit') }}" class="badge badge-success">Edit</a>
                <form action="{{ url('post/' . $pst->id) }}" method="POST" class="d-inline">
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