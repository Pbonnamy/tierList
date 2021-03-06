
<?php

$query= $_GET["query"];

$query=$query . " icon";

$query=urlencode($query);

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,
'https://api.qwant.com/api/search/images?count=1&q='.$query.'&t=images&safesearch=1&locale=fr_FR&uiv=4');
curl_setopt($ch, CURLOPT_USERAGENT,
'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0');

// echo 'https://api.qwant.com/api/search/images?count=1&q='.$query.'&t=images&safesearch=1&locale=fr_FR&uiv=4';

$result = curl_exec($ch);

$result = curl_exec($ch);
$obj = json_decode($result);

echo $obj->data->result->items[0]->thumbnail;

curl_close($ch);

?>
