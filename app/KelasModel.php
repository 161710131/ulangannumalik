<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
   	protected $table = 'kelas';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamana	n)
	protected $fillable = array('Nama_kelas');

	/*
	 * Relasi One-to-Many
	 * ==================
	 * Buat function bernama mahasiswa(), dimana model 'Dosen' akan memiliki 
	 * relasi One-to-Many terhadap model 'Mahasiswa' sebagai 'id_dosen'
	 */
	public function siswa() 
	{
		return $this->hasMany('App\SiswaModel', 'id_kelas');
	}
}
