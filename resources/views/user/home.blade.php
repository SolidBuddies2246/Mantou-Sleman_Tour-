@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->verification==0)
                        <b>Silahkan Menunggu Untuk Hasil Verifikasi dari admin</b>
                        <a class="nav-link" href="/homepage">Ke Halaman awal</a>
                    @else
                        <b>Anda sudah resmi menjadi Panitia</b>
                        <br>
                        <a class="nav-link" href="/homepage">Ke Halaman awal</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
