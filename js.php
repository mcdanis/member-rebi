<form action="?" method="get" accept-charset="utf-8">
    <input type="text" name="q" value="<?php echo @$_GET['q'] ?>">
    <button type="submit">kirim</button>
</form>
<?php
 
if ($_GET['q']) {
    $q = str_replace(' ', '%20', $_GET['q']);
    $ch = curl_init("https://graph.facebook.com/search?type=adinterest&q=[".$q."]&limit=1000&locale=id_ID&access_token=EAAG9AcfNr0gBAJZAkoyYbKJgvQgfgKuna6zADfDJrPEL5GuwtWLmG5sAIe6TdGeQw7iZBSjd8mLmUyt8I9oaTyTeXnredpd2aNvW2ZBjUaZA8gdHHPZBjF7jh4piXVHi1nyaHx21Hmay3I9VyqZAlhZAZAeIBruRDXcoL7e6i6ZCT2Nm0YSa0ycDf");

    // $x= "https://graph.facebook.com/pages/search?interest_list=["Basketball"]&type=adinterestsuggestion&access_token=EAAGgNAnwsYMBAFmS8OO2TAkPoivLIoTiJW69JAEmYcrAFGToA5BrsLAsKSu80zM35sLTIE1VQ6jnfxJpZCiXsy7PyoLI7ljIYlZBrajUz2AqiRGPS9alUOXqkKeBqOH4uSm6uSDoBkTw2FgmHa1yZCgZCvnIH7DZCgpOyxTqsl2SWdZALX2QFcJ54UmZC3U9HYJVRv0ZCr57R9hJyC1USZCh6jPR3Qk7QXVHgzAEGxImWI0mD2rfw2FXW";
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);

    $decode = json_decode($json, true);

    $no=1;
    foreach ($decode['data'] as $key => $value ) {
        $txt = $no++.'. '.$value['name'];
        if (strrpos($value['name'],' ')==true) {
            $txt = '<b>'.$no++.'. '.$value['name'].'</b>';
        }
        echo $txt;
        echo ' - ';
        if ($value['audience_size'] <= 1700000 && $value['audience_size'] >= 450000) {
            echo '<b style="color:blue">'.number_format($value['audience_size']).'</b>';
        }else{
            echo '<b style="color:green">'.number_format($value['audience_size']).'</b>';
        }
        echo '<br>';
        echo implode(" 👉🏽 ", $value['path']);
        echo '<hr>';
        
    } 
}
    
?>