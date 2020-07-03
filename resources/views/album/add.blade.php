@extends('layouts.app')

@section('content')
<style>
            html, body {
              background-color: #599101;
                color: #FFF;

</style>
<div class="container">
	<h3>TAMBAH DATA ALBUM</h3>
	<form method="POST" action="{{ url('/album') }}">
		@csrf
		<table>
			<tr>
				<td>NAMA BARANG</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>TEXT</td>
				<td><input type="text" name="text"></td>
			</tr>
            <tr>
				<td>ID PHOTO</td>
				<td>
					<select name="photos_id">
						<option>--Pilih--</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection