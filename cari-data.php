<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventory Control System</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			</div>
		</div><!--/.row-->
				
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">List View Data</div>
					<div class="panel-body">

					<form action="cari-data.php" method="get">
						<p align="right">
						SEARCH :
						<input type="text" name="qcari">
						<input type="submit" name="Submit" value="Submit">
						</p>
					</form>
						<table data-toggle="table">
						    <tr>
						        <th data-align="right">No</th>
						        <th >OPD Pengguna</th>
						        <th >Nomor Polisi</th>
						        <th >Nomor Rangka</th>
								<th >Nomor Mesin</th>
								<th >Tanggal Perolehan</th>
								<th >Jabatan Pengguna</th>
								<th >Nama Pengguna</th>
								<th >Opsi</th>
						    </tr>
							<?php
  								include "koneksi.php";
								$keyword=$_GET['qcari'];
  								$tampil=mysqli_query($koneksi,"SELECT * FROM opd WHERE opd_pengguna LIKE '%$keyword%' OR nomor_polisi LIKE '%$keyword%'");
  								$no=1;
  								while ($kolom=mysqli_fetch_array($tampil))
  								{
  							?>
  							<tr>
  								<td><?php echo $no++; ?></td>
   								<td><?php echo "$kolom[4]"; ?></td>
    							<td><?php echo "$kolom[0]"; ?></td>
    							<td><?php echo "$kolom[1]"; ?></td>
    							<td><?php echo "$kolom[2]"; ?></td>
    							<td><?php echo "$kolom[3]"; ?></td>
    							<td><?php echo "$kolom[5]"; ?></td>
    							<td><?php echo "$kolom[6]"; ?></td>
    							<td><?php echo "<a href='formupdate.php?id=$kolom[0]'>UPDATE</a> | <a href='delete.php?id=$kolom[0]'>DELETE</a>";?></td>
  							</tr>
  							<?php
 								}
 							?>
						</table>
<br>
	

					</div>
				</div>
			</div>
			
		
	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
