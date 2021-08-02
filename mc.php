
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<?php 

	include_once('setting/koneksi.php');
	include_once('setting/system.php');
	$a=new koneksi();
	$db=$a->hubungkan();
	$sistem=new kontrols($db);

	$tbl="akun";

	$data="*";

	$clm="afiliasi";

	$key='39587434922';


	$mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);

	$n=0;
?>
<table id="example1" class="table table-bordered table-hover table-striped">

	<thead>
		
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>No Wa</th>
		<th>Rp</th>
	</tr>
	</thead>
	<tbody>
		
<?php
	foreach ($mx as $key => $line):
?>
<tr>
	<td><?= $n++ ?></td>
	<td><?= $line['nama_lengkap'] ?></td>
	<td><?= $line['username'] ?></td>
	<td><?= $line['nowa'] ?></td>
	<td><?= $sistem->getHarga() ?>.<font color="red"><?= $line['kode_unik'] ?></font></td>
</tr>
<?php

	endforeach;
?>
	</tbody>
</table>
<script>
	  $(function () {
 
    $('#example1').DataTable({
      "pageLength": 25
    });
});
</script>