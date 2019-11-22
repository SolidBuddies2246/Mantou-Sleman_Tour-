<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<style type="text/css">
		.img img{
		  -webkit-filter:brightness(50%);
		}
		a:link{
			text-decoration: none;
		}
	</style>
	<title>Mantou</title> 
</head> 
<body> 
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="#">Mantou</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Event</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Destinasi
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Wisata Alam</a>
			          <a class="dropdown-item" href="#">Wisata Pantai</a>
			          <a class="dropdown-item" href="#">Wisata Museum</a>
			          <a class="dropdown-item" href="#">Wisata Budaya</a>
			          <a class="dropdown-item" href="#">Desa Wisata</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Kuliner</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Hotel</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
	  		</div>
		</nav>
		<br>
	<div class="container">
		<div class="bd-example img">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/img/header/header1.jpg" class="d-block w-100" height=500px alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h2><b>JIHW di Candi Prambanan diikuti Peserta dari 25 Negara</b></h2>
							<p>PIP Dispar 16 November 2019</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/img/header/header2.jpg" class="d-block w-100" height=500px alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h2>Gambar Slide Yang Kedua</h2>
							<p>Gambar pemandangan sawah di desa.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="/img/header/header3.jpg" class="d-block w-100" height=500px alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h2>Gambar Slide Yang Ketiga</h2>
							<p>Gambar pemandangan taman belakang rumah.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div style="margin: 50px 0 50px 0; width: 100%">
			<img src="/img/header/banner1.jpg">
		</div>
<div class="row">
	<div class="col-8">
		<table class="table">
			  <thead>
			    <tr>
			      <th colspan="3">Berita Terbaru</th>
			    </tr>
			  </thead>
			  <tbody class="ukh"> 
			    <tr>
			    	
			      	<td rowspan="5" width="50%">
			      		<a title="{{$one->judul}}" href=""><img src="/img/header/{{$one->gambar}}" style="width: 100%;">
			      			<h4>{{$one->judul}}</h4>
			      		</a>
			      		<br>
			      			<b>{{$one->uploader}}</b> - <small class="text-muted">{{$one->waktu_upload}}</small>
			      	</td>
			      	
			    </tr> 
			  @foreach($homepages as $hp)
			  <tr>
			      	<td width="20%"><img src="/img/header/{{$hp->gambar}}" style="float: left;" height="100%" width="100%">
			      	</td>
			      	<td>
			      		{{$hp->judul}}
					<br>
					<small class="text-muted">{{$hp->waktu_upload}}</small></td>
			    </tr>
			  @endforeach
			  </tbody>
		</table>	
	</div>
	<div class="col-4">
		<table class="table">
		  <thead>
		    <tr>
		      <th colspan="2">Destinasi</th>
		    </tr>
		  </thead>
		  <tbody class="ukh"> 
		    <tr>
		      	<td width="35%">
		      		<img src="/img/header/header5.jpg" style="float: left;" height="100%" width="100%">
				</td>
				<td>
					Mencicipi Nasi Biru Sambil Menikmati Sejuknya Kebun Bunga
				<br>
				<small>14 September 2019</small></td>
		    </tr>
		    <tr>
		      	<td>
		      		<img src="/img/header/header6.jpg" style="float: left;" height="100%" width="100%">
		      	</td>
		      	<td>
		      		Wisata Alam Yang Instagramable di Malam Hari
		      		<br>
					<small>12 September 2019</small></td>
		    </tr>
		    <tr>
		      	<td>
		      		<img src="/img/header/header7.jpg" style="float: left;" height="100%" width="100%">
		      	</td>
		      	<td>
		      		Embung Langensari: Kesejukan di Tengah Hiruk Pikuk Kota
		      		<br>
				<small>9 September 2019</small></td>
		    </tr>
		    <tr>
		      	<td>
		      		<img src="/img/header/header8.jpg" style="float: left;" height="100%" width="100%">
		      	</td>
		      	<td>
		      		Warna-Warni Bunga di Taman Bunga Kekinian Yogyakarta
		      		<br>
					<small>5 September 2019</small></td>
		    </tr>
		  </tbody>

</table>	
	</div>
</div>


	<img src="img/banner/banner-penerbangan.png" width="100%">
</div>
	<script src="js/jquery.js"></script> 
	<script src="js/popper.js"></script> 
	<script src="js/bootstrap.js"></script>
</body> 
</html>