@extends('layouts.app')

@section('content')

<style>
            html, body {
           background-color: #599101;
                color: #FFF;


</style>
 <div class="container">
     <h3>DAFTAR PHOTOS</h3>
      <a href="{{ url('photos/create') }}" class="btn btn-primary my-3">Tambah Data Photos</a>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>TANGGAL</th>
                 <th>TITLE</th>
                 <th>TEXT</th>
                <th>ID POST</th>
                <th>AKSI</th>
             </tr>
             @foreach ($photos as $photo)
            <tr style="color: #fff">
                <th scope='"row'>{{ $loop->iteration }}</th>
                <td>{{ $photo->date }}</td>
                <td>{{ $photo->title }}</td>
                <td>{{ $photo->text }}</td>
                <td>{{ $photo->post_id }}</td>
                <td>
                     <a href="{{ url('photos/' . $photo->id . '/edit') }}" class="badge badge-success">Edit</a>
                <form action="{{ url('photos/' . $photo->id) }}" method="POST" class="d-inline">
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