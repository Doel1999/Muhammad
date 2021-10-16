<?php
include "koneksi.php";
$delete = mysqli_query ($koneksi,"DELETE FROM opd WHERE nomor_polisi='$_GET[id]'");
if($delete)
{
header ("location:dashboard.php");
}
else
{
echo "GAGAL MENGHAPUS DATA!";
}
?>