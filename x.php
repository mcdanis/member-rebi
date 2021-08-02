<!DOCTYPE html>
<html>
<body>

<?php
	include_once('setting/koneksi.php');
	include_once('setting/system.php');
	$a=new koneksi();
	$db=$a->hubungkan();
	$sistem=new kontrols($db);

	$tampil = $sistem->tampil_data('list_vidio','*');
		
	foreach ($tampil as $key => $value) {
		// $show = $sistem->getSingleField('list_vidio','');
		$url_components = parse_url($value['link']);
	 	
	 	$id = $value['id'];

		parse_str($url_components['query'], $params);

		// -----------------------------------

		$videoid = $params['v']; // change this
		$apikey = 'AIzaSyBTVfQ7TiDN2EMsdHxBZAuZ1b88ZqzjK00'; // change this

		$link = 'https://www.googleapis.com/youtube/v3/videos?id=' . $videoid . '&key=' . $apikey . '&part=snippet';
		
		$url = $link;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		curl_close($ch);
		$json = json_decode($data, true);
		$judul = $json['items'][0]['snippet']['title'];
		// echo $judul = $json['items'][0]['snippet']['title'];
		// echo var_dump($json);
		$sistem->eksekusi('update list_vidio set judul="'.$judul.'" where id="'.$id.'"');
		// echo $judul.'<br>';
 
	}

 
  
?>
	
</body>
</html>