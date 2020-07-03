@extends('layouts.app')

@section('content')

<style>
            html, body {
              background-color: #599101;
                color: #FFF;

</style>
<div class="container">
	<h3>EDIT DATA CATEGORY</h3>
	<form method="POST" action="{{ url('/category/' . $categories->id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>NAMA BARANG</td>
				<td><input type="text" name="name" value="{{ $categories->name}}"></td>
			</tr>
			<tr>
				<td>TEXT</td>
				<td><input type="text" name="text" value="{{ $categories->text }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection