<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
     protected $table = 'siswa';
   

	protected $fillable = array('Nama', 'Nis', 'id_guru','id_kelas');

    
    public function guru() {
		return $this->hasOne('App\GuruModel', 'id_guru');
	}

	public function kelas() {
		return $this->hasOne('App\KelasModel', 'id_kelas');
	}

	public function wali() {
		return $this->belongsTo('App\WaliModel', 'id_siswa');
	
	}
	public function mapelsiswa() {
		return $this->belongsToMany('App\MapelModel', 'mapelsiswa', 'id_siswa', 'id_MataPelajaran');
	}
}
