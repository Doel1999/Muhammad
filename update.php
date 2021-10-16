<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"UPDATE opd set nomor_rangka='$_POST[nomor_rangka]',nomor_mesin='$_POST[nomor_mesin]'
                                                                        ,tanggal_perolehan='$_POST[tanggal_perolehan]'
                                                                        ,opd_pengguna='$_POST[opd_pengguna]'
                                                                        ,jabatan_pengguna='$_POST[jabatan_pengguna]'
                                                                        ,nama_pengguna='$_POST[nama_pengguna]'
where nomor_polisi='$_POST[nomor_polisi]'");
if($query)
{
    header ("location:dashboard.php");
}
else
{
    echo "GAGAL UPDATE DATA!";
}
?>
