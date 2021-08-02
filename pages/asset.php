<?php $sistem->cekHakAkses('b',$akun['type_akun']); ?>
<style>
	.content-header div{
		padding: 5px;
	}
	.f-20{
		font-size: 20px;
	}
  @media only screen and (max-width: 600px) {
    #flex{
      grid-template-columns: 100% !important;
    }
    #flex2{
      grid-template-columns: 100% !important;
    }
  }
	.panel-default>.panel-heading {
		color: #fff !important;
		background-color: #c52730 !important;
		border-color: #ddd !important;
	}
	.border-dot{
		border: 5px dotted black
	}
</style>
<?php 
	$title='';
	if ($_GET['type']=='img') {
		$title='Gambar Promosi';
	}elseif ($_GET['type']=='vidio') {
		$title='Vidio for Ads';
	}elseif($_GET['type']=='supplier'){
		$title='Kumpulan Data Supplier Gratis Untuk Anda !';
	}elseif($_GET['type']=='tools'){
		$title='Tools/App';
	}elseif($_GET['type']=='copy'){
		$title='Copywriting, Contek aja';
	}elseif($_GET['type']=='ytlinkgold'){
		$title='Link Vidio Gold !';
	}else{
		$title='Lainnya ...';
	}
?>
<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title"><i class="fa fa-image"></i> Asset : <?php echo $title ?> </h3>

  </div>

    <div class="box-body">
    	<?php 
			if ($_GET['type'] == 'img') {
				echo "<h3 class='text-center'>Gunakan Asset ini untuk creative ads image anda jika ingin beriklan dengan prospek/menjual produk digital rebi ini </h3>";
			}elseif($_GET['type'] == 'zip'){
				echo "<h3 class='text-center'>Silankan unduh dan gunakan untuk keperluan teman-teman</h3>";
			}elseif($_GET['type'] == 'vidio'){
				echo "<h3 class='text-center'>Gunakan Asset ini untuk creative ads vidio anda jika ingin beriklan dengan prospek/menjual produk digital rebi ini </h3>";
			}elseif($_GET['type'] == 'tools'){
				echo "<h3 class='text-center'>Aplikasi atau tools disini, selalu di update berkala </h3>";
			}elseif($_GET['type'] == 'copy'){
				echo "<h3 class='text-center'>Copywriting ini halal di contek, gunakan dan pilih sesuai kebutuhan !</h3>";
			}elseif($_GET['type'] == 'supplier'){
				echo "<h3 class='text-center'>Bingung mau jualan apa dan cari suplier ? coba pilih suppliernya sekarang dan tentukan pilihanmu</h3><p class='text-center'><i>*Kontak, produk dan link supplier bisa saja berubah sewaktu-waktu dan itu diluar kuasa REBI</i></p>";
			}elseif($_GET['type'] == 'ytlinkgold'){
				echo "<h3 class='text-center'>List link dan judul vidio E-Course Gold, <i>*List tidak berurutan mohon di mengerti :)</i></h3>";

			}
    	?>
        <section class="content-header" id="flex" style="grid-template-columns: 33% 33% 33%; display: grid">
			<?php
				if ($_GET['type'] == 'img') {
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/asset_img")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/asset_img',34,90).'/'.$entry;
								echo '<div>
									<img src="'.$src.'" style="max-width:100%">
									<a target="_blank" href="'.$src.'" class="btn btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle); 
					} 
				}elseif($_GET['type'] == 'zip'){
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/desain")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/desain',34,90).'/'.$entry;
								echo '<div>
									<i class="fa fa-2x fa-archive"></i> <b class="f-20">'.$entry.'</b>
									<a target="_blank" href="'.$src.'" class="btn btn-sm btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle); 
					}
				}elseif($_GET['type'] == 'vidio'){
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/asset_vidio_ads")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/asset_vidio_ads',34,90).'/'.$entry;
								echo '<div>
										<video width="100%" height="240" controls>
										<source src="'.$src.'" type="video/mp4">
										Your browser does not support the video tag.
										</video>
									<i class="fa fa-2x fa-play"></i> <b class="">'.$entry.'</b>
									<a target="_blank" href="'.$src.'" class="btn btn-sm btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle);  
					}
				}elseif($_GET['type'] == 'supplier'){
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/data_supplier")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/data_supplier',34,90).'/'.$entry;
								echo '<div>
									<i class="fa fa-2x fa-archive"></i> <b>'.$entry.'</b>
									<a target="_blank" href="'.$src.'" class="btn btn-sm btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle);   
					}
				}elseif($_GET['type'] == 'ytlinkgold'){
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/ytlinkgold")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/ytlinkgold',34,90).'/'.$entry;
								echo '<div>
									<i class="fa fa-2x fa-archive"></i> <b>'.$entry.'</b>
									<a target="_blank" href="'.$src.'" class="btn btn-sm btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle);   
					}
				}elseif($_GET['type'] == 'tools'){
					if ($handle = opendir("/home/remotebi/public_html/member/materi_master/kit")) {
						while (false !== ($entry = readdir($handle))) {
							if ($entry != "." && $entry != "..") {
								$src = 'https://member.remotebisnis.com/'.substr('/home/remotebi/public_html/member/materi_master/kit',34,90).'/'.$entry;
								echo '<div>
									<i class="fa fa-2x fa-archive"></i> <b>'.$entry.'</b>
									<a target="_blank" href="'.$src.'" class="btn btn-sm btn-block btn-primary"><i class="fa fa-download"></i> Unduh</a>
									</div>';
							}
						}
			            closedir($handle);   
					}
				}
			?>
		</section>
		<?php if ($_GET['type']=='copy'): ?>
			<div class="nav-tabs-custom">
	            <ul class="nav nav-tabs pull-right">
	              <li><a href="#tab_1-1" data-toggle="tab">Contoh Headline</a></li>
	              <li class="active"><a href="#tab_1-2" data-toggle="tab">Affiliate</a></li>
	              <!-- <li><a href="#tab_2-2" data-toggle="tab">Contoh Paragraf</a></li> -->
	               
	              <li class="pull-left header"><i class="fa fa-th"></i></li>
	            </ul>
	            <div class="tab-content">
	              <div class="tab-pane active" id="tab_1-2">
	              	<h4 class="b"><u>*COPYWRITING UNTUK AFFILIATE</u></h4>
	              	<p>
	              	    Anda Bisa mendapatkan <a href="https://member.remotebisnis.com/pages/?eRaport=YXNzZXQ=&type=vidio">Asset Vidio</a> & <a href="https://member.remotebisnis.com/pages/?eRaport=YXNzZXQ=&type=video">Asset Gambar</a> di Menu <b>Template & Asset</b>
	              	</p>
	              	<hr>
	              	<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title sm-f-15">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="" aria-expanded="true">
							    <b>1.</b> CONTOH AD UNTUK MENCARI PROSPEK</a>
							  </h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse " aria-expanded="true" style="">
							  <div class="panel-body">    
				              	<div class="alert alert-danger" style="background: white !important; color: black !important;">
					              	<div class="text-center alert alert-danger">
					              		<i class="fa-2x fa fa-file-image-o"></i> / <i class="fa-2x fa fa-file-video-o"></i><br>
					              		*konten gambar/vidio (bisa didapat di menu <b>Panduan vidio promosi & gambar promosi</b>)
					              	</div>
					              	<h3 class="b">HEADLINE : </h3>
				              		<b>Jangan Mimpi Income Puluhan Juta Jika Tidak Menggunakan Cara Ini</b>
				              		<hr>
				              		<h3 class="b">BODY :</h3>
				              		<p class="bg-message border-dot">
										✅ Gak Perlu Atur Ongkir & Alamat<br>
										✅ Gak Perlu Cek Stok<br>
										✅ Gak Perlu Tanya Ready Atau Tidak<br>
										✅ Gak Takut Barang Rusak<br>
										✅ Gak Perlu Takut Komplen<br>
										<br>
										Tapi Profit 100%<br>
										<br>
										Apalagi kalo bukan Affiliate di RemoteBisnis.com 💼<br>
										<br>
										Percaya Deh, Ini tidak sebanding jika kamu ke Kape, Mol, Heng ot itu Kamu akan Habis Uang RATUSAN RIBU secara sia-sia, TAPI di REBI kamu akan menyelamatka masa depan finansialmu<br>
										<br>
										NB: ada Garansi Uang Kembali & Promo Tapi Terbatas, Buruan Join Sekarang<br>
										<br>
										<br>
										
				              		</p>
				              	</div> 

							  </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title sm-f-15">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true">
							    <b>2.</b> CONTOH AD UNTUK MENCARI PROSPEK AFFILIATE</a>
							  </h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse " aria-expanded="true" style="">
							  <div class="panel-body">    

				              	<b></b>
				              	<div class="alert alert-danger" style="background: white !important; color: black !important;">
					              	<div class="text-center alert alert-danger">
					              		<i class="fa-2x fa fa-file-image-o"></i> / <i class="fa-2x fa fa-file-video-o"></i><br>
					              		*konten gambar/vidio (bisa didapat di menu <b>Panduan vidio promosi & gambar promosi</b>)
					              	</div>
					              	<h3 class="b">HEADLINE : </h3>
				              		<b>
				              			Rahasia Jualan Produk Digital Nyaris Tanpa Modal
				              		</b>
				              		<hr>
				              		<h3 class="b">BODY :</h3>
				              		<p class="bg-message border-dot">
										Dapat Puluhan Juta dari Produk Digital Makin Mudah<br>
										<br>
										☕️ Gak Perlu Website/Landing page sendiri, kami sediakan (bisa pasang pixel), Kamu bisa Hemat BELASAN JUTA<br>
										☕️ Komisi 100% Uang Untuk Kamu 🤑<br>
										☕️ Konten, Target di sedikan<br>
										☕️ Garansi 7 Hari Uang Kembali<br>
										☕️ Di bimbing dari 0<br>
										☕️ ...<br>
										<br>
										Banyak saja diluarsana banyak orang yang tidak tahu kesempatan emas ini, dan kamu orang yang BERUNTUNG karena telah mengetahui ini, Do it Now<br>
										<br>
										jangan cuma jadi penonton yuk cobain dan buktikan sendiri<br>
										<br>
										Intip kami di :<br>
										🌐 link affiliate anda (bit.ly kan supaya lebih pendek)
										<br>
										<br>
										
				              		</p>
				              	</div> 
							  </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title sm-f-15">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="" aria-expanded="true">
							    <b>3.</b> CONTOH AD MENCARI LEAD MAGNET / JOIN GRATIS</a>
							  </h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse " aria-expanded="true" style="">
							  <div class="panel-body">    
				              	<div class="alert alert-danger" style="background: white !important; color: black !important;">
					              	<div class="text-center alert alert-danger">
					              		<i class="fa-2x fa fa-file-image-o"></i> / <i class="fa-2x fa fa-file-video-o"></i><br>
					              		*konten gambar/vidio (bisa didapat di menu <b>Panduan vidio promosi & gambar promosi</b>)
					              	</div>
					              	<h3 class="b">HEADLINE : </h3>
				              		<b>
				              			GRATIS !, Dapatkan sekarang sebelum dihapus besok
				              		</b>
				              		<hr>
				              		<h3 class="b">BODY :</h3>
				              		<p class="bg-message border-dot">
										Gratis 3 Jenis Ecourse dengan total 50 vidio lebih + bonus 6 E-Book premium 😎.<br>
										.<br>
										buruan dapetin karena Gratis, kapan lagi bisnismu bertumbuh dengan modal Minim kalo engga sekarang.<br>
										.<br>
										shuttt, kalo gak mau jangan kunjungi link ini:<br>
										link referal anda disini<br>
										link referal anda disini<br>
										link referal anda disini<br>
										.<br>
										NB: Akan ada Bonus melimpah disini<br>
										<br>
										<br>
										
				              		</p>
				              	</div> 
							
							  </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title sm-f-15">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="" aria-expanded="true">
							    <b>4.</b> CONTOH AD MENCARI LEAD MAGNTE / JOIN GRATIS II</a>
							  </h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse " aria-expanded="true" style="">
							  <div class="panel-body">    
				              	<div class="alert alert-danger" style="background: white !important; color: black !important;">
					              	<div class="text-center alert alert-danger">
					              		<i class="fa-2x fa fa-file-image-o"></i> / <i class="fa-2x fa fa-file-video-o"></i><br>
					              		*konten gambar/vidio (bisa didapat di menu <b>Panduan vidio promosi & gambar promosi</b>)
					              	</div>
					              	<h3 class="b">HEADLINE : </h3>
				              		<b>
				              			CEPAT DAPATKAN GRATIS SEBELUM DIHAPUS
				              		</b>
				              		<hr>
				              		<h3 class="b">BODY :</h3>
				              		<p class="bg-message border-dot">
										Dikarenakan Sudah banyak yang download maka sebentar lagi saya akan hapus 50+ vidio fb ads + cara membangung bisnis online dan 6 E-Book premium.<br>
										.<br>
										Mumpung sekarang belum saya hapus silahkan dapatkan sekarang<br>
										.<br>
										link referal anda disini<br>
										link referal anda disini<br>
										link referal anda disini<br>
										.<br>
										NB: Akan ada Bonus melimpah disini<br>
										<br>
										<br>
										
				              		</p>
				              	</div> 
							
							  </div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title sm-f-15">
							    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="" aria-expanded="true">
							    <b>5.</b> CONTOH AD MENCARI PROSPEK PEMBISNIS</a>
							  </h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse " aria-expanded="true" style="">
							  <div class="panel-body">    
				              	<div class="alert alert-danger" style="background: white !important; color: black !important;">
					              	<div class="text-center alert alert-danger">
					              		<i class="fa-2x fa fa-file-image-o"></i> / <i class="fa-2x fa fa-file-video-o"></i><br>
					              		*konten gambar/vidio (bisa didapat di menu <b>Panduan vidio promosi & gambar promosi</b>)
					              	</div>
					              	<h3 class="b">HEADLINE : </h3>
				              		<b>
				              			BISNIS TUH MUDAH KALO TAHU CELAHNYA, JOIN SEKARANG
				              		</b>
				              		<hr>
				              		<h3 class="b">BODY :</h3>
				              		<p class="bg-message border-dot">
										Di sini semua E-Course kebutuhan untuk membangun bisnis online kamu ada, lengkap ! dari 0 sampe mahir...<br>
										.<br>
										join dan dapatkan 500 vidio (fb,google,email marketing dll) + 100 Ebook Premium<br>
										.<br>
										Free jadi Affiliate dengan komisi 100% untuk kamu + Fitur Affiliate<br> 
										.<br>
										Kapan lagi bisnis kamu bisa Grow Up dengan modal minim<br>
										.<br>
										kunjungi : <br>
										bit.ly/lp-rebi<br>
										bit.ly/lp-rebi<br>
										bit.ly/lp-rebi<br>
										.<br>
										NB: Ada Bonus & Investasi Spesial <br>
										
				              		</p>
				              	</div> 
							
							  </div>
							</div>
						</div>
					</div>				
					
	              	<hr>
	              </div> 
	              <div class="tab-pane " id="tab_1-1">
	              	<h4>*Gunakan Kata-kata perangsan berikut</h4>
	              	<ol>
	              		<li>Cepat</li>
	              		<li>Praktis</li>
	              		<li>Lebih</li>
	              		<li>Rahasia</li>
	              		<li>Terbatas</li>
	              		<li>Sekarang</li>
	              		<li>Penting</li>
	              		<li>Buruan</li>
	              		<li>Menarik</li>
	              		<li>Hanya</li>
	              		<li>Mudah</li>
	              		<li>Akhirnya</li>
	              		<li>Perhatian</li>
	              		<li>Dicari</li>
	              		<li>Spesial</li>
	              		<li>Segera</li>
	              	</ol>
	              	<hr>
	                <h3>Benefit Headline</h3>
	                <p>Intinya membuat target/customer merasa untung membeli produk atau jasa teman-teman, dengan menyebutkan bonus, nilai bonus, total hadiah/bonus dll, so gunakan headline berikut sesuai kebutuhan atau modifikasi aja</p>
	                <ol>
	                	<li>1x join dapat 29 Ecourse dengan total vidio 500+ & Free Ebook</li>
	                	<li>Paket Ekonomis harga kritis</li>
	                	<li>Gratis 50 Vidio E-Course Untuk membangun bisnis kamu</li>
	                	<li>Bonus Senilai <b>Rpxxxxx</b> khusus pembelian hari ini</li>
                		<li>Beli Sekarang Gratis Ongkir</li>
                		<li>Beli 1 Gratis 2</li>
                		<li>Miliki sekarang atau kehilangan Rpxx Bonus</li>
                		<li>Promo Super Hemat 50%</li>
                		<li>Bonus <b>xxx</b> Untuk Pembelian (sebutkan minimal pembelian produk atau nominal)</li>
                		<li>7 Langkah Praktis Turun berat badan dengan <b>xxx</b></li>
                		<li>Gigi Putih (manfaat produk anda), dalam 10 hari DIJAMIN </li>
                		<li>Hidup sehat tanpa Olahraga</li>
	                </ol>
	                <!--  -->
	                <h3>Selective Headline</h3>
	                <p>Headline ini dipakai atau di tujukan untuk teman-teman menyasar orang/komunitas/golongan/target tertentu</p>
	                <ol>
	                	<li>Khusus JABODETABEK Gratis Ongkir/Bonus</li>
	                	<li>Khusus Pelanggan <b>xxx</b> Gratis Ongkir/Bonus</li>
	                	<li>Khusus Member <b>xxx</b> Gratis/Mendapatkan <b>xxx</b></li>
	                	<li>Spesial untuk yang lahir bulan agustus gratis xxx</li>
	                	<li>Kaos Keren ini Gratis Ongkir Bagi Kamu yang lahir bulan Januari</li>
	                	<li>Dll.</li>
	                </ol>
	                <h3>Gimmic Headline</h3>
	                <p>
	                	Headline ini pada intinya mengandung permainan kata atau hal yang dihiperbolakan
	                </p>
	                <ol>
	                	<li>Style ko gitu-gitu aja</li>
	                	<li>E-Course ko mahal ?</li>
	                	<li>Upgrade Sepatu/bajumu sekarang</li>
	                	<li>Dengan ini doi bakal nempel </li>
	                	<li>Jualan terus sampe mampus</li>
	                	<li>Banjir Orderan dengan taktik ini</li>
	                	<li>Terbongkar, rahasia awet muda para aktor Hollywood</li>
	                	<li>Modal Gratis Hasil Fantastis</li>
	                	<li>Mau tahu rahasia 100 juta pertama saya ?</li>
	                	<li>ini rahasia saya turun berat badan 10kg dalam 1 bulan</li>
	                	<li>Koloran Omset Milyaran dengan cara ini</li>
	                	<li>Rahasia Sehat tanpa Obat</li>
	                	<li>Ternyata ini rahasianya !</li>
	                	<li>Benar-benar kecewa !</li>
	                	<li>Ternyata Segampang ini Lho Jadi Star Seller di Shopee</li>
	                	<li>Dll.</li>
	                </ol>
	                <h3>Fear Headline</h3>
	                <p>
	                	Headline ini pada tujuanya membuat pembaca/target ketakutan atau khawatir setelah membaca ini
	                </p>
	                <ol>
	                	<li>Awas Perut Buncit !</li>
	                	<li>Bahaya Obat Kimia</li>
	                	<li>Jangan Sampai Kehabisa, Promo Terbatas</li>
	                	<li>Segera Order, Stok tinggal menipis</li>
	                	<li>100+ terjual kamu mau kehabisan ?</li>
	                	<li>Yakin gamau ganti sabun mandi ?</li>
	                	<li>Rugi jika tidak mengamankan Promo isi</li>
	                	<li>3 Bahaya jika tidak memulai berbisnis</li>
	                	<li>Dll.</li>
	                </ol>
	                <h3>Claim Headline</h3>
	                <p>
	                	Deadline ini seolah-olah mengaku, mengklaim dan menyatakan sesuatu secara sepihak
	                </p>
	                <ol>
	                	<li>Rebi Tempat Belajar Bisnis Digital terlengkap</li>
	                	<li>Semua kebutuhan bisnis onlinemu ada di Rebi</li>
	                	<li>Pusat Ilmu bisnis/digital marketing se indonesia</li>
	                	<li>Pusat distributor produk fashion</li>
	                	<li>Suplemen penurun berat badan tercepat</li>
	                	<li>Satu-satunya produk kecantikan yang xxx</li>
	                	<li>Kripik paling diburu di jakarta</li>
	                	<li>Tempat Belanja online no 1</li>
	                	<li>Susu formula terbukti menyehatkan bayi</li>
	                	<li>Pusat grosir terpercaya sejak 2000</li>
	                	<li>Ampuh! Baru dicoba tiga hari, kolesterol langsung turun</li>
	                	<li>Siapa lagi yang mau punya kulit wajah cantik, sehat dan glowing?</li>
	                	<li>Dll.</li>
	                </ol>
	              </div>
	              <!-- /.tab-pane -->
	              <div class="tab-pane" id="tab_2-2">
	                The European languages are members of the same family. Their separate existence is a myth.
	                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
	                in their grammar, their pronunciation and their most common words. Everyone realizes why a
	                new common language would be desirable: one could refuse to pay expensive translators. To
	                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
	                words. If several languages coalesce, the grammar of the resulting language is more simple
	                and regular than that of the individual languages.
	              </div>
	               
	            </div>
	            <!-- /.tab-content -->
	          </div>
		<?php endif ?>
    </div>
</div>