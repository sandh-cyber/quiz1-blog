@extends('layouts.app')

@section('content')

<style>
            html, body {
              background-color: #599101;
                color: #FFF;

</style>
<div class="container">
	<h3>TAMBAH DATA CATEGORY</h3>
	<form method="POST" action="{{ url('/category') }}">
		@csrf
		<table>
			<tr>
				<td>NAMA BARANG</td>
				<td><input type="text" name="name" value="{{ old('name') }}"></td>
			</tr>
			<tr>
				<td>TEXT</td>
				<td ><input type="text" name="text" value="{{ old('text') }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection