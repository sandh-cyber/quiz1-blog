@extends('layouts.app')

@section('content')



<style>
            html, body {
                background-color: #599101;
                color: #636b6f;

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    LOGIN SUKSES!
            </div>
        </div>
    </div>
</div>
@endsection
