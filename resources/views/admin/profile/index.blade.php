<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}


/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

a{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 350px;
}

</style>
</head>
<body>
<div class="container">
  <div style="text-align:center">
    <h2>My Profile</h2>
    <p>Quote</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="/action_page.php">
      	<a href="/account/{{Auth::user()->id_user}}/edit" class="btn btn-info btn-lg" width='350px'>
          <span class="glyphicon glyphicon-edit"></span> Change your Profile
        </a>
    <br>
    <br>
    <br>
    <br> 
      	<div class="form-row">
      		<div class="col-sm-4"><label for="fname">Nama</label></div>
      		<div class="col-sm-4"> {{Auth::user()->nama}}</div>
      	</div>
      	<br>
        <div class="form-row">
      		<div class="col-sm-4"><label for="email">Email</label></div>
      		<div class="col-sm-4"> {{Auth::user()->email}}</div>
      	</div>
      	<br>
      	<div class="form-row">
      		<div class="col-sm-4"><label for="tgl">Tanggal Lahir</label></div>
      		<div class="col-sm-4">{{date('d F Y',strtotime(Auth::user()->tanggal_lahir))}}</div>
      	</div>
      	<br>
      	<div class="form-row">
      		<div class="col-sm-4"><label for="fname">Jenis Kelamin</label></div>
      		<div class="col-sm-4"> @if(Auth::user()->jenis_kelamin=='L')
                                    Laki-Laki
                                  @else(Auth::user()->jenis_kelamin=='P')
                                    Perempuan
                                  @endif
          </div>
      	</div>
      	<br>
      	<div class="form-row">
      		<div class="col-sm-4"><label for="noHP">Nomor Telepon</label></div>
      		<div class="col-sm-4"> {{Auth::user()->nomor_telepon}}</div>
      	</div>
      	<br>
      </form>
    </div>
  </div>
</div>

</body>
</html>
