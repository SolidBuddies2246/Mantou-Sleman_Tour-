<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{ 	
    protected $primaryKey = 'id_home';
    protected $fillable = ['judul','gambar','waktu_upload','uploader','id_status','isi_berita','alamat_maps','banyak_komentar'];
}
