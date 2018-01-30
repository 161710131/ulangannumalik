<?php

use Illuminate\Database\Seeder;

class UlanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->delete();
		DB::table('kelas')->delete();
		DB::table('wali')->delete();
		DB::table('siswa')->delete();
		DB::table('matapelajaran')->delete();
		DB::table('mapelsiswa')->delete();

		# Isi tabel hobi
		
		

		$guru = App\GuruModel::create(array(
			'Nama' => 'Yulianto',
			'Nik' => '1234567890',
			'Alamat' => 'KP Ciodeng',
			'Mata_pelajaran' => 'IPS'));
		$this->command->info('Data Guru telah diisi!');

		$kelas = App\KelasModel::create(array(
			'Nama_kelas' => 'XI RPL 2'));
		$this->command->info('Data Kelas telah diisi!');


		$novay = App\SiswaModel::create(array(
			'nama' => 'Dilan',
			'Nis'  => '1015015072',
			'id_guru' => $guru->id,
			'id_kelas' => $kelas->id));

		$dije = App\SiswaModel::create(array(
		'nama' => 'Rachmadi',
		'Nis'  => '1015015072',
		'id_guru' => $guru->id,
		'id_kelas' => $kelas->id));

		$this->command->info('siswa telah diisi!');

		App\WaliModel::create(array(
		'Nama'  => 'Rudi',
		'Alamat' => 'Kp Bojong Koneng',
		'id_siswa' => $novay->id
		));
		
		$this->command->info('wali telah diisi!');

		$m = App\MapelModel::create(array('Nama_Mapel' => 'IPS','KKM' => '76'));
		
		# Hubungkan Mahasiswa dengan Hobinya masing-masing
		$novay->mapelsiswa()->attach($m->id);
		# Tampilkan pesan ini bila berhasil diisi


		$this->command->info('Mata Pelajaran telah diisi!');

    }
}
