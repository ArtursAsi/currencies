<?php

namespace App\Services;

use App\Currency;
use DateTime;

class CurrencyService
{
    public static function update()
    {
        $data = file_get_contents('https://www.bank.lv/vk/ecb_rss.xml');
        $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);


        for ($i = 0; $i < count($array['channel']['item']); $i++) {

            $currencies = explode(' ', trim($array['channel']['item'][$i]['description'],' '));
            $value = strtotime($array['channel']['item'][$i]['pubDate']);
            $date = DateTime::createFromFormat('U', $value);

            for ($j = 0; $j < count($currencies); $j+=2) {

                Currency::create([
                    'name' => $currencies[$j],
                    'value' => $currencies[$j+1],
                    'date' => $date
                ]);
            }
        }


    }



}
