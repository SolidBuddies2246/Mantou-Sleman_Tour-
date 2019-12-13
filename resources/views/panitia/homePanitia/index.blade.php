@extends('layouts.app')

@section('content')



<div class="container">
	<div class="row justify-content-center">
			<table class="col-md-9">
            	<tbody>
            		<a href="/crud/create" class="btn btn-primary">Tambah info wisata</a>
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
                            <td>{{$d->nama}}</td>
                            <td width="200px">
                                <form method="post" action="/crud/{{$d->id_home}}">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-info btn-sm" href="/crud/{{$d->id_home}}/edit">Edit</a> 
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    {{$homepages->links()}}
            </div>
        </div>
    </div>
</div>
@endsection