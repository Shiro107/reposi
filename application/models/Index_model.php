<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
           array('NIM'=>171240000987, 'Nama_Depan'=>'Abdillah', 'Nama_Belakang'=>'Faqih', 'Jenis_Kelamin'=>'Laki-Laki'),
		   array('NIM'=>171240000988, 'Nama_Depan'=>'Ahmad', 'Nama_Belakang'=>'Syarif', 'Jenis_Kelamin'=>'Laki-Laki'),
		   array('NIM'=>171240000989, 'Nama_Depan'=>'Ummi', 'Nama_Belakang'=>'Qulsum', 'Jenis_Kelamin'=>'Perempuan'),
		   array('NIM'=>171240000987, 'Nama_Depan'=>'Abduh', 'Nama_Belakang'=>'Somat', 'Jenis_Kelamin'=>'Laki-Laki'),
		   array('NIM'=>171240000987, 'Nama_Depan'=>'Soleh', 'Nama_Belakang'=>'Mukarom', 'Jenis_Kelamin'=>'Laki-Laki'),
		   array('NIM'=>171240000989, 'Nama_Depan'=>'Siti', 'Nama_Belakang'=>'Qomariah', 'Jenis_Kelamin'=>'Perempuan'),
		);

		return $cars;
	}
}