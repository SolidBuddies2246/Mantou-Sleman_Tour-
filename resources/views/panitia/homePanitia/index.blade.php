@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row justify-content-center">
			<table class="col-md-9">
            	<tbody>
            		<button type="button" class="btn btn-primary">Tambah info wisata</button>
            	</tbody>
            </table>
        <div class="col-md-12">
        	<br>
            <div class="card">
                    <table class="table table-stripped" width="100%">
                        <thead class="thead-dark">
                            <th>
                                No
                            </th>
                            <th>
                                Judul
                            </th>
                            <th>
                                Gambar
                            </th>
                            <th>
                                Deskripsi
                            </th>
                            <th>
                                Uploader
                            </th>

                            <th>
                            	
                            </th>
                        </thead>

                        <tbody>
                        	@foreach($homepages as $d)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->judul}}</td>
                            <td>{{$d->gambar}}</td>
                            <td>{{substr($d->isi_berita,0,200)}}...</td>
                            <td>{{$d->uploader}}</td>
                            <td width="200px">
                                <a class="btn btn-info btn-sm" href="/informasi/create">Edit</a> <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
            </div>
        </div>
    </div>
</div>
@endsection