@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Informasi Pendaftar</div>

                <div class="card-body">
                    <table class="table-group" width="100%">
                     <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                	{{$users->nama}}
                                </td>
                            </tr>
                            <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{$users->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                	{{$users->email}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    No HP
                                </td>
                                <td>
                                	{{$users->nomor_telepon}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jenis Kelamin
                                </td>
                                <td>
                                	{{$users->jenis_kelamin}}
                                </td>
                            </tr>
                            <tr>
   
                                <td colspan="2">
                                    <button type="button" class="btn btn-success btn-sm" >Terima</button>
                                    <button type="button" class="btn btn-danger btn-sm">Tolak</button></td>
                                <td>
                                	
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection