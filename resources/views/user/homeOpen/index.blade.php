<!doctype html> 
<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
  <link rel="stylesheet" href="{{asset('/css/jquery.rateyo.css')}}"/>
  <script src="{{asset('/js/jquery.js')}}"></script>
  <script src="{{asset('/js/jquery.rateyo.js')}}"></script>
	<title>Mantou - Sleman Tour</title> 
</head> 
<body> 
		<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color navd fixed-top">
  @include('includes.nav')
</nav> 
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Rating</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/rate/{{$homepages->id_home}}&&{{Auth::user()->id_user}}" method="POST">
                @csrf
                  <bdo dir="rtl">
                    <div class="rate">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>
                </bdo> 
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

	<div class="container" style="background-color: white;opacity: 0.95;"> 
    <div class="row">
    	<div class="col-12"> 
            <h1 align="center">{{$homepages->judul}}</h1>
            <center>
                  <small> 
                      By <b>{{$uploader->nama}}</b> - {{date('d F Y',strtotime($homepages->waktu_upload))}}
                      <i class="fa fa-eye" style="padding-left:5px;"> {{$homepages->views}} </i>
                  </small> 
                        <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                           Rate this
                        </button> 
                    <div id="rateYo" style="pointer-events: none;"></div>  
                      <h2>{{$homepages->rating}}</h2> 
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
<script type="text/javascript">
  $(function () {
  
  $("#rateYo").rateYo({
    "rating": "{{$homepages->rating}}",
    "starWidth": "30px",
  });

  $("#rateUpload").rateYo({ 
    "starWidth": "30px",
  });

});
</script> 
 
</body> 
</html>