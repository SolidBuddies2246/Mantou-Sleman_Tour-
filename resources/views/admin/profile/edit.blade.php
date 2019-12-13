<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
  <title></title>
</head>
<body>
<div class="container">
  <div class="card">
  <div class="card-header" align="center">
    Edit Your Profile
  </div>
  <form action="/account/{{Auth::user()->id_user}}" method="post">
  @csrf
  @method('PUT')
   <div class="card-body">
    <div class="form-group">
      <label >Nama</label>
      <input type="text" class="form-control" name="nama" value="{{Auth::user()->nama}}">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
    </div>
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" placeholder="" name="" value="{{Auth::user()->tanggal_lahir}}">
      </div>
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <div class="radio">
      
      <label><input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki</label>
      <label><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
    </div>
    </div>

    <div class="form-group">
      <label>Nomor Telepon</label>
      <input type="text" class="form-control" name="nomor_telepon" value="{{Auth::user()->nomor_telepon}}">
    </div>
    <br>
    <div align="center">
      <button type="submit" class="btn btn-primary">
      Save
      </button>
      <br>
    </div>
  </div>   
  </form>

</div>
</div>
</body>
</html>