@extends('layouts.app')

@section('content')
 <div class="container">
     <h3>DAFTAR MAHASISWA <a href="{{ url('mahasiswa/create') }}">Tambah Data</a></h3>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                 <th>ID</th>
                 <th>NIM</th>
                 <th>NAMA</th>
                 <th>JURUSAN</th>
                 <th>ALAMAT</th>
                 <th>AKSI</th>
             </tr>
             @foreach($rows as $row)
             <tr>
                <td>{{ $row->mhsw_id }}</td>
                <td>{{ $row->mhsw_nim }}</td>
                <td>{{ $row->mhsw_nama }}</td>
                <td>{{ $row->mhsw_jurusan }}</td>
                <td>{{ $row->mhsw_alamat }}</td>
                <td><a href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></td>
               <td><form method="POST" action="{{ url('mahasiswa/' . $row->mhsw_id) }}">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
                <button>HAPUS</button></form></td>
             </tr>
             @endforeach
             </thead>
        </table>
</div>
@endsection