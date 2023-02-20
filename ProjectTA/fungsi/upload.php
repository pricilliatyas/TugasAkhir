<?php 
	function data($file)
	{
		$data = $_FILES[$file]['tmp_name'];
		if (isset ($data))
		{
		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES[$file]['name'];
		$ukuran = $_FILES[$file]['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
	
		if(!in_array($ext,$ekstensi) ) 
			{
			header("location:../index.php?alert=gagal_ekstensi");
			}
			else
			{
			if($ukuran < 1044070)
				{		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($data, '../gambar/'.$rand.'_'.$filename);
			return "$xx";
				}
			}
		}
	}
		
?>