<?php
  $sistem->cekHakAkses('b',$akun['type_akun']);
?>

<style>
  h4{
    font-weight: bold
  }
  .div-flex{
    padding: 5px;
  }
  @media only screen and (max-width: 600px){
    .div-flex{
      grid-template-columns: 100% !important;
    }
  }
  .box-header{
    border-bottom: 1px solid #ecf0f5
  }
  .panel-default>.panel-heading {
    color: #fff !important;
    background-color: #c52730 !important;
    border-color: #ddd !important;
  }
  a:hover, a:active, a:focus {
    outline: none;
    text-decoration: underline !important;
    color: white !important
  }
</style>
<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-smile-o"></i>

    <h3 class="box-title">Motivasi</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body " >
    <h3 class="box-title text-center">Dengarkan secara berulangkali</h3>
    <div class="text-center">
    	<b><i class="fa fa-info-circle"></i> Channel Youtube</b><br>
	    <a href="https://www.youtube.com/channel/UC9TI5Hf_cuGmOUL7SsUVu3w?sub_confirmation=1" target="_blank" class="btn btn-danger"><i class="fa fa-youtube-play"></i> Subscribe</a>
    </div>
    
    <div style=" grid-template-columns: 50% 50%;display: grid;" class="div-flex">
      <?php $nmr=1; foreach ($sistem->tampil_manual('select * from yt') as $key => $value): $nmr++; ?>
        <div>
          <h3><?php echo $value['judul'] ?></h3>
          <button class="btn btn-sm btn-primary" onclick="return loadVidio('100%','200px','<?=$value['link']?>',<?=$nmr?>)"><i class="fa fa-youtube-play"></i><small> Load Vidio</small></button>
          <section id="panel<?=$nmr?>"></section>
        </div>
      <?php endforeach ?>
    </div>
  </div>
   
</div>

<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-list"></i>

    <h3 class="box-title">Quick Hack</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body " >
    <h3 class="box-title text-center">Quick Hack - Jual Produk PLR Digital Rebi</h3>
    <p class="text-center">Sebelum nonton vidio dibawah ini saya sarankan kaka sudah menonton Vidio FB Ads lainya di menu E-COURSE GOLD, karena diperlukan dasar-dasar FB Ads disini</p>
    
    <div style=" grid-template-columns: 50% 50%;display: grid;" class="div-flex">
      <?php foreach ($sistem->tampil_manual('select * from quick_hack_vidio order by urutan asc') as $key => $value): ?>
        <div>
          <h3><?php echo $nmr++.'. '.$value['judul'] ?></h3>
          <button class="btn btn-sm btn-primary" onclick="return loadVidio('100%','200px','<?=$value['url']?>',<?=$nmr?>)"><i class="fa fa-youtube-play"></i><small> Load Vidio</small></button>
          <section id="panel<?=$nmr?>"></section>
        </div>
      <?php endforeach ?>
    </div>
  </div>
   
</div>

<!--batas-->
<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-users"></i>
    <h3 class="box-title">Jawaban untuk yang bertanya</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body " >
    <h4 class="box-title text-center">Gunakan Jawaban ini jika ada Calon Prospek Anda menanyakan seputar REBI</h4>
    <div class="panel-group" id="accordion">
        <small>*Copy Text ini untuk menjawab pertanyaan Calon Prospek Anda</small>
        <?php $nomor=1; foreach ($sistem->tampil_manual('select * from pertanyaan order by q asc') as $key => $value): ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title sm-f-15">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$value['id']?>">
                <?php echo $nomor++ ?>. <?php echo $value['q'] ?></a>
              </h4>
            </div>
            <div id="collapse<?=$value['id']?>" class="panel-collapse collapse">
              <div class="panel-body">
                
                <div class="bg-message" style="border:5px dotted">
                  <?php echo nl2br($value['j']) ?>    
                  
                </div>
                
              </div>
            </div>
          </div>
        <?php endforeach ?>
    </div>
  </div>
   
</div>
<!--batas-->

<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-user"></i>

    <h3 class="box-title">WikiRebi - Harus Tahu</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body " >
    <div class="div-flex">
    	<div class="panel-group col-md-10 col-sm-12" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus1">
						HAL PERTAMA YANG HARUS ANDA PELAJARI
					</a>
					</h4>
				</div>
				<div id="collapseharus1" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
								Bagi Anda yang baru Join dan bingung mulai dari mana ?, <b>Baca bagian ini sampai Selesai :)</b>, berikut urutan yang harus Anda Pahami
								<ol>
									<li> Anda bisa eksplorer menu-menu di memberarea (klik klik lihat2 menu terlebih dahulu)</li>
									<li> Jika Anda belum terlalu paham tentang fb ads atau mungkin masih belum mendalami, Anda bisa lihat e-course tentang fb ads di memberarea di menu gold, ketik di pencarian kata 'fb'</li>
									<li> Jika sudah, Anda bisa ke menu Panduan (Menu sekarang) dan ke tab <b>'Quick Hack'</b>, disini kaka bisa mulai belajar mencari prospek atau jualan produk digital/affiliate Rebi, dari mulai riset produk, run ads dll</li>
									<li> Jika Anda mau berjualan produk lain Anda bisa cari/pilih supplier di menu <b>Template & Asset -> Database Supplier</b> </li>
								</ol>
							</p>    
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus3">
						 KENAPA KOMISI 100% ?
					</a>
					</h4>
				</div>
				<div id="collapseharus3" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
								<b>Pada dasarnya Vidio E-Course Gold REBI adalah PLR (Private Label Rights)</b>, yaitu produk yang bisa Anda jual kembali dengan harga bebas dengan syarat re-branding lagi, Anda bisa mendapatkan link semua vidio REBI ada di menu <b>Template & Asset -> Link Vidio E-Course Gold </b> dan gunakan sesuai kebutuhan (jika mau menggunakan diluar REBI)
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus2">
						 COOKIES
					</a>
					</h4>
				</div>
				<div id="collapseharus2" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							<b>Ini yang Anda harus tahu</b>, Setiap orang yang pernah mengunjungi link (semua link Referal landingpage,daftar dll) yang memiliki Referal Anda maka selama 14 Hari atau 2 Minggu dan jika dia daftar maka itu akan masuk Prospek Anda dengan kata lain Cookies menempel menandai orang yang pernah klik landingpage ber Referal Anda, <u>inilah istilah Cookies yang dimaksud, dengan kata lain perangkat browser orang tersebut sudah tertempel kode Referal Anda</u>, <i>Jadi kapanpun jika orang yang sudah tertempel Referal Anda kapanpun join kurang dari 14 hari itu akan masuk menjadi calon prospek Anda</i>

							<p>Contoh : Anda pasti login Sosial media, gmail dll di browser Anda, dan ketika anda mengunjungi situs itu anda tidak perlu login lagi, tahu kenapa ? itu adalah contoh penggunaan Cookies</p>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus1replace">
						 COOKIES TIDAK BISA DI REPLACE
					</a>
					</h4>
				</div>
				<div id="collapseharus1replace" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							Nah jika seseorang sudah tertempel Referal Anda dan dia terkena link (klik link) Referal dari member Rebi lain otomatis <b>Cookies atau Referal tidak akan tertimpa/replace</b>, jadi dengan kata lain siapa cepat dia dapat, link Referal siapa yang pertama kali di klik itu yang tertempel dan masuk ke Cookies
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharusdaftar">
						 ADA YANG DAFTAR LEWAT LEADMAGNET ANDA
					</a>
					</h4>
				</div>
				<div id="collapseharusdaftar" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							Jika ada yang join lewat Link Lead Magnet (dapat 50+ free ecourse), maka otomatis ketika mereka Join Username & Password sedah terkirim ke email ,(template text bisa gunakan yang di menu <b>Panduan > Template Edukasi & Text lainya -> No 11</b>)
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharuscalon">
						 CARA MEMBUAT CALON PROSPEK UPGRADE AKUN
					</a>
					</h4>
				</div>
				<div id="collapseharuscalon" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							Ini berlaku khusus untuk Prospek yang join lewat <b>Link Lead Magnet</b>, untuk membuat Prospek Anda Mau Upgrade Akun maka edukasilah mereka dengan cara kirim pesan Manfaat Affiliate REBI komisi 100%, Enaknya jualan produk digital dll secara berkala ke no Wa mereka. Anda bisa dapatkan Materi untuk edukasi mereka di <b>Panduan > Template Edukasi & Text lainya</b>
							</p>
							<p>
							*Jadi kenapa harus di edukasi adalah supaya mereka lebih aware dengan REBI, dan mereka paham dengan manfaat join REBI, istilahnya sharing atau edukasi baru selling :)
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharushilangnya">
						  HILANGNYA COOKIES
					</a>
					</h4>
				</div>
				<div id="collapseharushilangnya" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							<b>Cookies bisa hilang</b>, ya, cookie bisa hilang sebelum 14 hari jika pengguna(orang yang sudah terkena Refral Anda) mengghapus cookie lewat browser atau aplikasi pembersih atau sejenisnya
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus13">
						 APPROVE PROSPEK SAYA GIMANA ?
					</a>
					</h4>
				</div>
				<div id="collapseharus13" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							<b>Approve akan muncul bagi Prospek Anda yang telah mengajukan/Upgrade</b>, Anda bisa Approve akun Prospek dengan catatan pastikan Prospek anda yang akan di Approve sudah benar melakukan Transaksi sesuai Nominal/kode unik, Untuk Approve Prospek Klik "Prospek/Lead Anda", klik nama lalu klik "Approve"
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus134">
						 BAGAIMANA SAYA DAPATKAN PROSPEK ?
					</a>
					</h4>
				</div>
				<div id="collapseharus134" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							<b>Setail memakain FB ADS (cari prospek pakai FB ads lihat vidio di panel "Quick Hack")</b>, Anda juga bisa Share/bagikan link referal Baik yang <b>"Template Landing Page Target Bisnis Online", " Template Landing Page Target Affiliate Marketing" dll</b> di Grup Facebook, WhatsApp, Telegram, Forum dll, saya sarankan juga gunakan <b>Bit.ly</b> untuk mempersingkat link Anda <br> Saya sarankan untuk share link referal yang <b>"Landing Page Free E-Book / Lead Magnet:"</b> jika di share ke grup telegram, facebook, Whatsapp dll.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus12">
						2 TYPE AKUN
					</a>
					</h4>
				</div>
				<div id="collapseharus12" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
								<b>1. TRIAL</b><br>
								Jika anda membagikan Link Referal yang <b>"Lead Magnet"</b> otomatis jika ada orang daftar lewat link itu akun yang mereka dapatkan adalah TRIAL dalam arti belum Full akses, mereka hanya dapat 50 Vidio E-Course dan 6 Free Ebook (Mungkin Anda juga join di REBI melawati ini juga)
								<br><b>2. FULL AKSES</b><br>
								Orang yang daftar selain lewat link <b>Lead Magnet</b> maka akun mereka akan <b>FULL AKSES</b> dengan catatan mereka harus menyelesaikan Transaksi dengan Anda.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title sm-f-15">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseharus11">
						 GUNAKAN ASSET VIDIO ATAU GAMBAR TERSEDIA
					</a>
					</h4>
				</div>
				<div id="collapseharus11" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="bg-message" style="border:5px dotted">
							<p>
							Untuk menunjang link referal yang Anda bagikan (link apapun) gunakan vidio atau gambar yang REBI sediakan di menu <b>Template & Asset -> Gambar Promosi atau Vidio Promosi</b> gunakan ini saat share di Grup WhatsApp, Telegram, Facebook dll, supaya orang lebih kenal REBI dan Berpotensi Join lewat link referal Kaka
							</p>
						</div>
					</div>
				</div>
			</div>	
	    </div>
    </div>
  </div>
   
</div>
<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-map"></i>

    <h3 class="box-title">Panduan Afiliasi</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body " >
    <div class="text-center">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/HZZkJ9xxNVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h3>100% Komisi untuk anda</h3>
    <p>
      Selamat karena anda telah bergabung bersama kami, yuk buat penghasilan melimpah dengan mudah hanya dengan berjualan produk Digital, caranya mudah sekali gunakan link Referal dibawah ini untuk mengundang orang lain/prospek dan dapatkan 100% komisi untuk anda, mau tahu caranya ? 
    </p>
    <hr>
    <h3><i class="fa fa-clone"></i> Garis Besar</h3>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dengan afiliasi ini anda bisa mendapatkan komisi 100% untuk anda, sisem kami yang telah sediakan, anda tinggal promosikan E-Course kami, konten, landing page kami sudah sediakan tinggal anda sebagai Digital Marketer yang mencari prospek dan dapatkan komisi atau investasi dari member baru 100% untuk Anda.
      <br>
      <b>Berikut Tahapan-tahapanya :</b>
      <ol>
        <li>Dapatkan Link Referal</li>
        <li>Sebarkan Link di Grup atau media lainya</li>
        <li>Pantau & Follow Up Data Calon Prospek Baru di Menu Afiliasi</li>
        <li>Beri Akses/Approve Akun</li>
        <li>Selesai ... </li>
      </ol>
      
      <h4>1. Dapatkan Link Referal</h4>
      <p>
        Untuk mendapatkan Lik Referal Anda bisa mendapatkanya di Menu > <i class="fa fa-users"></i> Prospek/Lead Anda, dan berikut contoh linknya : <br>
        <b>- https://remotebisnis.com/landing_page.php?kaf=xxx <br> - https://member.remotebisnis.com/daftar.php?kaf=xxx</b>
        <br>
        Untuk bagian <i>xxx</i> setiap member berbeda-beda, dan tinggal copy link tersebut
      </p>
      <h4>2. Sebarkan Link di Grup atau media lainya</h4>
      <p>
        Link ini lah yang akan Anda gunakan sebagai media promosi, anda bisa menyebarkan link ini di media sosial (anda bisa juga buatkan bit.ly supaya lebih ringkas linknya), sebarkan seperti di Grup WA, FB, IG dan pastinya di Iklan kalian
      </p>
      <h4>3. Pantau Data Calon Prospek Baru di Menu Afiliasi</h4>
      <p>
        Untuk melihat data Calon Prospek yang sudah memasukan data mereka anda bisa melihatnya di Menu > <i class="fa fa-users"></i> Prospek/Lead Anda disana akan muncul data-data orang yang telah menjadi Calon Prospek anda, anda tinggal hubungi mereka Via WA/Email dengan cara klik nama Calon Prospek dan <b>Muncul Popup > Klik No WA/Email untuk mengubungi/Follow Up Calon Prospek </b>
      </p>
      <h4>4. Beri Akses/Approve Akun</h4>
      <p>
        Jika Transaksi Sudah Selesai, maka anda bisa kembali ke Menu > <i class="fa fa-users"></i> Prospek/Lead Anda, disana akan muncul data-data orang yang telah menjadi Calon Prospek anda dan cari nama Calon Prospek terkait dan beri akses dengan cara <b>Klik Nama terkait dan > klik Approve</b>
      </p>
      <h4>5. Selesai</h4>
      <p>
        Selesai ... :)
      </p>

    </p>
  </div>
  <!-- /.box-body -->
   
</div>
<div class="box box-solid collapsed-box ">
  <div class="box-header ui-sortable-handle cursor-pointer" data-widget="collapse">
    <i class="fa fa-book"></i>

    <h3 class="box-title">Template Edukasi & Text lainya</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-plus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <p style="width: 80%">Template format text pesan & edukasi (edukasi bisa ke Nomor Wa, Email dll) ini bisa Anda gunakan untuk dikirim secara berkala/bertahap ke pungguna Trial/Prospek Anda (Sesuaikan) tujuanya adalah sharing-sharing baru selling, supaya mereka aware dan lebih mudah untuk diajak join/upgrade member atau closing</p>
    <i>*Editlah sesuai kebutuhan, dan Anda tidak mesti berurutan mengirimkan edukasinya, pilih sesuai kebutuhan saja</i><br>
    <i>*Template dibawah ini diurutkan berdasarkan Alfabet jadi bukan berarti harus berurutan dalam menggunakanya</i><br>
      <div class="panel-group" id="accordion">
        <?php $nomor=1; foreach ($sistem->tampil_manual('select * from edukasi order by judul asc') as $key => $value): ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title sm-f-15">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapsex<?=$value['id']?>">
                <?php echo $nomor++ ?>. <?php echo $value['judul'] ?></a>
              </h4>
            </div>
            <div id="collapsex<?=$value['id']?>" class="panel-collapse collapse">
              <div class="panel-body">
                
                <div class="bg-message" style="border:5px dotted">
                  <?php echo nl2br($value['text']) ?>
                </div>
                
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
  </div>
</div>
<script>

</script>