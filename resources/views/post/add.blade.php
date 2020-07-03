@extends('layouts.app')

@section('content')

<style>
            html, body {
            background-color: #599101;
                color: #FFF;

</style>
<div class="container">
	<h3>TAMBAH DATA POST</h3>
	<form method="POST" action="{{ url('/post') }}">
		@csrf
		<table>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="date"></td>
			</tr>
			<tr>
				<td>SLUG</td>
				<td><input type="text" name="slug"></td>
			</tr>
            <tr>
				<td>TITLE</td>
				<td><input type="text" name="title"></td>
			</tr>
            <tr>
				<td>TEXT</td>
				<td><input type="text" name="text"></td>
			</tr>
            <tr>
				<td>ID KATEGORI</td>
				<td>
					<select name="cat_id">
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