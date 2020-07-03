@extends('layouts.app')

@section('content')
<style>
            html, body {
             background-color: #599101;
                color: #FFF;


</style>
<div class="container">
	<h3>EDIT DATA PHOTOS</h3>
	<form method="POST" action="{{ url('/photos/' . $photos->id) }}">
		@csrf
		<table>
			<tr>
				<td>TANGGAL</td>
				<td><input type="date" name="date" value="{{ $photos->date }}"></td>
			</tr>
			<tr>
				<td>TITLE</td>
				<td><input type="text" name="title" value="{{ $photos->title }}"></td>
			</tr>
			<tr>
				<td>TEXT</td>
				<td><input type="text" name="text" value="{{ $photos->title }}"></td>
			</tr>
			<tr>
				<td>ID POST</td>
				<td><input type="text" name="post_id" value="{{ $photos->post_id }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection