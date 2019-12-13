@include('layouts.app')

<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">edit data</div>
				<form method="post" action="{{ route('crud.update',$homepages->id_home)}}">
          @csrf
          @method('put')
  					</div>
  					<div class="form-group">
						  <input type="text" class="form-control" placeholder="Nama Lokasi/Judul berita" name ="judul" value="{{$homepages->judul}}">
  					</div>
  					<div class="form-group"> 
						  <select name="id_status" class="custom-select">
							 @foreach($statuses as $s)
                  <option value="{{$s->id_status}}">{{$s -> nama_status}}</option>
							 @endforeach
						  </select>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar" value="{{$homepages->gambar}}">
                <label class="custom-file-label" for="validatedCustomFile">Choose Image</label>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" name="isi_berita">
                {{$homepages->isi_berita}}
              </textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleFormControlJudul" placeholder="Embed Map HTML" name="alamat_maps" value="{{$homepages->alamat_maps}}">
            </div>
            <div class="form-group">
              <input type="date" class="form-control" id="exampleFormControlJudul" placeholder="waktu_upload" name="waktu_upload" value="{{$homepages->waktu_upload}}" readonly="">
            </div>
            <br>
            <div class="form-group">
               <button class="btn btn-primary" type="submit">Submit</button>
               <button class="btn btn-danger" type="reset">Cancel</button>
            </div>
					</div>
  					 <br>
				</form>
			</div>
		</div>
	</div>
</div>