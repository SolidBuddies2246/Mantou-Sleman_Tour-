<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\HomePage;
use App\Status;

class CRUDAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepages = HomePage::all();
        return view('panitia/homePanitia.index',compact('homepages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homepages = HomePage::all();
        $statuses = Status::all();
        return view('panitia/homePanitia.create',compact('homepages','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_status = Status::all()->where('id_status',$request->id_status)->first();  

        if($request->hasFile('gambar')){
            $image = $request->file('gambar'); 
            $new_image = $image->getClientOriginalName();
            $image->move(public_path("img/{$nama_status->nama_status}"), $new_image);
            
            HomePage::create(["judul"=>$request->judul,"gambar"=>$new_image,"waktu_upload"=>$request->waktu_upload,"uploader"=>$request->uploader,"id_status"=>$request->id_status,"isi_berita"=>$request->isi_berita,"alamat_maps"=>$request->alamat_maps]);
        }

        
        return redirect('/crud');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
