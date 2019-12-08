<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="/css/app.css"> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.css"></script>
	<title>Mantou - Sleman Tour</title> 
</head> 
<body> 
		<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color navd fixed-top">
  @include('includes.nav')  
</nav>
		<br>
    <br>
    <br>
    <br>
    <br>
	<div class="container">
<div class="row">
	<div class="col-12"> 
                  <h1 align="center">{{$homepages->judul}}</h1>
        <p align="center">
            <small>
              <div class="rating">
                  <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="" data-size="xs">
                  <input type="hidden" name="id" required="" value="">
                  <span class="review-no">422 reviews</span>
                  <br/>
                  <button class="btn btn-success">Submit Review</button>
              </div>
            By <b>{{$homepages->uploader}}</b> - {{$homepages->waktu_upload}} 
            </small>
        </p>
		<table class="table" border="0">

			  <tbody class="ukh">
			    <tr >
			      	<td width="70%">  

							<img src="/img/{{$status->nama_status}}/{{$homepages->gambar}}" class="d-block w-100" height=400px alt="..."> 
              <br>
								<p align="justify">{{$homepages->isi_berita}}</p>
                <br>
                <div align="center">
                  {!!$homepages->alamat_maps!!}
                </div>
			      	</td>
                    <td>
                    <table align="center"> 
                    @foreach($homeall as $h)
                        <tr>
                            <td style="line-height:top"><img src="/img/header/{{$h->gambar}}" width="100px" style="float: left;" height=80px> </td>
                            <td> 
                            <h6>{{$h->judul}} </h6> 
                            <small>14 September 2019</small> 
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    <td>
			    </tr>
          <tr>
            <td style="padding-left:5%;"> 
                  <form action="">
                    <input type="text" name="username" class="form-control col-md-5" placeholder="Nama">
                    <br>
                    <textarea type="text" name="isi_komentar" class="form-control col-md-7" rows="7%" placeholder="Komentar">
                    </textarea>
                    <input type="hidden" name="id_home" value="">
                    <button class="btn btn-success">Submit</button>
                  </form>
            </td>
          </tr>
			  </tbody>

		</table>	
	</div>

</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 navd">
  @include('includes.footer')
</footer>

	<script src="/js/jquery.js"></script> 
	<script src="/js/popper.js"></script> 
	<script src="/js/bootstrap.js"></script>
</body> 
</html>