<?php

echo '#EXTM3U #EXT-X-VERSION:3 #EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1500000,NAME=720p,RESOLUTION=1280x720
https://etslive-v3-vidio-com-tokenized.akamaized.net/';
echo jembuwt('6299').'/vp9/6299_stream.mpd'."\n";

function jembuwt($aw){
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.vidio.com/live/6299/tokens?type=dash');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: www.vidio.com';
$headers[] = 'Content-Length: 0';
$headers[] = 'Sec-Ch-Ua: ^^';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36';
$headers[] = 'Content-Type: text/plain;charset=utf-8';
$headers[] = 'Accept: */*';
$headers[] = 'Origin: https://www.vidio.com';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.vidio.com/live/6299-bein-1';
$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}
	curl_close($ch);
	$result = json_decode($result, true);
	echo $result['token'];
}
