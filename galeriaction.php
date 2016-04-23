<?php	
function Galeri($fupload_name){
		$vdir_upload = "../galeri/";
		$vfile_upload = $vdir_upload . $fupload_name;
		move_uploaded_file($_FILES["galeri"]["tmp_name"], $vfile_upload);
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);
		$dst_width = imageSX($im_src);
		$dst_height = ($dst_width/$src_width)*$src_height;
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);
		imagejpeg($im,$vdir_upload . $fupload_name);
		imagedestroy($im_src);
		imagedestroy($im);
	}
	if (isset($_POST['add'])){
		$img		= $_FILES['galeri']['tmp_name'];
		$imgType	= $_FILES['galeri']['type'];
		$imgName	= $_FILES['galeri']['name'];
		$random		= rand(1,99);
		$newName	= $random . $imgName;
		Galeri($newName);
		mysql_query("insert into galeri values ('','$_POST[judul]','$_POST[deskripsi]','$newName')");
		header("location: ?mod=galeri");
	}
	
	if (isset($_POST['edit'])){
		$img		= $_FILES['galeri']['tmp_name'];
		if (!empty($img)){
			$imgType	= $_FILES['galeri']['type'];
			$imgName	= $_FILES['galeri']['name'];
			$random		= rand(1,99);
			$newName	= $random . $imgName;
			Galeri($newName);
			$query = mysql_query("select * from galeri where id = '$_POST[id]'");
			$data = mysql_fetch_array($query);
			unlink("../galeri/$data[gambar]");
			mysql_query("update galeri set judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]', gambar = '$newName' where id = '$_POST[id]'");
			//header("location: ?mod=galeri");
			echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=galeri';</script>";
		} else {
			mysql_query("update galeri set judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]' where id = '$_POST[id]'");
			echo "<script>alert('Data berhasil tersimpan'); location.href='?mod=galeri';</script>";
		}
	}
?>