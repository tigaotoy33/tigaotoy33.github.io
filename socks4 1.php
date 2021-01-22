<?php
$directory = '.';
$url  = 'https://api.proxyscrape.com/v2/?request=getproxies&protocol=socks4&timeout=10000&country=all';
$path = $directory.'/socks4.txt';
$fp = fopen($path, 'w');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fp);
$data = curl_exec($ch);
if($data){
 echo 'File backup sudah diterima...';
}
else{
 echo 'Yah... Gagal Mengambil File';
}
curl_close($ch);
fclose($fp);
?>