<?php
session_start();
if(!isset($_SESSION['username']))
{
?>
<script language="javascript">
alert("Anda Harus Login Terlebih Dahulu");
document.location="index.html";
</script>
<?php
    exit;	
}
?>