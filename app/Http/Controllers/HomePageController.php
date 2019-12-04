<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\Status;
use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepages = HomePage::all();
        
        $event1= Homepage::all()->where('id_status',8)->sortByDesc('id_home')->first();
        $eventall=Homepage::where('id_status',8)->paginate(4);
        
        $kuliner1=Homepage::all()->where('id_status',3)->take(4);
        
        $destinasi1=Homepage::all()->whereIn('id_status',[4,5,6])->sortByDesc('id_home')->first();
        $destinasiall=Homepage::all()->whereIn('id_status',[4,5,6])->take(4);

        $desa1=Homepage::all()->where('id_status',7)->sortByDesc('id_home')->first();
        $desa_all=Homepage::all()->where('id_status',7)->take(4);

        $akomodasi=Homepage::all()->where('id_status',2)->take(4);
        
        $statuses = Status::all();
        return view('user/homepages.index',
            compact('homepages',
                    'event1',
                    'statuses',
                    'eventall',
                    'kuliner1',
                    'destinasi1',
                    'destinasiall',
                    'desa1',
                    'desa_all',
                    'akomodasi',
                ));
        return view('includes.footer',compact('destinasi1'));
    }

    public function homeOpen($id_home,$id_status)
    {
        $homepages = HomePage::findOrFail($id_home);
        $homeall = HomePage::All()->take(4);
        $status = Status::findOrFail($id_status);
        return view('user/homeOpen.index',compact('homepages','homeall','status'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $homepages = HomePage::where('judul','like',"%".$cari."%")->paginate(8);
        $nm = Status::all();
        return view('user/homeOpen.search',compact('homepages','nm'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit($id_home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePage $homePage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePage  $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
