<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="/css/app.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.css">
  </script>


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
    @section($homepages->id_home)
<div class="row">
	<div class="col-12"> 
        <h1 align="center">{{$homepages->judul}}</h1>
        <center>
              <small> 
                  By <b>{{$uploader->nama}}</b> - {{date('d F Y',strtotime($homepages->waktu_upload))}}
                  <i class="fa fa-eye" style="padding-left:5px;"> {{$homepages->views}}</i>
              </small>
              <bdo dir="rtl">
              <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
            </bdo>
        </center>
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