<?php
include "koneksi.php";
$delete = mysql_query ("DELETE FROM opd WHERE nomor_polisi='$_GET[id]'");
if($delete)
{
header ("location:dashboard.php");
}
else
{
echo "GAGAL MENGHAPUS DATA!";
}
?>