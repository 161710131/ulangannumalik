<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
     protected $table = 'matapelajaran';

    protected $fillable = array('Nama_mapel');

	/*
	 * Relasi Many-to-Many
	 * ===================
	 * Buat function bernama mahasiswa(), dimana model 'Hobi' memiliki relasi
	 * Many-to-Many (belongsToMany) terhadap model 'Mahasiswa' yang terhubung oleh
	 * tabel 'mahasiswa_hobi' masing-masing sebagai 'id_hobi' dan 'id_mahasiswa' 
	 */
	public function siswa() {
		return $this->belongsToMany('App\SiswaModel', 'mapelsiswa', 'id_MataPelajaran', 'id_siswa');

}
	}
