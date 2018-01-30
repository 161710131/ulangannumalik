<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliModel extends Model
{
     protected $table = 'wali';

    protected $fillable = array('Nama','Alamat','id_siswa');

    public function siswa() {
		return $this->belongsTo('App\SiswaModel', 'id_siswa');
	}
}
