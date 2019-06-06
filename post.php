<?php
// set API Endpoint and Access Key (and any options of your choice)
$endpoint = 'live';
$access_key = 'e7020752f81fb8528a026e1443a34b62';

// Initialize CURL:
$ch = curl_init('http://apilayer.net/api/'.$endpoint.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
echo $exchangeRates['quotes']['USDINR'] * 10;

?>
