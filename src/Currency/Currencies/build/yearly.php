<?php
$raw = json_decode(file_get_contents('yearlyExchange.json'));
$final = [];
foreach($raw as $code => $rawData)
{
  $final[$code] = [];
  $data = explode("\n", $rawData);
  foreach($data as $line)
  {
    if(strlen($line) > 4)
    {
      list($year, $bid, $ask) = explode(',', $line);
      $final[$code][$year] = ['bid' => $bid, 'ask' => $ask];
    }
  }
}

file_put_contents('historical.json', json_encode($final));
