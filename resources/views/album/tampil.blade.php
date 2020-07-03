@extends('layouts.app')

@section('content')
<style>
            html, body {
              background-color: #599101;
                color: #FFF;

</style>
 <div class="container">
     <h3>DAFTAR ALBUM</h3>
     <a href="{{ url('album/create') }}" class="btn btn-primary my-3">Tambah Data Album</a>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>NAMA BARANG</th>
                 <th>TEXT</th>
                <th>ID PHOTOS</th>
                <th>AKSI</th>
             </tr>
             @foreach ($album as $alb)
            <tr style="color: #fff">
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $alb->name }}</td>
                <td>{{ $alb->text }}</td>
                <td>{{ $alb->photos_id }}</td>
                <td>
                    <a href="{{ url('album/' . $alb->id . '/edit') }}" class="badge badge-success">Edit</a>
                <form action="{{ url('album/' . $alb->id) }}" method="POST" class="d-inline">
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