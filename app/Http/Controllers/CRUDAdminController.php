<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\HomePage;
use App\Status;
use App\User;
use Auth;
use DB;

class CRUDAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $homepages = HomePage::select('home_pages.gambar as gambarHP','home_pages.*','statuses.*','users.*')->join('users','id_user','=','id_uploader')->join('statuses','statuses.id_status','=','home_pages.id_status')->paginate(10); 
         // dd($homepages);
        return view('panitia/homePanitia.index',compact('homepages'));
    }

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
        $request -> validate([
            'judul' => 'required',
            'gambar' => 'required',
            'waktu_upload' => 'required',
            'id_uploader' => 'required',
            'id_status' => 'required',
            'isi_berita' => 'required',
            'alamat_maps' => 'required'
        ]);
        $nama_status = Status::all()->where('id_status',$request->id_status)->first();  
        if($request->hasFile('gambar')){
            $image = $request->file('gambar'); 
            $new_image = $image->getClientOriginalName();
            $image->move(public_path("img/profile/{$nama_status->nama_status}"), $new_image);
            
            HomePage::create(["judul"=>$request->judul,
                "gambar"=>$new_image,
                "waktu_upload"=>$request->waktu_upload,
                "id_uploader"=>$request->id_uploader,
                "id_status"=>$request->id_status,
                "isi_berita"=>$request->isi_berita,
                "alamat_maps"=>$request->alamat_maps
            ]);
            return redirect('/crud');
        }

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
    public function edit($id_home)
    {
        $homepages =HomePage::findOrFail($id_home);
        $statuses = Status::all();
        $stat = Status::all()->where('id_status',$homepages->id_status)->first();  
        return view('panitia/homePanitia.edit',compact('homepages','statuses','stat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_home)
    {

        $request -> validate([
            'judul' => 'required',
            'gambar' => 'required',
            'waktu_upload' => 'required',
            'id_uploader' => 'required',
            'id_status' => 'required',
            'isi_berita' => 'required'
        ]);
        

        $datas = HomePage::findOrFail($id_home);
        $datas->judul = $request->judul;
        $datas->id_status = $request->id_status;
        $datas->gambar = $request->gambar;
        $datas->isi_berita = $request->isi_berita;
        $datas->alamat_maps = $request->alamat_maps;
        $datas->id_uploader = $request->id_uploader;
        $datas->waktu_upload = $request->waktu_upload;
        $datas->save();
        return redirect('/crud')->with('success', 'Data telah berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_home)
    {
        $datas = HomePage::findOrFail($id_home);
        $datas->delete();
        return redirect('/crud')->with('success', 'data telah dihapus');
    }

    public function verif($id_user){
        $users = User::findOrFail($id_user);
        return view('admin.verif',compact('users'));
    }
    public function verifTerima(Request $request, $id_user)
    {
        $user = User::findOrFail($id_user);
        $user->verification = 1; 
        $user->save();
        return redirect('/home')->with('success', 'Panitia telah berhasil diedit');
    }
    public function verifTolak($id_user)
    {
        $user = User::findOrFail($id_user);
        $user -> delete();
        return redirect('/home')-> with('success', 'Panitia telah dihapus');
    } 
}
