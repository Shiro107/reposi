<?php 

class Manusia extends CI_Controller 
{
	private function cetak($param)
	{
		echo $param;
	}

	public function cek()
	{
		$param = "ora ngerti";

		$this->cetak($param);
	}
}