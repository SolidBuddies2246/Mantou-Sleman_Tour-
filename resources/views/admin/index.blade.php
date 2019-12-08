@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table-group" width="100%">
                        <thead>
                            <th>
                                No
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Gmail
                            </th>
                        </thead>

                        <tbody>
                            @foreach($users as $hasil)
                            @if($hasil->admin==0 && $hasil->verification==0)
                            <tr>
                            <th>{{$loop->iteration-1}}</th>
                            <td>{{$hasil->nama}}</td>
                            <td>{{$hasil->email}}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

<br>
<br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Konfirmasi Pendaftar</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table-group" width="100%">
                        <thead>
                            <th>
                                No
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Gmail
                            </th>
                            <th>
                                Data
                            </th>
                        </thead>

                        <tbody>
                            @foreach($users as $u)
                            @if($u->verification==0)
                            <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$u->nama}}</td>
                            <td>{{$u->email}}</td>
                            <td><a href="/verif/{{$u->id_user}}" class="btn btn-info btn-sm">Lihat Data</button></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
