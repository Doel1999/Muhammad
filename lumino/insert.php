<?php
include"koneksi.php";
$simpan=mysql_query("insert into opd 
         values ('$_POST[nomor_polisi]',
				  '$_POST[nomor_rangka]',
				  '$_POST[nomor_mesin]',
				  '$_POST[tanggal_perolehan]',
				  '$_POST[opd_pengguna]',
				  '$_POST[jabatan_pengguna]',
				  '$_POST[nama_pengguna]')");
				    
if($simpan)
{
header ("location:dashboard.php");
}
else
{
echo "data gagal di simpan";
}