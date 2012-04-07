<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$content = curl_exec($curl);
$xml = new SimpleXMLElement($content);

//echo '<pre>'.print_r($xml,1).'</pre>';

foreach ($xml->Cube->Cube->Cube as $value) {
    echo $value['currency']." : ".$value['rate']."<br/>";
}
