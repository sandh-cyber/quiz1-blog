@extends('layouts.app')

@section('content')

<style>
            html, body {
              background-color: #599101;
                color: #FFF;

</style>

<div class="container">
	<h3>EDIT DATA POST</h3>
	<form method="POST" action="{{ url('/post/' . $posts->id) }}">
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table>
			<tr>
				<td>TANGGAL PESANAN</td>
				<td><input type="date" name="date" value="{{ $posts->date}}"></td>
			</tr>
			<tr>
				<td>SLUG</td>
				<td><input type="text" name="slug" value="{{ $posts->slug }}"></td>
			</tr>
			</tr>
			<tr>
				<td>TITLE</td>
				<td><input type="text" name="title" value="{{ $posts->title }}"></td>
			</tr>
			</tr>
			<tr>
				<td>TEXT</td>
				<td><input type="text" name="text" value="{{ $posts->text }}"></td>
			</tr>
			</tr>
			<tr>
				<td>ID KATEGORI</td>
				<td><input type="text" name="cat_id" value="{{ $posts->cat_id }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="UPDATE"></td>
			</tr>
		</table>
	</form>
</div>
@endsection