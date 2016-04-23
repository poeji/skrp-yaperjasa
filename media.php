<?php
session_start();
error_reporting(0);
if(isset($_SESSION["userid"]) && $_SESSION["userid"] != "") {
include "config/koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Akademik</title>
<link rel="shortcut icon" href="images/logo.jpg" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<style type="text/css">
<!--
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:visited {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
.menunya a:link {
	color: #0000FF;
	text-decoration: none;
}
.menunya a:visited {
	color: #0000FF;
	text-decoration: none;
}
.menunya a:hover {
	text-decoration: underline;
	color: #FF0000;
}
.menunya a:active {
	text-decoration: none;
}
-->

/*----- Menu Outline -----*/
.menu-wrap {
	/*width:100%;
	box-shadow:0px 1px 3px rgba(0,0,0,0.2);
	background:#3e3436;*/
}

.menu {
	/*width:1000px;
	margin:0px auto;*/
}

.menu li {
	/*margin:0px;
	list-style:none;
	font-family:'Ek Mukta';*/
}

.menu a {
	/*transition:all linear 0.15s;
	color:#919191;*/
}

.menu li:hover > a, .menu .current-item > a {
	text-decoration:none;
	/*color:#be5b70;*/
}

.menu .arrow {
	font-size:11px;
	line-height:0%;
}

/*----- Top Level -----*/
.menu > ul > li {
	float:left;
	display:inline-block;
	position:relative;
	font-size:16px;
}

.menu > ul > li > a {
	padding:10px 40px;
	display:inline-block;
	/*text-shadow:0px 1px 0px rgba(0,0,0,0.4);*/
}

.menu > ul > li:hover > a, .menu > ul > .current-item > a {
	background:#2e2728;
}

/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
	z-index:1;
	opacity:1;
}

.sub-menu {
	width:160%;
	padding:5px 0px;
	position:absolute;
	top:100%;
	left:0px;
	z-index:-1;
	opacity:0;
	transition:opacity linear 0.15s;
	box-shadow:0px 2px 3px rgba(0,0,0,0.2);
	background:#2e2728;
}

.sub-menu li {
	display:block;
	font-size:16px;
}

.sub-menu li a {
	padding:10px 30px;
	display:block;
}

.sub-menu li a:hover, .sub-menu .current-item a {
	/*background:#3e3436;*/
}
</style>
<script>
function raport(nis) {
    window.open("nilaisiswa.php?id="+nis, "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=800, height=600");
}
</script>
<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.id.min.js"></script>
    <!-- page script -->
    <script>
      $(function () {
          //Date range picker
        $( ".tgl" ).datepicker({ dateFormat: 'yyyy-mm-dd' });
      });
    </script>
    <link rel="stylesheet" href="css/datepicker3.css">
<link href="css/tabel.css"  rel="stylesheet" />
</head>

<body>
<table align="center" width="80%" border="0" style="border:0px solid #000000;">
  <tr>
    <td><img src="images/atas.jpg" width="1062" height="100" /></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" align="center">
      <tr class="menunya">
        <td width="8%"><div align="center"><a href="media.php">Beranda</a></div></td>
        <?php if($_SESSION["akses"]=="admin") { ?>
        <td width="8%"><div align="center"><a href="?mod=kelas">Kelas</a></div></td>
        <td width="8%"><div align="center"><a href="?mod=pelajaran">Pelajaran</a></div></td>
        <td width="8%"><div align="center"><a href="?mod=siswa">Siswa</a></div></td>
        <td width="8%"><div align="center"><a href="?mod=guru">Guru</a></div></td>
        <td width="7%"><div align="center"><a href="?mod=kurikulum">Kurikulum</a></div></td>
        <?php } ?>
        <?php if($_SESSION["akses"]=="siswa") { ?>
        <td width="7%"><div align="center"><a href="?mod=home_siswa">Profil Siswa</a></div></td>
        <?php /*<td width="10%"><div align="center"><a href="#" onclick="raport(<?php echo $_SESSION['userid']; ?>)">Nilai Siswa</a></div></td>*/ ?>
        <td width="10%"><div align="center"><a href="?mod=datanilaisiswasemester">Nilai Siswa</a></div></td>
        <td width="7%"><div align="center"><a href="?mod=jadwalsiswa">Jadwal Pelajaran</a></div></td>
        <?php } ?>
        
        
        <?php if($_SESSION["akses"]=="admin") { ?>
        <td width="7%"><div align="center"><a href="?mod=jadwal">Jadwal</a></div></td>
        <td width="7%"><div align="center"><a href="?mod=user">User</a></div></td>
        <?php } else { /* ?>
        <td width="7%"><div align="center"><a href="?mod=edituser">Ganti Password</a></div></td>
        <?php */ } ?>
        <?php if($_SESSION["akses"]=="guru") { ?>
        <?php /*<td width="7%"><div align="center"><a href="?mod=dataguru">Data Guru</a></div></td>*/ ?>
        <td width="15%"><div align="center"><a href="?mod=home_guru">Profil Guru</a></div></td>
        
        <td width="15%"><div align="center"><a href="?mod=lihatnilaisiswakelas">Nilai Siswa</a></div></td>
        <td width="15%"><div align="center"><a href="?mod=jadwalguru">Jadwal Mengajar</a></div></td>
        <td>
        
			<nav class="menu">
				<ul class="clearfix">
					
					<li>
			<a href="#">Nilai <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                <li><a href="?mod=nilaipengetahuandata">Nilai Pengetahuan</a></li>
                <li><a href="?mod=nilaiketerampilan">Nilai Keterampilan</a></li>
                <li><a href="?mod=nilaisikap">Nilai Sikap</a></li>
                </ul>
        </li>
				</ul>
			</nav>
		
        
        
        </td>
		<?php } ?>
        <td width="7%"><div align="center"><a href="?mod=logout">Logout</a></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    Selamat Datang <strong><?php echo $_SESSION['nama']." [". ucfirst($_SESSION["akses"])."]"; ?></strong>,
    </td>
  </tr>
  <tr>
    <td>
    <?php if(isset($_GET['mod'])) {
					include $_GET['mod'].".php";
				} else {
					include "home.php"; 
					}
			?>   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php } else { echo "<script>alert('Anda harus login terlebih dahulu untuk memasuki halaman ini'); location.href='index.php';</script>"; } ?>