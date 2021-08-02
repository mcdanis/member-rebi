<style>
	#grid-form{
		display: grid;grid-template-columns: 50% 50%;
	}
	#grid-form div{
		padding: 6px;
	}
</style>
<div class="box box-primary">
	<div class="box-header with-border">
	  <h3 class="box-title"><i class="fa fa-shopping-cart"></i> Keranjang anda</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="alert alert-success">
			<i class="fa fa-warning"></i> Jika ingin pesan dengan qty lebih dari satu dalam barang yg sama, masukan barang tersebut ke keranjang, dan bedakan di deskripsi setiap produk jika varian, size jika dibutuhkan
		</div>
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
				</tr>
			</thead>
			<tbody>
				<?php 
 
					$provinsi = $sistem->tampil_data('wilayah_provinsi','*');

					$tbl="atc";
					$data="*";
					$clm="username";
					$key=$cookieId;
					$mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);
					$n=0;
					$total=0;
					foreach ($mx as $key => $line):
						$tbl="produk";
						$data="*";
						$clm="id";
						$key=$line['id_produk'];
						$produk=$sistem->tampil_data_where($tbl,$clm,$data,$key);
						foreach ($produk as $key => $produknya){
							$namaProduk = $produknya['nama'];
							$img = $produknya['gambar'];
						}
						$total += $produknya['rp'];
				?>
				<tr>
					<td> <?= $no++ ?> </td>
					<td> <?= ucwords($namaProduk); ?> | <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus akun ini ?')" href="../setting/function/proses_hapus_where.php?link=atc&tbl=atc&clm=id&id=<?= $line['id'] ?>" title=""><i class="fa fa-trash"></i> Hapus..</a><br>
						<img src="<?= $img ?>" width="150px">
						<h4 style="font-weight: bold;color: #E72A8C">Rp<?= number_format($produknya['rp']) ?></h4>
						<b>Masukan Catatan </b> <br><small>seperti warna, size, varian (jika produk memilikinya) ex: hitam, L</small> 
						<textarea class="form-control" name="catatan"></textarea> 
					</td>
					 
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h2>Total : <?php echo number_format($total) ?></h2>
		<div class="alert alert-danger">
			Isi form dengan lengkap dan barang akan siap kirim :)..
		</div>
		<form action="https://remotebisnis.com/wp-admin/admin-post.php" method="get" onsubmit="return kirim()" target="_blank">

          <input type="hidden" name="action" value="coba_kirim">

          <input type="hidden" name="gratis_ongkir" value="1">

          <input required="" value="249000" type="hidden" name="hargasatuan">

          <input required="" value="0" type="hidden" name="diskon">

          <input type="hidden" value="Paket Hemat Hair dryer &amp; Catok Rambut + BONUS" name="namaproduk">

          <input type="hidden" name="nowa" value="6283165724269">

          <input type="hidden" name="jenis" value="CreativeFamily">

          <input type="hidden" name="emailsaya" value="info@remotebisnis.com">

          <input type="hidden" name="tanggal_pemesanan" value="Sabtu, 17 April 2021">

          <input type="hidden" value="387" name="kode_unik">

          <input type="hidden" name="ongkir_id" id="ongkir_id" value="false">

          <input type="hidden" name="berat" value="400">

          <div id="grid-form">

             <div>

                <label class="b">NAMA LENGKAP</label>

                <input class="form-control" type="text" value="" placeholder="Nama Lengkap" name="nama" required="">

             </div>

             <div>

                <label class="b">NO WA</label>

                <input class="form-control" type="text" value="" placeholder="No WA" name="nohp" required="">

             </div>

             <div>

                <label class="b">E-MAIL</label>

                <input class="form-control" type="text" value="" placeholder="Email Aktif" name="email" required="">

             </div>

             <div>

                <label class="b">PROVINSI</label>

                <input type="hidden" name="provinsi" id="valprovinsi">

				<select name="jsprovinsi" class="form-control select2" id="provinsi">
					<?php foreach ($provinsi as $key => $value): ?>
						<option value="<?php echo $value['id'] ?>"><?= $value['nama'];  ?></option>
					<?php endforeach ?>
				</select> 

             </div>

             <div>

                <label class="b"><i class="fa hide green fa-lg fa-spinner fa-spin" id="idKABUPATEN"></i> KABUPATEN/KOTA</label>

                <input type="hidden" name="kabupaten" id="valkabupaten" class="form-control">

                <select name="jskabupaten" class="select2 form-control" id="kabupaten" required="" >

                   <option value="" data-select2-id="select2-data-4-pt8y">Pilih Provinsi dulu</option>

                </select> 
             </div>

             <div>

                <label class="b"><i class="fa hide green fa-lg fa-spinner fa-spin" id="idKECAMATAN"></i> KECAMATAN</label>

                <input type="hidden" name="kecamatan" id="valkecamatan">

                <select name="jskecamatan" class="form-control select2" id="kecamatan">

                   <option value="" data-select2-id="select2-data-6-gyop">Pilih Provinsi kabupaten/kota dulu</option>
                  

                </select> 

             </div>

             <div>

                <label class="b"><i class="fa hide green fa-lg fa-spinner fa-spin" id="idDESA"></i> DESA</label>

                <input type="hidden" name="desa" id="valdesa">

                <select name="jsdesa" class="form-control select2 " id="desa" required="">

                   <option value="" data-select2-id="select2-data-8-xte7">Pilih kecamatan dulu</option>

                </select> 

             </div>

             <div>

                <label class="b">KODE POS</label>

                <input class="form-control" type="text" value="" placeholder="768xx" name="kodepos">

             </div>


             <div>

                <label class="b">JABARKAN ALAMAT (jalan, blok, no rumah)</label>

                <textarea class="form-control" type="text" rows="4" name="alamat" placeholder="jika desa/kecamatan/kota tidak ada tulis alamat lengkap disini"></textarea>

             </div>

          </div>

          <button type="submit" value="submit" class="w-100 btn-sm btn btn-danger"><i class="fa fa-send"></i> PESAN SEKARANG</button>

       </form>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

$(document).ready(function() {

 
 
	  $('#provinsi').change(function(){
	    $('#idKABUPATEN').removeClass('hide');
	    var provinsi_val = $('#provinsi option:selected').val();

	    var provinsi_txt = $('#provinsi option:selected').text();

	    $('#valprovinsi').val(provinsi_txt);

	    

	    $.ajax({

	      type: 'GET',

	      url: "https://remotebisnis.com/wp-admin/admin-post.php",

	      data: {

	        action:'cek_ongkir',

	        type:'provinsi',

	        id:$(this).val(),

	      }, 

	      success: function(result) {

	        $('#kabupaten').html(result);
	        $('#idKABUPATEN').addClass('hide');

	      }

	    });

	  });

	  // by kabupaten

	  $('#kabupaten').change(function(){
	        $('#idKECAMATAN').removeClass('hide');

	    $('#valkabupaten').val($('#kabupaten option:selected').text());

	    $.ajax({

	      type: 'GET',

	      url: "https://remotebisnis.com/wp-admin/admin-post.php",

	      data: {

	        action:'cek_ongkir',

	        type:'kabupaten',

	        id:$(this).val(),

	      },

	      success: function(result) {

	        $('#kecamatan').html(result);
	        $('#idKECAMATAN').addClass('hide');

	      }

	    });

	  });

	  // by kecamatan

	  $('#kecamatan').change(function(){
	        $('#idDESA').removeClass('hide');

	    var kecVal = $('#kecamatan option:selected').val();

	    $('#ongkir_id').val(kecVal);

	    $('#valkecamatan').val($('#kecamatan option:selected').text());

	    $.ajax({

	      type: 'GET',

	      url: "https://remotebisnis.com/wp-admin/admin-post.php",

	      data: {

	        action:'cek_ongkir',

	        type:'kecamatan',

	        id:$(this).val(),

	      },

	      success: function(result) {

	        $('#desa').html(result);
	        $('#idDESA').addClass('hide');

	      }

	    });

	  });// by desa

	  $('#desa').change(function(){

	      $('#valdesa').val($('#desa option:selected').text());

	  });
  });
</script>