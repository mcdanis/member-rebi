<?php 
    date_default_timezone_set('Asia/Jakarta');

	setlocale(LC_TIME, 'id_ID.utf8');

	$hariIni = new DateTime();

	$hari = strftime('%A, %d %B %Y', $hariIni->getTimestamp());
	if (!$_COOKIE['rebi_lp_cookie']) {
		if (!$_GET['kaf']) {
			$valCookie = '39587434922';
		}else{
			$valCookie = $_GET['kaf'];
		}
		setcookie('rebi_lp_cookie',$valCookie,strtotime('+14 days'),"/");
	}
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
        <!-- This site is optimized with the Yoast SEO plugin v16.0.1 - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Cara Mudah Naikan Profit | RemoteBisnis</title>
        <link rel="canonical" href="https://www.member.remotebisnis.com/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="REBI - Belajar & Dapat Income dari Digital Bisnis " />
        <meta property="og:description" content="PERHATIAN ! Sistem ini akan sangat memudahkan Kamu dalam berjualan produk digital dengan komisi 100%" />
        <meta property="og:url" content="https://www.member.remotebisnis.com/" />
        <meta property="og:site_name" content="Member RemoteBisnis" />
        <meta property="article:modified_time" content="2021-04-07T00:04:36+00:00" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:label1" content="Est. reading time">
        <meta name="twitter:data1" content="18 minutes">

         
        <!-- / Yoast SEO plugin. --> 
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '515914853189009');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=515914853189009&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        <style type="text/css">
            .c-black{
                color: black !important
            }
            .c-white{
                color: white
            }
            img.wp-smiley,
            img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
            }
            .hover-panel ol{
                font-size: 15px;
                color: white
            }
            .hover-panel{
                padding: 10px;
                overflow-y: scroll;
                width: 100%;
                height: 100%;
                position: absolute;
                background: #ff9800f0;
                z-index: 99;
                display: none;
            }
            .gold{
                color:#fab437;
            }
            #parentpanel:hover .hover-panel{
                display: block;
            }
            .btn-custom-primary{
                background-color:#f2ff11 !important;
                color: black;
            }
            .elementor-7 .elementor-element.elementor-element-78881a14 .elementor-button:hover {
                color: #F2DE12 !important;
                background-color: #080500;
            }
            .readmore{
                display: none !important;
            }
            .div-img-testi{
                grid-template-columns: 25% 25% 25% 25%;
                display: grid;
            }
            @media only screen and (max-width: 600px) {
                .div-img-testi{
                  grid-template-columns: 50% 50% !important;
                }
            }
        </style>
        <link rel='stylesheet' id='wp-block-library-css'  href='https://www.impresifcopywriting.com/wp-includes/css/dist/block-library/style.min.css?ver=5.7.1' type='text/css' media='all' />
        <link rel='stylesheet' id='hello-elementor-css'  href='https://www.impresifcopywriting.com/wp-content/themes/hello-elementor/style.min.css?ver=2.3.1' type='text/css' media='all' />
        <link rel='stylesheet' id='hello-elementor-theme-style-css'  href='https://www.impresifcopywriting.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.3.1' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-icons-css'  href='https://www.impresifcopywriting.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.11.0' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-animations-css'  href='https://www.impresifcopywriting.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.1.4' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-frontend-css'  href='https://www.impresifcopywriting.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.1.4' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-5-css'  href='https://www.impresifcopywriting.com/wp-content/uploads/elementor/css/post-5.css?ver=1616067665' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-global-css'  href='https://www.impresifcopywriting.com/wp-content/uploads/elementor/css/global.css?ver=1616069050' type='text/css' media='all' />
        <link rel='stylesheet' id='elementor-post-7-css'  href='https://www.impresifcopywriting.com/wp-content/uploads/elementor/css/post-7.css?ver=1617754206' type='text/css' media='all' />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
         
    </head>
    <body class="home page-template page-template-elementor_canvas page page-id-7 elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-7">
        <div data-elementor-type="wp-page" data-elementor-id="7" class="elementor elementor-7" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-5ea14208 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ea14208" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;curve-asymmetrical&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M0,0c0,0,0,6,0,6.7c0,18,240.2,93.6,615.2,92.6C989.8,98.5,1000,25,1000,6.7c0-0.7,0-6.7,0-6.7H0z"/>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3128f009" data-id="3128f009" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1e14a86c elementor-widget elementor-widget-heading" data-id="1e14a86c" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">HAI PEMBISNIS !, KAMU PASTI INGIN MELIPAT GANDAKAN PROFIT KAN ?</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7f57af65 elementor-widget elementor-widget-image" data-id="7f57af65" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <img src="https://member.remotebisnis.com/dist/img/logo.png"/>                                
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6092a11d elementor-widget elementor-widget-heading" data-id="6092a11d" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">RemoteBisnis</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-63685cbf elementor-widget elementor-widget-heading" data-id="63685cbf" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default"><font color="yellow">JANGAN BERHARAP SUKSES</font> BISNIS ONLINE JIKA KAMU TIDAK TAHU CARA INI, <font color="yellow">TERBUKTI !</font></h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7cd6528e elementor-widget elementor-widget-heading" data-id="7cd6528e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">GARANSI <b>100% UANG KEMBALI</b> SELAMA 7 HARI JIKA KAMU MERASA TIDAK PUAS</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-74348014 elementor-align-center elementor-widget elementor-widget-button" data-id="74348014" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="#price" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                            <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon elementor-align-icon-left">
                                            <i aria-hidden="true" class="fas fa-sign-in-alt"></i>       </span>
                                            <span class="elementor-button-text">DAFTAR SEKARANG</span>
                                            </span>
                                            </a>

                                            <!-- <a style="background-color: #edae26" href="https://member.remotebisnis.com/cfree.php?kaf=<?= $_GET['kaf'] ?>&type=1" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                            <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon elementor-align-icon-left">
                                            <i aria-hidden="true" class="fas fa-star"></i>       </span>
                                            <span class="elementor-button-text">MAU YANG GRATIS AJA!</span>
                                            </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-4f10b32 elementor-reverse-mobile elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4f10b32" data-element_type="section" >
                    <div class="elementor-element elementor-element-107fae27 elementor-widget elementor-widget-heading" data-id="107fae27" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <p class="elementor-heading-title elementor-size-default c-black">Ini kata mereka lhooo!</p>
                            </div>
                        </div>
                        <div class="div-img-testi">
                            
                            <img src="https://duniaundercover.files.wordpress.com/2021/06/testi-2.jpeg" class="img-testi">
                            <img src="https://duniaundercover.files.wordpress.com/2021/06/testi-3.jpeg" class="img-testi">
                            <img src="https://duniaundercover.files.wordpress.com/2021/06/testi-4.jpeg" class="img-testi">
                            <img src="https://duniaundercover.files.wordpress.com/2021/06/testi-5.jpeg" class="img-testi">
                        </div>
                    <div class="elementor-background-overlay"></div>
                    <div class="text-center" style="text-align: center;color: #000000;font-family: &quot;Montserrat&quot;, Sans-serif;font-size: 16px;font-weight: 800;text-transform: uppercase;line-height: 1.5em;margin-top: 15px;background: #e6e6e6;padding: 10px">MEREKA AJA <font color="red">BISA</font> DAN <font color="red">SUDAH MEMBUKTIKAN</font> MASA KAMU HANYA MAU JADI PENONTON SAJA !, <font color="red">SAYA PAHAM</font> APA YANG KAMU RASAKAN  <font color='red'>KARENA</font> SAYA PERNAH DI POSISI KAMU
                    </div>
                    <div class="elementor-container elementor-column-gap-wide">
                        
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-780f0120" data-id="780f0120" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8312b96 elementor-widget elementor-widget-heading" data-id="8312b96" data-element_type="widget" data-widget_type="heading.default">
                                    
                                </div>
                                <div class="elementor-element elementor-element-429ef90e elementor-widget elementor-widget-heading" data-id="429ef90e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">PASTI INI YANG KAMU RASAKAN SEKARANG !</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Red_x.svg/480px-Red_x.svg.png" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title"><b></b>Siang Malam</b> Ngurusin Bisnis tapi hasil <b>NIHIL</b> ?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Red_x.svg/480px-Red_x.svg.png" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title"><b>Udah Keluar Uang</b> buat beli-beli E-Course bisnis online <b>tapi masih ZONG ?</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Red_x.svg/480px-Red_x.svg.png" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Ingin <b>MENGKALILIPATAN</b> Profit Bisnis Online Kamu tapi susah ?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Red_x.svg/480px-Red_x.svg.png" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title"><b>BONCOS</b> Terus ?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Red_x.svg/480px-Red_x.svg.png" class="attachment-full size-full" alt="" loading="lazy" /></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Susah cari Pembimbing Bisnis Online yang <b>mau bantu dari 0 dan Suport Private chat ?</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  
                                 
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c2caf13" data-id="2c2caf13" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2651d908 elementor-widget elementor-widget-image" data-id="2651d908" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <img width="612" height="408" src="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/young-freelancer-man-expresing-concept-against-orange-isolated_1194-18869-removebg-preview.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/young-freelancer-man-expresing-concept-against-orange-isolated_1194-18869-removebg-preview.png 612w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/young-freelancer-man-expresing-concept-against-orange-isolated_1194-18869-removebg-preview-300x200.png 300w" sizes="(max-width: 612px) 100vw, 612px" />                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-container elementor-column-gap-wide">
                        
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-780f0120" data-id="780f0120" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-8312b96 elementor-widget elementor-widget-heading" data-id="8312b96" data-element_type="widget" data-widget_type="heading.default">
                                    
                                </div>
                                <br>
                                <br>
                                <div class="elementor-element elementor-element-429ef90e elementor-widget elementor-widget-heading" data-id="429ef90e" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">PASTI INI YANG KAMU MAU !</p>
                                    </div>
                                </div>
                                  
                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://icons-for-free.com/iconfiles/png/512/correct+mark+success+tick+valid+yes+icon-1320167819078544687.png" class="attachment-full size-full" alt="" loading="lazy"></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Mau dibimbing dari <b>0</b> <b>sampe Master</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://icons-for-free.com/iconfiles/png/512/correct+mark+success+tick+valid+yes+icon-1320167819078544687.png" class="attachment-full size-full" alt="" loading="lazy"></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Ingin <b>Banjir Orderan</b> dan Laris Manis </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://icons-for-free.com/iconfiles/png/512/correct+mark+success+tick+valid+yes+icon-1320167819078544687.png" class="attachment-full size-full" alt="" loading="lazy"></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Mau Bisnis Besar <b>Hingga Masa Depan/Tua</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://icons-for-free.com/iconfiles/png/512/correct+mark+success+tick+valid+yes+icon-1320167819078544687.png" class="attachment-full size-full" alt="" loading="lazy"></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Mau <b>Bebas Finansial</b> Dengan Bisnis Online</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-7aef5754 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="7aef5754" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <figure class="elementor-image-box-img"><img width="60" height="60" src="https://icons-for-free.com/iconfiles/png/512/correct+mark+success+tick+valid+yes+icon-1320167819078544687.png" class="attachment-full size-full" alt="" loading="lazy"></figure>
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">Mau <b>Mengembangkan</b> Bisnis Hingga Skala Besar ?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
                                  
                                 
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c2caf13" data-id="2c2caf13" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2651d908 elementor-widget elementor-widget-image" data-id="2651d908" data-element_type="widget" data-widget_type="image.default">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-37a2d181 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="37a2d181" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;curve-asymmetrical&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-top" data-negative="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M0,0c0,0,0,6,0,6.7c0,18,240.2,93.6,615.2,92.6C989.8,98.5,1000,25,1000,6.7c0-0.7,0-6.7,0-6.7H0z"/>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ae27478" data-id="1ae27478" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-4e9aae1 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4e9aae1" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-65341ab1" data-id="65341ab1" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3c2ffb15 elementor-widget elementor-widget-image" data-id="3c2ffb15" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="500" height="377" src="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/promotion.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/promotion.png 500w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/promotion-300x226.png 300w" sizes="(max-width: 500px) 100vw, 500px" />                                 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-60eb75e" data-id="60eb75e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6359b65c elementor-widget elementor-widget-text-editor" data-id="6359b65c" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>SADARKAH KAMU</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-243f1b2 elementor-widget elementor-widget-text-editor" data-id="243f1b2" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>
                                                                <b class="gold">BAYANGKAN KETIKA</b> masa tua tiba dan kamu tidak sanggup lagi unduk bekerja, maka bisnis online adalah solusinya, kalo tidak sekarang kapan lagi untuk memulai dan membangung <b class="gold">BISNISMU</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-6e8b8073 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6e8b8073" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        
                                        <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-860d828" data-id="860d828" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-28fd24c1 elementor-widget elementor-widget-image" data-id="28fd24c1" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="500" height="430" src="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/product.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/product.png 500w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/product-300x258.png 300w" sizes="(max-width: 500px) 100vw, 500px" />                               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-77201a95" data-id="77201a95" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-253f9d5f elementor-widget elementor-widget-text-editor" data-id="253f9d5f" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>DAN TAHUKAH Kamu</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4fa7b75e elementor-widget elementor-widget-text-editor" data-id="4fa7b75e" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p>
                                                                Diluaran sana banyak orang yang tidak tahu akan REBI ini dan Kamu sangat beruntung membaca ini, Karena <b class="gold">Ini Adalah Batu Loncatan Kesukses Kamu</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-6577d20d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6577d20d" data-element_type="section">
                                    
                                    <div class="elementor-button-wrapper" style="text-align: center;">
                                        <a href="#price" class="btn-custom-primary elementor-button-link elementor-button elementor-size-sm elementor-animation-grow c-black" role="button">
                                        <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon elementor-align-icon-left">
                                        <i aria-hidden="true" class="fas fa-sign-in-alt"></i>       </span>
                                        <span class="elementor-button-text">Daftar Sekarang</span>
                                        </span>
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-4ba53088 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4ba53088" data-element_type="section" >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c40d8d0" style="width:40% !important">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6253cc7 elementor-widget elementor-widget-image" data-id="6253cc7" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <img width="338" height="338" src="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/income-growth-freelancer-sitting-coins-working-with-laptop-cartoon-character-money-earning-virtual-sales-marketing-strategy-vector-isolated-concept-metaphor-illust.jpg" class="attachment-full size-full" alt="" loading="lazy" srcset="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/income-growth-freelancer-sitting-coins-working-with-laptop-cartoon-character-money-earning-virtual-sales-marketing-strategy-vector-isolated-concept-metaphor-illust.jpg 338w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/income-growth-freelancer-sitting-coins-working-with-laptop-cartoon-character-money-earning-virtual-sales-marketing-strategy-vector-isolated-concept-metaphor-illust-300x300.jpg 300w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/income-growth-freelancer-sitting-coins-working-with-laptop-cartoon-character-money-earning-virtual-sales-marketing-strategy-vector-isolated-concept-metaphor-illust-150x150.jpg 150w" sizes="(max-width: 338px) 100vw, 338px" />                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-14f70e79" style="width:60% !important">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2125a7f6 elementor-widget elementor-widget-heading" data-id="2125a7f6" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1d26018c elementor-widget elementor-widget-heading" data-id="1d26018c" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">KENAPA REMOTEBISNIS INI LAYAK UNTUK Kamu ?</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-1b0b8843 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1b0b8843" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Cocok Untuk Kamu yang ingin belajar bisnis Digital mulai dari 0 seperti Fb Ads ,IG Ads,Google Ads Untuk Mengkalilipatkan OMSET</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Akses MemberArea selamanya & Tidak Ada Biaya lainya</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Dengan <b class="gold">29 E-Course</b> Total vidio <b class="gold">500+</b> & E-Book/Modul 200+ Ini akan <b class="gold">Memudahkan</b> Kamu dalam Mendapatkan Belasan Hingga Puluhan Juta perbulannya</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Tersedia Affiliate dengan dengan <b class="gold">KOMISI 100%</b></span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Update Materi Secara Berkala</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Konten Iklan Disediakan</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Fitur Notifikasi Email untuk afiliasi</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text"><b class="gold">900++ DATABASE SUPPLIER</b> dari semua jenis produk</span>
                                            </li>

                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Free Konsultasi Bisnis Digital via Japri WhatsApp</span>
                                            </li>
                                            
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Tersedia Copywriting yang menjual siap pakai</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Tools Gratis Kirim Pesan ke Banyak No WhatsApp</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Custom Facebook PIXEL </span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Total <b class="gold">Free Template Desain PPT Insta Story & Desain Promosi</span>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </section>
                 
                <section class="elementor-section elementor-top-section elementor-element elementor-element-12b0cbd9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="12b0cbd9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d9a914" data-id="3d9a914" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2ce96e45 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="2ce96e45" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-736e1aad elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="736e1aad" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c2ce410" data-id="c2ce410" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-26e95c90 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="26e95c90" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-4a9e3924 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a9e3924" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
                                c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
                                c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"/>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-56a94c51" data-id="56a94c51" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3edca70b elementor-widget elementor-widget-heading" data-id="3edca70b" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">CORE E-COURSE</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-74944659 elementor-widget elementor-widget-heading" data-id="74944659" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                            E-COURSE YANG AKAN MEMBANGKITKAN FINANSIAL KAMU
                                        </p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2025a6d9 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="2025a6d9" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-28989cdf elementor-section-content-top elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="28989cdf" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        
                                                        <li>Selamat Datang di Training FB Ads Video</li>
                                                        <li>Teknik Beriklan Menggunakan Video Ads</li>
                                                        <li>Level-Level Beriklan di Facebook</li>
                                                        <li>Penjelasan Level Adset Target Market</li>
                                                        <li>Penjelasan Level Ad Materi Iklan</li>
                                                        <li>Cara Membuat Business Page</li>
                                                        <li>Study Kasus Jualan Produk Fisik</li>
                                                        <li>Add Video Produk di Business Page</li>
                                                        <li>Buat Costume Audience 95Persen Views</li>
                                                        <li>Iklan Pertama - Video Ads</li>
                                                        <li>Iklan Kedua - Retarget Traffic Ads</li>
                                                        <li>Penutup Tips dan Trik</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MUDAH JADI MASTER FB ADS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-14.png" class="attachment-full size-full" "="">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3>Investasi</h3>
                                                        <h2 style="color:red;font-size:25px; text-decoration:line-through;">Rp239.000</h2>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview Goal 100 Prospek Perhari Beriklan di Facebook</li>
                                                        <li>Ada 2 Strategi Objective Lead Generation dan Conversion Ads</li>
                                                        <li>Penjelasan Cara Lama Old Way Beriklan Di Facebook</li>
                                                        <li>Penjelasan Cara Terbaru Beriklan Lead Ads Facebook</li>
                                                        <li>Cara Mensetting Pembayaran Menggunakan Kartu Kredit</li>
                                                        <li>Cara Mensetting Pembayaran Menggunakan DEBIT MANDIRI</li>
                                                        <li>Cara Ke-1 Beriklan Menggunakan Lead Generation Ad</li>
                                                        <li>Cara Membuat Halaman Privacy Policy Facebook</li>
                                                        <li>Penjelasan Tentang Bagian-bagian Adset Facebook</li>
                                                        <li>Cara Mentarget Audiense, Targeting, Placement dan Budgeting</li>
                                                        <li>Cara Benar Membuat Konten Ads Teks dan Gambar</li>
                                                        <li>Cara Membuat Konten Lead Form Ads Yang Convert</li>
                                                        <li>Cara Mendownload Data Leads Menggunakan Fans Page</li>
                                                        <li>Cara Ke-2 Beriklan Menggunakan Objective Corversion Ads</li>
                                                        <li>Persiapan dan Tahapan Awal Beriklan Conversion Ads</li>
                                                        <li>Rekomendasi Penyedia Doman Dan Hosting Website</li>
                                                        <li>Cara Menginstall Wordpress Menggunakan Cpanel Hosting</li>
                                                        <li>Cara Membersihkan Page dan Post di Wordpress</li>
                                                        <li>Plugin-Plugin Yang Dibutuhkan Membuat Landing Page</li>
                                                        <li>Cara Menginstall Plugin Instabuilder v2 Landing Page</li>
                                                        <li>Cara Mudah Mendapatkan dan Membuat Lead Magnet</li>
                                                        <li>Rekomendasi Autoresponder Indonesia dan Internasional</li>
                                                        <li>Cara Membuat Halaman Download Lead Magnet</li>
                                                        <li>Cara Menginstall PIXEL Lead Event Di Download Page</li>
                                                        <li>Cara Membuat Halaman Konfirmasi Email Lead</li>
                                                        <li>Cara Menginstall PIXEL Complete Registration Event Di Konfirmasi Page</li>
                                                        <li>Cara Membuat Squeeze Page Menggunakan Email Autoresponder</li>
                                                        <li>Cara Menginstall PIXEL View Content Event Di Squeeze Page</li>
                                                        <li>Cara Menginstall Facebook Pixel Helper Google Chrome</li>
                                                        <li>Test Sistem Autoresponder dan PIXEL Event Facebook</li>
                                                        <li>Strategi Kombinasi Traffic dan Conversion Ads Menggunakan PIXEL</li>
                                                        <li>Cara Membuat Custom Audience Untuk Retargeting Ads</li>
                                                        <li>Cara Membuat Objective Traffic Optimasi Retargeting Ads</li>
                                                        <li>Cara Membuat Lookalike 1persen Untuk Conversions Ads</li>
                                                        <li>Cara Membuat Objective Conversions Ads Optimasi Lead</li>
                                                        <li>Skalakan 100+ Lead Ads Dengan Metode Ini dan Penutup</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>BUILD 100 LEADS FB ADS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-17.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3>Investasi</h3>
                                                        <h2 style="color:red;font-size:25px; text-decoration:line-through;">Rp190.000</h2>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Level Beriklan di Facebook Ads</li>
                                                        <li>Mindset Beriklan di Facebook</li>
                                                        <li>Persiapan Beriklan di Facebook</li>
                                                        <li>Cara Membuat Ads Account</li>
                                                        <li>Penjelasan Tipe Objective Ads</li>
                                                        <li>Penjelasan Tentang Ad Set</li>
                                                        <li>Penjelasan Tentang Materi Ads</li>
                                                        <li>Demo Beriklan Objective Traffic</li>
                                                        <li>Detail Targeting Facebook Ads</li>
                                                        <li>Konsep Retargeting Ads</li>
                                                        <li>Persiapan Retargeting Ads</li>
                                                        <li>Cara Setup Pixel Website</li>
                                                        <li>Rekam Menggunakan Custom Audience</li>
                                                        <li>Demo Iklan Retargeting - Website</li>
                                                        <li>Demo Iklan Retargeting - Video</li>
                                                        <li>Demo Iklan Retargeting - Engage Ads</li>
                                                        <li>Penutup dan Tips</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>RETARGET FB ADS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-21.png" class="attachment-full size-full" alt="">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3>Investasi</h3>
                                                        <h2 style="color:red;font-size:25px; text-decoration:line-through;">Rp190.000</h2>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview dan Goal Training Master FB Ads</li>

                                                        <li>Persiapan Membuat Akun Email Terverifikasi</li>

                                                        <li>Cara Mendaftar dan Membuat Akun di Facebook</li>

                                                        <li>Cara Membuat Page Business Facebook Ads</li>

                                                        <li>Cara Menambahkan Metode Pembayaran Via ATM</li>

                                                        <li>Cara Menambahkan Metode Pembayaran Via Kartu Kredit</li>

                                                        <li>Penjelasan Tentang Iklan Yang Diterima Facebook</li>

                                                        <li>Cara Meriset Target Market Menggunakan Facebook Insight</li>

                                                        <li>Cara Membuat Costume Audiense Target Market Iklan</li>

                                                        <li>Penjelasannya Tentang Campaign Iklan Facebook</li>

                                                        <li>Penjelasannya Tentang Ads Set Iklan Facebook</li>

                                                        <li>Penjelasannya Tentang Ads Show Iklan Facebook</li>

                                                        <li>Demo Cara Membuat Iklan Memperbanyak LIKE Page</li>

                                                        <li>Demo Cara Membuat Iklan Klik Website</li>

                                                        <li>Demo Cara Membuat Iklan Video</li>

                                                        <li>Demo cara Membuat Iklan Boost Posting Page</li>

                                                        <li>Demo Cara Membuat Iklan Retarget Audiense</li>

                                                        <li>Kasus Study Dengan Biaya Iklan Rp.2 perview</li>

                                                        <li>Tips dan Trik Tingkat Advance Sukses Iklan Facebook</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MAHIR FB ADS LANJUTAN</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-24.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3>Investasi</h3>
                                                        <h2 style="color:red;font-size:25px; text-decoration:line-through;">Rp220.000</h2>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <br>

                                    <div style="width: 90%;margin: auto" class="elementor-element elementor-element-74944659 elementor-widget elementor-widget-heading" data-id="74944659" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">
                                                <i class="fa fa-cubes fa-2x"></i><br>
                                                TENANG DULU, JANGAN TERBURU-BURU INI LOO ADA <font color="red">BONUS</font> UNTUK KAMU <font color="red">GRATIS</font> 25 E-COURSE LAINNYA
                                            </p>
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview Membangun Bisnis Dropship</li>
                                                        <li>Perbedaan Dropship dan Reseller</li>
                                                        <li>Tools dan Alat Yang Harus Dipunyai</li>
                                                        <li>Cara Mencari dan Bekerja Sama Dengan Suplier</li>
                                                        <li>Cara Meninstall Wordpress Versi 5</li>
                                                        <li>Cara Install Plugin Landing Page</li>
                                                        <li>Cara Membuat Landing Page Penjualan</li>
                                                        <li>Cara Membuat Order Page Dengan Whatsapp</li>
                                                        <li>Riset Market Menggunakan Facebook Insight</li>
                                                        <li>Cara Membuat Fans Page Penjualan</li>
                                                        <li>Demo Beriklan Menggunakan Objective Traffic Ads</li>
                                                        <li>Konsep Iklan Retarget Membayangi Prospek</li>
                                                        <li>Cara Install Kode Pixel Facebook di Landing Page</li>
                                                        <li>Cara Membuat Custom Audience Web Traffic</li>
                                                        <li>Demo Retarget Facebook Ads</li>
                                                        <li>Cara Meningkatkan Jumlah Traffic Web</li>
                                                        <li>Cara Membuat Lookalike Audience</li>
                                                        <li>Demo Beriklan Conversion Ads View Content</li>
                                                        <li>Tips Belajar dan Penutup</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>DROPSHIP FACEBOOK</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-26.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Video 1: Apa itu Social Media Marketing?</li>
                                                        <li>Video 2: Manfaat dan Keuntungan Menggunakan Social Media</li>
                                                        <li>Video 3: Apasaja Social Media Yang Harus Dimiliki</li>

                                                        <li>Video 4: Perkenalan Facebook Marketing</li>
                                                        <li>Video 5: Bagaimana Facebook Bekerja Untuk Bisnis Anda</li>
                                                        <li>Video 6: Metode Marketing Menggunakan Group Facebook</li>
                                                        <li>Video 7: Metode Marketing Menggunakan Fans Page</li>
                                                        <li>Video 8: Metode Marketing Menggunakan Iklan Facebook</li>

                                                        <li>Video 9: Bagaimana Twitter Marketing Bekerja</li>
                                                        <li>Video 10: Cara Mensetup Akun Twitter</li>
                                                        <li>Video 11: Strategy Pengguna Twitter Yang Sukses</li>
                                                        <li>Video 12: Strategy Twit Di Social Media Twitter</li>
                                                        <li>Video 13: Bangun Marketing Twitter Anda</li>
 
                                                        <li>Video 14: Bagaimana Youtube Marketing Bekerja</li>
                                                        <li>Video 15: Cara Mensetup Akun Channel Youtube</li>
                                                        <li>Video 16: Cara Membuat Video Youtube</li>
                                                        <li>Video 17: Cara Mengupload Video Youtube dan Live</li>
                                                        <li>Video 18: Strategy Meningkatkan Subcriber Youtube</li>

                                                        <li>Video 19: Bagaimana Google Plus Marketing Bekerja</li>
                                                        <li>Video 20: Cara Mensetup Akun Google Plus</li>
                                                        <li>Video 21: Strategy Google Plus Yang Sukses</li>
                                                        <li>Video 22: Update Konten Yang Sukses</li>
                                                        <li>Video 23: Maintaince Friend Google Plus</li>

                                                        <li>Video 24: Social Media Marketing LinkedIn</li>
                                                        <li>Video 25: Social Media Marketing Instagram</li>
                                                        <li>Video 26: Social Media Marketing Blackberry Massanger</li>
                                                        <li>Video 27: Social Media Marketing Live Streaming</li>
                                                        <li>Video 28: Strategy Long Term Social Media Marketing </li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MAHIR SOCIAL MEDIA MARKETING</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-6.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp135.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Modul 1 - Overview</li>
                                                        <li>Modul 2 - Cari Produk Affiliate</li>
                                                        <li>Modul 3 - GiveAway Produk</li>
                                                        <li>Modul 4 -  Website Hosting</li>
                                                        <li>Modul 5 - Squeeze Page</li>
                                                        <li>Modul 6 - Follow Series</li>
                                                        <li>Modul 7 - Traffic / Pengunjung</li>
                                                        <li>Modul 8 - Monitoring</li>
                                                        <li>Modul 9 - Outsourcing</li>
                                                        <li>Modul 10 - Tingkat Advance</li>
                                                        <li>...dan masih banyak lagi!</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>RAHASIA SUPER AFFILIATE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-7.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp120.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Overview, Mindset dan Goal 1,000 dalam 2 hari</li>

                                                    <li>Teknik Mencari dan Memilih Market Yang Profits</li>

                                                    <li>Membuat Fans Page Facebook Yang Profesional</li>

                                                    <li>Update dan Finishing Fans Page Facebook</li>

                                                    <li>Menggunakan Facebook Insight Market Update</li>

                                                    <li>Strategy Promosi Menggunakan Traffic Gratis</li>

                                                    <li>Setup Metode Pembayaran Menggunakan Kartu Kredit</li>

                                                    <li>Setup Metode Pembayaran Menggunakan ATM BERSAMA</li>

                                                    <li>Demo Video Iklan Target Spesifik Market</li>

                                                    <li>Yes, Hasil Iklan Kita 1,000 Like Per Hari</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Affiliate</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan CPA Marketing</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Adsense</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Solo Ads</li>

                                                    <li>Evaluasi, Monitoring dan Tingkatkan Konversi Bisnis</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MEMBANGUNG BOOM TRAFFIC</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-8.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp120.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Selamat Datang Di Training Blog Duit</li>

                                                    <li>Cara Memilih Niche Market Blog Duit Anda</li>

                                                    <li>Cara Tepat Memilih Memilih Platform Blog</li>

                                                    <li>Penjelasan Tentang Hosting Dan Domain</li>

                                                    <li>Tips dan Trick Memilih Perusahaan Hosting</li>

                                                    <li>Cara Menyewa Hosting dan Domain Blog</li>

                                                    <li>Cara Mengakses Hosting Cpanel Anda</li>

                                                    <li>Cara Menginstall Wordpress Blog Anda</li>

                                                    <li>Cara Setup Dan Bersih Wordpress Blog Anda</li>

                                                    <li>Cara Membuat Category Bisnis Blog</li>

                                                    <li>Cara Menginstall Plugin-Plugin Blog</li>

                                                    <li>Cara Setting Plugin All in One SEO Pack</li>

                                                    <li>Cara Setting Plugin Contact 7</li>

                                                    <li>Cara Setting Plugin Akismet Plugin</li>

                                                    <li>Cara Setting Plugin Google XML Sitemap</li>

                                                    <li>Cara Setting Plugin WP Super Cache</li>

                                                    <li>Cara Menginstall Wp Blog Theme Anda</li>

                                                    <li>Cara Membuat Page Blog Bisnis Anda</li>

                                                    <li>Cara Membuat Menu Halaman Blog Bisnis</li>

                                                    <li>Cara Membuat Postingan Blog Bisnis</li>

                                                    <li>Bisnis Yang Paling Populer Di Blog</li>

                                                    <li>Cara Mendaftar di Affiliate Network</li>
                                                    <li>Cara Menambahkan Banner Dan Link Affiliate</li>

                                                    <li>Cara Dan Penjelasan Bisnis Google Adsense</li>

                                                    <li>Cara Mendaftar Program Google Adsense</li>

                                                    <li>Cara dan Penjelasan Berbisnis Solo Ads</li>

                                                    <li>Tangkap Pengunjung Anda Dengan Email Marketing</li>

                                                    <li>Gunakan Strategy Lead Magnet Bisnis</li>

                                                    <li>Tips Memilih Layanan Perusahaan Email Marketing</li>

                                                    <li>Cara Menambah Form Email Di Widget Blog Bisnis</li>

                                                    <li>Cara Promosi Menggunakan Metode Facebook Gratis</li>

                                                    <li>Cara Promosi Menggunakan Metode Iklan Facebook</li>

                                                    <li>Tips Dan Trik Blog Bisnis Jangka Panjang</li>
                                                 </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MENGHASILKAN DUIT DI BLOG</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-9.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp140.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Selamat Datang Di Video Training</li>
                                                    <li>Mengenal Lebih Dekat Tentang Wordpress</li>
                                                    <li>Fitur-fitur Penting DiDalam Wordpress</li>
                                                    <li>Penjelasan Tentang Nama Domain</li>
                                                    <li>Penjelasan Tentang Hosting Wordpress</li>
                                                    <li>Tips Cara Mencari Perusahaan Domain dan Hosting</li>
                                                    <li>Cara Berlangganan Domain Dan Hosting di Niagahoster</li>
                                                    <li>Cara Mengubah Password Hosting Bisnis</li>
                                                    <li>Cara Menginstall Wordpress Menggunakan Cpanel</li>
                                                    <li>Cara Akses dan Ubah Password User</li>
                                                    <li>Penjelasan Tentang Dashboard dan Update WP</li>
                                                    <li>Penjelasan Tentang Post dan Categories</li>
                                                    <li>Penjelasan Tentang Menu Media Wordpress</li>
                                                    <li>Penjelasan Tentang Page vs Post Wordpress</li>
                                                    <li>Penjelasan Tentang Bagian Komentar</li>
                                                    <li>Penjelasan Tentang Appearance dan Edit Theme</li>
                                                    <li>Penjelasan Tentang Fungsi dan Performa Plugin</li>
                                                    <li>Penjelasan dan Cara Membuat User-user Wordpress</li>
                                                    <li>Penjelasan Tentang Menu Import dan Export</li>
                                                    <li>Penjelasan Tentang Setting dan Permalink</li>
                                                    <li>Demo Cara Membersihkan Dan Setup Dasar Wordpress</li>
                                                    <li>Demo Install Plugin Contact Form 7 Dan Membuat Kontak</li>
                                                    <li>Demo Cara Install dan Setup Plugin All in One SEO Pack</li>
                                                    <li>Demo Cara Install dan Setup Plugin Google XML Sitemaps</li>
                                                    <li>Demo Cara Install dan Setup Plugin WP Super Cache</li>
                                                    <li>Demo Cara Install dan Setup Plugin TinyMCE Advanced</li>
                                                    <li>Demo Cara Install dan Setup Plugin EWWW Image Optimizer</li>
                                                    <li>Cara Membuat Halaman Privacy Policy</li>
                                                    <li>Cara Membuat Halaman About Me</li>
                                                    <li>Cara Membuat Menu Di Halaman Wordpress</li>
                                                    <li>Cara Membuat Post dan Add Image Wordpress</li>
                                                    <li>Setup dan Finishing Blog Website Wordpress Anda</li>
                                                    <li>BONUS : Cara Menambahkan Pixel Facebook Ke Wordpress</li>
                                                    <li>BONUS Cara Membuat Animasi Banner Gif Ke Wordpress</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>TUTORIAL WORDPRESS (WP)</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-10.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Mengapa dan Keunggulan Wordpress?</li>

                                                    <li>Apa Itu Domain dan Hosting?</li>

                                                    <li>Cara Membeli dan Mensetup Domain.</li>
                                                    <li>Cara Membeli dan Mensetup.</li>

                                                    <li>Cara Menginstall Wordpress.</li>

                                                    <li>Cara Membersihkan dan Setup Wordpress.</li>

                                                    <li>Install Responsive Wordpress Theme.</li>

                                                    <li>Install Most Plugin Wordpress.</li>

                                                    <li>Setup SEO, Contact, Akismet, Muliticons.</li>

                                                    <li>Cara Membuat Postingan dan Page.</li>

                                                    <li>Cara Membuat Banner Link.</li>

                                                    <li>Cara Mensetup Widget.</li>

                                                    <li>Finishing Website Wordpress.</li>
                                                    <li>...dan masih banyak lagi!</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>DATANGKAN PROFITS DARI WORDPRESS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-11.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp110.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Overview, Mindset dan Goal 1,000 dalam 2 hari</li>

                                                    <li>Teknik Mencari dan Memilih Market Yang Profits</li>

                                                    <li>Membuat Fans Page Facebook Yang Profesional</li>

                                                    <li>Update dan Finishing Fans Page Facebook</li>

                                                    <li>Menggunakan Facebook Insight Market Update</li>

                                                    <li>Strategy Promosi Menggunakan Traffic Gratis</li>

                                                    <li>Setup Metode Pembayaran Menggunakan Kartu Kredit</li>

                                                    <li>Setup Metode Pembayaran Menggunakan ATM BERSAMA</li>

                                                    <li>Demo Video Iklan Target Spesifik Market</li>

                                                    <li>Yes, Hasil Iklan Kita 1,000 Like Per Hari</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Affiliate</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan CPA Marketing</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Adsense</li>

                                                    <li>Monetize Fans Page Facebook Menggunakan Solo Ads</li>

                                                    <li>Evaluasi, Monitoring dan Tingkatkan Konversi Bisnis</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>1000 FANS DALAM 2 HARI</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-12.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp150.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Apa Itu Sales Letter?</li>

                                                    <li>Anatomi Dari Sales Letter</li>

                                                    <li>Cara Meningkatkan Bisnis Dengan Sales Letter</li>

                                                    <li>Cara Membuat Video Sales Letter (animoto.com)</li>

                                                    <li>Cara Mendapatkan Testimoni Yang Convert</li>

                                                    <li>Demo Menggunakan Domain dan Hosting</li>

                                                    <li>Demo Mensetup Sales letter</li>

                                                    <li>Demo Mensetup Funnel Sistem</li>

                                                    <li>Demo Menjadikan Semuanya Online</li>

                                                    <li>Demo Mendapatkan Traffic Gratis</li>

                                                    <li>Demo Mendapatkan Traffic Facebook Ads</li>

                                                    <li>Tips dan Trik Meningkatkan Penjualan</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MAHIR JADI MASTER SALE LETTER</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-13.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp180.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview Menjalankan Bisnis Toko Online</li>

                                                        <li>Mindset Yang Harus Dipunyai Pebisnis Toko Online</li>

                                                        <li>Cara Termudah Mencari Supplier Terpercaya</li>

                                                        <li>Menyiapkan Toko Online Website Anda</li>

                                                        <li>Cara Mencari dan Menyewa Hosting</li>

                                                        <li>Cara Mencari dan Membeli Domain</li>

                                                        <li>Cara Mensetup dan Install Website Wordpress</li>

                                                        <li>Cara Membersihkan Website Wordpress Anda</li>

                                                        <li>Cara Mensetup dan Install Plugin Wordpress</li>

                                                        <li>Cara Menginstall Theme Toko Online</li>

                                                        <li>Cara Menambahkan Produk Toko Online</li>

                                                        <li>Cara Setup Harga dan Deskripsi Produk</li>

                                                        <li>Finishing Setup Toko Online Anda</li>

                                                        <li>Cara Mendapatkan Pengunjung dari Media Sosial</li>

                                                        <li>Cara Membuat Group Facebook Bisnis Toko Online</li>

                                                        <li>Cara Membuat Fans Page Bisnis Toko Online</li>

                                                        <li>Cara Mendapatkan Pengunjung dari Iklan Facebook</li>

                                                        <li>Strategy Meningkatkan Income Bisnis Toko Online Anda</li>

                                                        <li>List Hot Market Bisnis Toko Online</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>CARA MUDAH BERBISNIS TOKO ONLINE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-1.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp145.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Mengapa Anda Harus Mulai Membuat Blog?</li>

                                                        <li>Jenis-Jenis Blog Dengan Berbagai Market</li>

                                                        <li>Teknik Memilih Domain dan Hosting Blog</li>

                                                        <li>Teknik Menginstall Wordpress Blog</li>

                                                        <li>Teknik Membersihkan dan Setup Blog</li>

                                                        <li>Teknik Menginstall Plugin-plugin Blog</li>

                                                        <li>Teknik Menginstall Profesional Theme</li>

                                                        <li>Cara Membuat Halaman-halaman Penting Blog</li>

                                                        <li>Cara Membuat Memposting Konten di Blog</li>

                                                        <li>Cara Menambahkan Video Youtube Ke Blog</li>

                                                        <li>Cara Menambahkan Banner Affiliate Ke Blog</li>

                                                        <li>Cara Menambahkan Link Social Media Ke Blog</li>

                                                        <li>Cara Membuat Perangkap Pengunjung Blog</li>

                                                        <li>Cara Monetize Blog Dengan Bisnis Affiliate</li>

                                                        <li>Cara Monetize Blog Dengan Bisnis Google Adsense</li>

                                                        <li>Cara Monetize Blog Dengan Bisnis Pribadi</li>

                                                        <li>Cara Monetize Blog Dengan Bisnis Solo Ads</li>

                                                        <li>Strategy Mendatangkan Pengunjung Melalui Group Facebook</li>

                                                        <li>Strategy Mendatangkan Pengunjung Melalui Facebook Page</li>

                                                        <li>Strategy Mendatangkan Pengunjung Melalui Iklan Facebook</li>

                                                        <li>Strategy Mendatangkan Pengunjung Melalui Bing Ads</li>

                                                        <li>Strategy Mendatangkan Pengunjung Melalui Google Adwords</li>

                                                        <li>Tips dan Trik Meningkatkan Income Blog Anda</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MENJADI RAJA NGEBLOG</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-15.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Selamat Datang Di Training Email Marketing</li>

                                                        <li>Apa Itu Email Marketing dan Keuntungannya</li>

                                                        <li>Penjelasan Cara Bekerjanya Email Marketing</li>

                                                        <li>Cara Memilih Produk Bisnis Diinternet</li>

                                                        <li>Cara memilih Autoresponder Lokal Indonesia</li>

                                                        <li>Cara Daftar Autoresponder Profit Sender</li>

                                                        <li>Pengenalan Menu-Menu di Profit Sender</li>

                                                        <li>Video Panduan Cara Membuat List Autoresponder</li>

                                                        <li>Video Panduan Cara Membuat Custom Field/Personalisasi</li>

                                                        <li>List Setting dan Video Pengaturan List Autoresponder</li>

                                                        <li>Video Panduan Membuat Signup / Optin Form</li>

                                                        <li>Cara Membuat Follow Up / Autoresponder</li>

                                                        <li>Panduan Cara Membuat Campaign/Broadcast</li>

                                                        <li>Test dan Finishing Sistem Autoresponder Anda</li>

                                                        <li>Promosi Menggunakan Social Media</li>

                                                        <li>Promosi Menggunakan Iklan facebook</li>

                                                        <li>Tips dan Trik Long Term Bisnis</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>BELAJAR EMAIL MARKETING</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-16.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp130.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class="elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Apa Sih Bisnis Online Itu?</li>
                                                        <li>Bagaimana Cara Anda Bisa Menghasilkan Uang?</li>
                                                        <li>Teknik Dan Rahasia Membangun Bisnis Online</li>
                                                        <li>Cara Membangun Kerajaan Bisnis Affiliasi</li>
                                                        <li>Cara Membangun Kerajaan Bisnis CPA</li>
                                                        <li>Cara Membangun Kerajaan Bisnis MLM</li>
                                                        <li>Cara Membangun Kerajaan Bisnis Ecommers / Toko Online</li>
                                                        <li>Cara Membangun Kerajaan Bisnis Publisher / Adsense</li>
                                                        <li>Cara Membangun Kerajaan Bisnis Solo Ads</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Bisnis Anda</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Melalui Facebook</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Melalui Facebook Group</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Melalui Twitter</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Melalui Google Plus</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Iklan Facebook</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Iklan Google Adwords</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Iklan Bing</li>
                                                        <li>Cara Ampuh Mendatangkan Pengunjung Iklan Kliksaya.com</li>
                                                        <li>Strategi Advance Menyimpan Data Costumer Melalui Email Marketing</li>
                                                        <li>Strategi Advance Menyimpan Data Costumer Melalui Group / Forum</li>
                                                        <li>Tips Dan Trik Meningkatkan Penghasilan Bisnis Online Anda</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>KIAT SUKSES BISNIS ONLINE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-2.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp160.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Selamat Datang Di Training Email Marketing</li>
                                                        <li>Penjelasan dan Konsep Email Marketing</li>
                                                        <li>Penjelasan dan Pentingnya Lead Magnet</li>
                                                        <li>Cara Membuat Lead Magnet (Camtasia Studio dan PDF)</li>

                                                        <li>Komponen-Komponen Penting Squeeze Page</li>
                                                        <li>Persiapan Membuat Squeeze Page (Hosting, Domain, Wordpress)</li>
                                                        <li>Demo Membuat Squeeze Page Menggunakan InstaBuilder</li>

                                                        <li>Cara Daftar dan Registrasi Ke Kirim.Email</li>
                                                        <li>Fitur-fitur dan Member Area Review Kirim.Email</li>
                                                        <li>Cara Membuat Email Konfirmasi Subcriber</li>
                                                        <li>Cara Membuat Follow-Up Otomatis Email</li>
                                                        <li>Cara Membuat Form Optin Menggunakan InstaBuilder</li>
                                                        <li>Cara Mentest Sistem Agar Bekerja Baik</li>

                                                        <li>Promosi Menggunakan Facebook Ads</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MASTER EMAIL MARKETING</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-18.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Cara Daftar Gmail</li>

                                                        <li>Cara Registrasi Blogger Dan Update Profil</li>

                                                        <li>Cara Buat Nama dan Edit Theme Blogger</li>
                                                        <li>Cara Membuat Postingan Terbaru</li>

                                                        <li>Cara Menambah Gambar dan Link</li>

                                                        <li>Cara Menambahkan Video Youtube</li>

                                                        <li>Overview Pengaturan Blogger</li>

                                                        <li>Cara Menggunakan Favicon Blog</li>

                                                        <li>Cara Mengedit Navbar</li>

                                                        <li>Cara Menambahkan Banner</li>

                                                        <li>Cara Menglinkkan Ke Media Social.</li>

                                                        <li>Follow Email Pengunjung Blog.</li>

                                                        <li>Cara Submit Blog Ke Google SEO.</li>
                                                        <li>...dan masih banyak lagi!</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>GO PRO BLOGGER</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-19.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp119.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Selamat Datang di Training Membuat Landing Page</li>
                                                        <li>Tipe-tipe Landing Page Bisnis Di Internet</li>
                                                        <li>Hal Penting Dimiliki Sebelum Membuat Landing Page</li>
                                                        <li>Penjelasan Tentang Domain dan Hosting</li>
                                                        <li>Rekomendasi Penyedia Hosting dan Domain Indonesia</li>
                                                        <li>Rekomendasi Penyedia Hosting dan Domain Internasional</li>
                                                        <li>Cara Mulai dan Menginstall Wordpress Bisnis</li>
                                                        <li>Cara Setup dan Membersihkan Wordpress</li>
                                                        <li>Full Overview Plugin Landing Page Instabuilder</li>
                                                        <li>Member Area Tour Instabuilder Area</li>
                                                        <li>Cara Install Menggunakan FTP Cpanel</li>
                                                        <li>Cara Install Menggunakan Dashboard Wordpress</li>
                                                        <li>Cara Mengaktifkan Menggunakan License Key</li>
                                                        <li>Menu-menu Instabuilder di Dashboard Wordpress</li>
                                                        <li>Demo Membuat Sales Page Produk Digital</li>
                                                        <li>Demo Membuat Download Page Bisnis</li>
                                                        <li>Demo Membuat Halaman Squeeze Page</li>
                                                        <li>Demo Membuat Halaman Webinar Bisnis</li>
                                                        <li>Penutup dan Strategi Bisnis Jangka Panjang</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MUDAH MEMBANGUN LANDING PAGE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-20.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp130.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Penjelasan Funnel Sistem</li>
                                                        <li>Penjelasan Squeeze Page + Lead Magnet</li>
                                                        <li>Membuat Edukasi Page</li>
                                                        <li>Membuat Sales Page</li>
                                                        <li>Demo Membuat Squeeze Page part 1 : Campaign</li>
                                                        <li>Demo Membuat Squeeze Page part 2 : Autoresponder</li>
                                                        <li>Demo Membuat Squeeze Page part 3 : Setup Squeeze Page</li>
                                                        <li>Promosi Ke Media Sosial</li>
                                                        <li>Promosi Iklan Facebook</li>
                                                        <li>Tips dan Trik Long Term Bisnis</li>
                                                        <li>BONUS : Study Kasus Funnel Page Bisnis Digital</li>
                                                        <li>BONUS : Study Kasus Funnel Page List Building</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MEMBANGUN FUNNEL PROFITS Kamu</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-3.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp155.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                 <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                    <li>Selamat Datang di Google Ads Training</li>
                                                    <li>Keunggulan Google Ads Bandingkan Facebook Ads</li>
                                                    <li>Persiapan Sebelum Daftar di Google Ads</li>
                                                    <li>Struktur dan Level Iklan Google Ads</li>
                                                    <li>Cara Membuat Akun Google Ads</li>
                                                    <li>Tipe-tipe Iklan Google Ads</li>
                                                    <li>Demo Beriklan Menggunakan ATM Transfer</li>
                                                    <li>Cara Menghubungi Pusat Bantuan Google</li>
                                                    <li>Overview Dashboard Google Ads</li>
                                                    <li>Cara Mencari Jumlah Market Menggunakan Keyword Planner</li>
                                                    <li>Demo Iklan Google Search Engine (SEM)</li>
                                                    <li>Demo Iklan Youtube Ads</li>
                                                 </ol>   
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>JADI JAGO NGIKLAN GOOGLE ADS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-22.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp120.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Pemahaman Dasar Beriklan Internet Digital</li>

                                                        <li>Perkenalan Tentang Iklan Google Adwords</li>

                                                        <li>Perbedaan Google Adwords dan Google Adsense</li>

                                                        <li>Perbedaan Google Adwords dan SEO</li>

                                                        <li>Kelebihan Menggunakan Iklan Google Adwords</li>

                                                        <li>Cara Membuat Akun Gmail Anda</li>

                                                        <li>Cara Membuat Akun Google Adwords</li>

                                                        <li>Cara Membuat Kampanye Iklan Pertama</li>

                                                        <li>Metode Pembayaran Menggunakan Kartu Kredit</li>

                                                        <li>Metode Pembayaran Menggunakan Transfer Bank</li>

                                                        <li>Metode Pembayaran Menggunakan Paypal</li>

                                                        <li>Cara Mencari Kata Kunci Google Keyword Planner</li>

                                                        <li>Brainstorming Persiapan Iklan Google Adwords</li>

                                                        <li>Demo Iklan Menggunakan Search Network</li>

                                                        <li>Demo Iklan Menggunakan Display Network</li>

                                                        <li>Hasil Dari Demo Iklan Adwords Kita</li>

                                                        <li>Tips Sukses Jangka Panjang Ber-Iklan Adwords</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>BANJIR UANG DI GOOGLE ADWORDS</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-4.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Apa itu Product Creator?</li>
                                                        <li>Keuntungan Menjadi Product Creator</li>
                                                        <li>Persiapan Dan Cheklist Dalam Merilis Produk</li>
                                                        <li>Cara Mencari Whilelabel dan PLR Product</li>
                                                        <li>Cara Memodifikasi dan Membuat Produk</li>
                                                        <li>Cara Membuat Sales Page</li>
                                                        <li>Cara Membuat Order Page</li>
                                                        <li>Cara Membuat Konfirmasi Page</li>
                                                        <li>Cara Membuat Download Page</li>
                                                        <li>Persiapan Joint Venture Affiliate (JV)</li>
                                                        <li>Pembuatan Email Marketing</li>
                                                        <li>Pembuatan Halaman Bonus</li>
                                                        <li>Pembuatan Hadiah Kompetisi</li>
                                                        <li>Pembuatan Promosi Facebook Ads</li>
                                                        <li>Kapan Timing Rilis Yang Tepat?</li>
                                                        <li>Cara Memotivasi Affiliate</li>
                                                        <li>Tips dan Trik Bisnis Jangka Panjang</li>
                                                        <li>Penutup dan Tanya-jawab</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>SUKSES RILIS PRODUK</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-23.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp160.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Selamat Datang di Youtube Adsense Training</li>
                                                        <li>Cara Membuat Akun Gmail</li>
                                                        <li>Cara Membuat Akun Youtube Channel</li>
                                                        <li>Cara Customize Akun Youtube Channel</li>
                                                        <li>Membuat Video Menggunakan Camtasia</li>
                                                        <li>Membuat Video Menggunakan Filmora</li>
                                                        <li>Cara Upload Video ke Channel Youtube</li>
                                                        <li>Cara Mendaftar Akun Google Adsense</li>
                                                        <li>Cara Verifikasi dan Mendapatkan PIN</li>
                                                        <li>Cara Setting Pembayaran Google Adsense</li>
                                                        <li>Cara Meningkatkan Subscriber Channel Youtube</li>
                                                        <li>BONUS Meningkatkan Subsriber Menggunakan Iklan Facebook</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>YOUTUBE ADSENSE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-25.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp125.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview Teknik Dan Strategi Agar Video Viral</li>

                                                        <li>Alat-alat Yang Dibutuhkan Untuk Membuat Video</li>

                                                        <li>Jenis-Jenis Video Yang Ada Di Youtube</li>

                                                        <li>Cara Mendaftar Akun Gmail dan Youtube</li>

                                                        <li>Cara Setup Profil Dihalaman Profil Channel</li>

                                                        <li>Cara Mendownload Video Youtube</li>

                                                        <li>Cara Membuat Video Youtube Dengan Movie Maker</li>

                                                        <li>Cara Mengupload Video Ke Channel Youtube</li>

                                                        <li>Penjelasan Tentang SEO Rangking #1 Youtube</li>

                                                        <li>Riset Kata Kunci Menangkap Traffic Video</li>

                                                        <li>Teknik Optimisasi SEO Onpage Video</li>

                                                        <li>Teknik Optimisasi SEO Offpage Video</li>

                                                        <li>Teknik dan Strategi Agar Video Menjadi Viral</li>

                                                        <li>Teknik Promosi Menggunakan Media Sosial</li>

                                                        <li>Teknik Promosi Menggunakan Iklan Facebook</li>

                                                        <li>Teknik Promosi Menggunakan Google Adwords</li>

                                                        <li>Tips dan Trik Meningkatkan Income Bisnis</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MEMBANGUN VIRAL DI YOUTUBE</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-5.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp120.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel"></div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>MASTER SEO</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-27.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp150.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29d0f90b" data-id="29d0f90b" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Overview dan Selamat Datang di Training</li>
                                                        <li>Apa Itu Elementor Landing Page?</li>
                                                        <li>Cara Menginstall Wordpress V5</li>
                                                        <li>Cara Membersihkan Wordpress V5</li>
                                                        <li>Cara Menginstall dan Aktivasi</li>
                                                        <li>Perbedaan Free dan Pro Version</li>
                                                        <li>Cara Setup dan Elementor Settings</li>
                                                        <li>Cara Navigasi Elementor Editor</li>
                                                        <li>Cara Setup Header &amp; Footer Limitation</li>
                                                        <li>Cara Menambahkan &amp; Setting Halaman</li>
                                                        <li>Cara Drag-Drop Sections dan Columns</li>
                                                        <li>Cara Drag-Drop Basic Menu Elementor</li>
                                                        <li>Cara Drag-Drop Pro Versi Elementor</li>
                                                        <li>Cara Drag-Drop Fasilitas Blocks</li>
                                                        <li>Cara Drag-Drop Fasilitas Page Builder</li>
                                                        <li>Menggunakan Fasilitas Export dan Import</li>
                                                        <li>Video Update dan Support</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-2b0bf69c elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="2b0bf69c" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>ELEMENTOR TRAINING</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-47ec49df elementor-widget elementor-widget-image" data-id="47ec49df" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="577" height="433" src="https://duniaundercover.files.wordpress.com/2021/04/1-28.png" class="attachment-full size-full">                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4f890e8a elementor-widget elementor-widget-heading" data-id="4f890e8a" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp120.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div class=" elementor-container elementor-column-gap-default readmore markreadmore">
                                        <div class=" elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-db46edb" data-id="db46edb" data-element_type="column" >
                                            <div class="elementor-widget-wrap elementor-element-populated" id="parentpanel">
                                                <div class="hover-panel">
                                                    <p style="text-align: center;">
                                                        <b>INI YANG AKAN KAMU DAPATKAN !</b>
                                                    </p>
                                                 <ol>
                                                        <li>Selamat Datang di Training Wordpress V5</li>
                                                        <li>Penjelasan Tentang Hosting</li>
                                                        <li>Penjelasan Tentang Domain</li>
                                                        <li>Demo Cara Registrasi Domain dan Hosting</li>
                                                        <li>Cara Install Wordpress Versi 5</li>
                                                        <li>Penjelasan Dashboard Wordpress Versi 5</li>
                                                        <li>Cara Membersihkan dan Mensetup Wordpress</li>
                                                        <li>Cara Membuat Kategori Postingan</li>
                                                        <li>Cara Setting Plugin Google XML Sitemaps</li>
                                                        <li>Cara Setting Plugin All in One SEO Pack</li>
                                                        <li>Cara Membuat Page Wordpress Versi 5</li>
                                                        <li>Cara Setting Plugin All 404 Redirect to Homepage</li>
                                                        <li>Cara Membuat Post di Wordpress Versi 5</li>
                                                        <li>Cara Mengubah Tampilan Wordpress Versi 5</li>
                                                        <li>Penutup dan Tanya-jawab</li>
                                                    </ol>
                                                </div>
                                                <div class="elementor-element elementor-element-29d9c6ca elementor-view-stacked elementor-vertical-align-middle elementor-shape-circle elementor-position-top elementor-widget elementor-widget-icon-box" data-id="29d9c6ca" data-element_type="widget" data-widget_type="icon-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-icon-box-wrapper">
                                                            <div class="elementor-icon-box-icon">
                                                                <span class="elementor-icon elementor-animation-">
                                                                <i aria-hidden="true" class="fas fa-star"></i>           </span>
                                                            </div>
                                                            <div class="elementor-icon-box-content">
                                                                <h3 class="elementor-icon-box-title">
                                                                    <span>WORDPRESS VERSI 5</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4ff4e825 elementor-widget elementor-widget-image" data-id="4ff4e825" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img width="1280" height="1024" src="https://duniaundercover.files.wordpress.com/2021/04/1-29.png" class="attachment-full size-full">                                 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3fd73d67 elementor-widget elementor-widget-heading" data-id="3fd73d67" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 style="font-size:25px"> SENILAI <span style="color:red;text-decoration:line-through">Rp100.000</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- batas -->
                                    <div style="text-align: center;">
                                        <br>
                                        <a style="background: #b50101;color: white;padding: 4px;border-radius: 5px;" href="#readmoretop" id="readmorehide" onclick="return readmore()"><i class="fa fa-arrow-down"></i> Lihat 21 E-Course lainya</a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-78e7657f elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78e7657f">
                   <div class="elementor-background-overlay"></div>
                   <div class="elementor-container elementor-column-gap-wide">
                      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12df3f9c" data-id="12df3f9c" data-element_type="column">
                         <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1e89781a elementor-widget elementor-widget-heading" data-id="1e89781a" data-element_type="widget" data-widget_type="heading.default">
                               <div class="elementor-widget-container">
                                  <p class="elementor-heading-title elementor-size-default">Alasan KENAPA HARUS JOIN</p>
                               </div>
                            </div>
                            <div class="elementor-element elementor-element-757641ec elementor-widget elementor-widget-heading" data-id="757641ec" data-element_type="widget" data-widget_type="heading.default">
                               <div class="elementor-widget-container">
                                  <p class="elementor-heading-title elementor-size-default">RASAKAN SEMUA MANFAAT SETELAH INI KARENA INI LAH UNIKNYA DI REMOTEBISNIS</p>
                               </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-21d862ba elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="21d862ba" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-613be78c" data-id="613be78c" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-3ad1faff elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="3ad1faff" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-comment"></i>
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">Free TOOLS WA BROADCAST</p>
                                                    <p class="elementor-image-box-description">Tahu kan susahnya kirim pesan ke banyak no WA ? dan dengan fitur ini kirim pesan kebanyak no WA makin Mudah</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3fac0aed" data-id="3fac0aed" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-d358937 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="d358937" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-list-ol"></i>
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">900+ Data Supplier</p>
                                                    <p class="elementor-image-box-description">Mau jualan Produk Fisik apa aja semua supplier ada di REBI, jadi mau jualan produk Digital atau Fisik semua ada di REBI</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-77fc4dc9" data-id="77fc4dc9" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-61454cff elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="61454cff" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-bookmark"></i>
                                                 
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">EBOOK PREMIUM</p>
                                                    <p class="elementor-image-box-description">Saya pun sudah menyiapkan ebook premium yang bisa membantu Anda dalam Menunjang Bisnis Kamu</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-6bba47fe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6bba47fe" data-element_type="section">
                               <div class="elementor-container elementor-column-gap-default">
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-11d85181" data-id="11d85181" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-b81a4e8 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="b81a4e8" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-check"></i>
                                                 
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">Komisi 100%</p>
                                                    <p class="elementor-image-box-description">Intinya jika ada member join via link afiliasi Kamu 100% komisi untuk Kamu dan Sudah Balik Modal deh, akses dapat selamanya & modal sudah balik</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3fda77a0" data-id="3fda77a0" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-13aed1c2 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="13aed1c2" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-user"></i>
                                                 
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">Private Deep Konsultasi</p>
                                                    <p class="elementor-image-box-description">Konsultasi hingga teknis dalamnya? apapun seputar bisnis bisa kamu tanyakan disini</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                   <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3fda77a0" data-id="3fda77a0" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-13aed1c2 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="13aed1c2" data-element_type="widget" data-widget_type="image-box.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-image-box-wrapper">
                                                 <i class="c-white fas fa-2x fa-code"></i>
                                                 
                                                 <div class="elementor-image-box-content">
                                                    <p class="elementor-image-box-title">PASANG CODE PIXEL</p>
                                                    <p class="elementor-image-box-description">Kamu Bisa pasang Kode Pixel untuk setiap landingpage REBI, dengan kata lain landing page ber Referal Kamu akan merekam semua aktivitas di Landingpage Rebi ke Pixel kamu </p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                         </div>
                      </div>
                   </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-fecb4c6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fecb4c6" data-element_type="section" >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7f575352 elementor-widget elementor-widget-heading" data-id="7f575352" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                               <p class="elementor-heading-title elementor-size-default">ok, kalo begitu</p>
                            </div>
                            </div>
                            <div class="elementor-element elementor-element-587b3120 elementor-widget elementor-widget-heading" data-id="587b3120" data-element_type="widget" data-widget_type="heading.default">
                               <div class="elementor-widget-container">
                                  <p class="elementor-heading-title elementor-size-default">E-COURSE INI COCOK BUAT SIAPA EMANG ? </p>
                               </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3fab93ac elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3fab93ac" data-element_type="section" >
                               <div class="elementor-container elementor-column-gap-wider">
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f78829e" data-id="4f78829e" data-element_type="column" >
                                     <div class="elementor-widget-wrap">
                                     </div>
                                  </div>
                                  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1186d8e5" data-id="1186d8e5" data-element_type="column">
                                     <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4b04d836 elementor-widget elementor-widget-text-editor" data-id="4b04d836" data-element_type="widget" data-widget_type="text-editor.default">
                                           <div class="elementor-widget-container">
                                              <div class="elementor-text-editor elementor-clearfix">
                                                 <p>INI SANGAT MEMBATU ANDA PARA</p>
                                              </div>
                                           </div>
                                        </div>
                                         
                                        <div class="elementor-element elementor-element-8e64672 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8e64672" data-element_type="widget" data-widget_type="icon-list.default">
                                           <div class="elementor-widget-container">
                                              <ul class="elementor-icon-list-items">
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">DROPSHIPER/RESELLER</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">AFFILIATE MARKETING/PENJUAN PRODUK DIGITAL</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">BARU MULAI BISNIS / ORANG AWAM</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">MAU BISNIS BELUM NEMU PRODUK/SUPPLIER</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">BISNI OWNER</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">DIGITAL MARKETING</span>
                                                 </li>
                                                 <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="fas fa-check"></i>                     </span>
                                                    <span class="elementor-icon-list-text">PENJUAL ONLINE</span>
                                                 </li>
                                              </ul>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-3cac12d2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3cac12d2" data-element_type="section" >
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-438d53f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="438d53f3" data-element_type="section" >
                            </section>
                            </div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-661ff4b4" data-id="661ff4b4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-12411da elementor-widget elementor-widget-menu-anchor" data-id="12411da" data-element_type="widget" data-widget_type="menu-anchor.default">
                                    <div class="elementor-widget-container">
                                        <div id="daftar" class="elementor-menu-anchor"></div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6ffba8ca elementor-widget elementor-widget-heading" data-id="6ffba8ca" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">inilah investasi terbaik Kamu untuk membangun bisnis digital</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3436c24 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3436c24" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                             
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Katakan Selamat tinggal <span style="color: gold">BONCOS</span></span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Bisa Langsung <span style="color: gold">Praktek</span> Bukan Cuma TEORI</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">E-Course dan E-Book yang akan Memaksimalkan Profit Kamu</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Sekarang Tidak perlu takut & pusing lagi dalam <span style="color: gold">Scale Up Bisnis</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text"><span style="color: gold">Kini Kamu satu langkah Lebih mudah meraih sukses di bisnis online</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Lebih Praktis Mau Jualan Produk Apapun Tersedia</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Fb & IG Masih menjadi Sosial media teratas dan kamu akan belajar <span style="color:gold">Mendapatkan Pundi Pundi uang dari sini</span></span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-check"></i>                </span>
                                                <span class="elementor-icon-list-text">Kini  <span style="color:gold">Puluhan</span> hingga <span style="color:gold">Ratusan</span> juga Menanti di Bisnis Onlinemu</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7d34757b elementor-widget elementor-widget-text-editor" data-id="7d34757b" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p>Bayangkan semua kebutuhan bisni online kamu ada disini, produk digital, supplier, konten ads, dan pastinya E-Course yang melimpah, mau sampe kapan pikir-pikirnya? sekarang join supaya tidak nyesel selamanya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34c931b9" data-id="34c931b9" data-element_type="column" >
                            <div class="elementor-widget-wrap elementor-element-populated" id="price">
                                <div class="elementor-element elementor-element-10b93651 elementor-widget elementor-widget-text-editor" data-id="10b93651" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p> Tenang saja Kamu Tidak Perlu Berinvestasi Senilai <span style="color: red">Rp4.028.000 (Total Biaya Ecourse)</span> Karena ini dalam rangka Launching</p>
                                            <p>Ada Investasi Spesial Ini bukan diskon atau Promo tapi PENGURANGAN, bayangkan </p>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="elementor-element elementor-element-2afc8b6e elementor-widget elementor-widget-text-editor" data-id="2afc8b6e" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p style="text-decoration: line-through;color: red">Rp255.000</p>
                                            <p style="font-size: 20px; color: gold">CUMA</p>
                                            <p> Rp 199k</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2afc8b6e elementor-widget elementor-widget-text-editor" data-id="2afc8b6e" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                            <p style="font-size: 15px; color: red; text-align: center;">KAMU Dapat SEMUANYA</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-78881a14 elementor-align-justify elementor-widget elementor-widget-button" data-id="78881a14" data-element_type="widget" data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a href="https://member.remotebisnis.com/daftar.php" class="elementor-button-link c-black elementor-button elementor-size-xl elementor-animation-pulse" role="button">
                                            <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Daftar Sekarang</span>
                                            </span>
                                            </a>
                                            <br>
                                            <br>
                                            <p style="font-size: 15px; font-style: italic;color: red">*Silahkan Anda Cari E-Course dengan Investasi Seminim ini, Komisi 100% dan fitur selengkap ini, JIKA BISA, Anda Gratis Join !</p>
                                            <br>
                                             
                                            <!-- <p style="text-align: center;font-size: 18px; color: black;font-weight: bold">NB: Promo berlaku hari ini , </p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-52e15fe4 elementor-widget elementor-widget-image" data-id="52e15fe4" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <img width="374" height="21" src="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/Section-027-Pricing-Img-Bank.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://www.impresifcopywriting.com/wp-content/uploads/2021/03/Section-027-Pricing-Img-Bank.png 374w, https://www.impresifcopywriting.com/wp-content/uploads/2021/03/Section-027-Pricing-Img-Bank-300x17.png 300w" sizes="(max-width: 374px) 100vw, 374px" />                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2ee78442 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ee78442" data-element_type="section" >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f379e7b" data-id="f379e7b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-1fe4d14f elementor-widget elementor-widget-heading" data-id="1fe4d14f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">KAMU PASTI <font color="gold">RUGI</font> !</p>
                                    </div>
                                    <p style="color: white">*Ini Halaman memberarea Rebi</p>
                                    <img src="https://duniaundercover.files.wordpress.com/2021/07/dashboarda-memerbarea.jpeg" alt="">
                                </div>
                                <div class="elementor-element elementor-element-3922e61e elementor-widget elementor-widget-text-editor" data-id="3922e61e" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p>Bayangkan Saja Kamu Rugi Waktu dan Tenaga Jika Tidak Gabung Sekarang, Kami sudah sediakan semua</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-53c31d49 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="53c31d49" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fa fa-exclamation-triangle"></i>                  </span>
                                                <span class="elementor-icon-list-text">Semakin Menunda Semakin lama Kamu Sukses</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fa fa-exclamation-triangle"></i>                  </span>
                                                <span class="elementor-icon-list-text">Kamu akan Hemat waktu dan tenaga dalam membangun Bisnis Online</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fa fa-exclamation-triangle"></i>                  </span>
                                                <span class="elementor-icon-list-text">Mau jualan produk digital bisa jadi afiliasi rebi sistem kami sediakan</span>
                                            </li>
                                            <li class="elementor-icon-list-item">
                                                <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fa fa-exclamation-triangle"></i>                  </span>
                                                <span class="elementor-icon-list-text">Mau jualan produk fisik butuh supplier ? kami sediakan kumpulan ratusan supplier</span>
                                            </li>
                                             
                                        </ul>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5c1c0f9b elementor-widget elementor-widget-image" data-id="5c1c0f9b" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <img width="626" height="333" src="https://st3.depositphotos.com/12985790/i/600/depositphotos_173800728-stock-photo-shocked-woman.jpg" class="attachment-full size-full">                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="elementor-element elementor-element-74348014 elementor-align-center elementor-widget elementor-widget-button" data-id="74348014" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="#price" class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" role="button">
                                    <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon elementor-align-icon-left">
                                    <i aria-hidden="true" class="fas fa-sign-in-alt"></i>       </span>
                                    <span class="elementor-button-text">DAFTAR SEKARANG</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2dfd6544 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2dfd6544" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;arrow&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 10" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M360 0L350 9.9 340 0 0 0 0 10 700 10 700 0"/>
                        </svg>
                    </div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f5036be" data-id="4f5036be" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-107fae27 elementor-widget elementor-widget-heading" data-id="107fae27" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">faq</p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-68274e62 elementor-widget elementor-widget-heading" data-id="68274e62" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">KURANG JELAS ? MUNGKIN INI PERTANYAAN KAMU</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-364b228e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="364b228e" data-element_type="section" >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29a6625d" data-id="29a6625d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-766e785b elementor-widget elementor-widget-heading" data-id="766e785b" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">INTINYA APA SI E-COURSE INI ?</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5a7c617a elementor-widget elementor-widget-text-editor" data-id="5a7c617a" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p>Ok singkatnya seperti ini, Kamu Bisa Belajar Bisnis Digital dan Menjualnya lagi (Afiliasi) dengan komisi 100% dengan harganya seperti Kamu beli E-Course ini dan sistem sudah kami sediakan, seperti landing page, form pendaftaran, MemberArea dll, <br><br><b>NB: Transaksi & Transfer langsung ke No Rek Kamu jadi komisi pasti 100%</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7886a4db elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="7886a4db" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-566998a4 elementor-widget elementor-widget-heading" data-id="566998a4" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">apakah ini lifetime ?</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-24090d2a elementor-widget elementor-widget-text-editor" data-id="24090d2a" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p><span class="frb_features_content">Yups, Pastinya ini 1x seumur hidup dan 24 Jam Akses</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-51b851be elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="51b851be" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-693c6197 elementor-widget elementor-widget-heading" data-id="693c6197" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Seperti apa cara atau prosedur jika kita ingin menjual produk digital ini ? </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3a02dd75 elementor-widget elementor-widget-text-editor" data-id="3a02dd75" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p><span class="frb_features_content">Karena Fitur ini Premium dan khusus untuk Member jadi secara singkat padat dan jelas kamu akan dipandu penggunaanya di MemberArea,, mudah ko.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-693c6197 elementor-widget elementor-widget-heading" data-id="693c6197" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Kalo Ada Yang Join lewat Link Kita apakah ke kita ada notifikasi ?</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3a02dd75 elementor-widget elementor-widget-text-editor" data-id="3a02dd75" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p><span class="frb_features_content">Pastinya ada, dan setiap ada yang join dll akan ada Notifikasi ke email Kamu </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-693c6197 elementor-widget elementor-widget-heading" data-id="693c6197" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Bagaimana saya belajar disini ?</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3a02dd75 elementor-widget elementor-widget-text-editor" data-id="3a02dd75" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p><span class="frb_features_content">REBI merupakan online video course. Jadi Anda bisa mempelajari dengan akses online dari mana saja dan kapan saja. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-693c6197 elementor-widget elementor-widget-heading" data-id="693c6197" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Apakah Saya Harus Memiliki Produk ?</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3a02dd75 elementor-widget elementor-widget-text-editor" data-id="3a02dd75" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                            <p><span class="frb_features_content">Tidak punya juga tidak apa-apa karena REBI telah menyediakan Afiliate dan jika mau jual produk lainya kami menyediakan 900+ database supplier untuk Kamu Jualan dengan Niche Market sesuka hati Kamu</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p style="text-align: center;">Suported & Avaliable</p>
                    <img style="display: block; margin: auto" src="https://belanja.remotebisnis.com/wp-content/uploads/2020/10/footers.png" alt="">
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-65eec766 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="65eec766" data-element_type="section" >
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7cc3ac3c" data-id="7cc3ac3c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-14f3808c elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="14f3808c" data-element_type="widget" data-widget_type="image-box.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-box-wrapper">
                                            <img src="https://remotebisnis.com/wp-content/uploads/2021/04/152213686_246743633777143_6845932286259717524_n.png" width="60px" height="60px">
                                            <div class="elementor-image-box-content">
                                                <p class="elementor-image-box-title">REBI</p>
                                                <p class="elementor-image-box-description">Terbaru Inovasi Digital</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </section>
                 
            </div>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function readmore(){
            $('.markreadmore').removeClass('readmore');
            $('#readmorehide').css('display','none');
        }
    </script>
</html>
<!-- Page generated by LiteSpeed Cache 3.6.4 on 2021-04-16 03:19:11 -->