<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopeeController extends Controller
{
    public function search($text)
    {
        $keyword = str_replace(" ", "%20", $text);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://shopee.co.id/api/v2/search_items/?by=relevancy&keyword=' . $keyword . '&limit=20&newest=0&order=desc&page_type=search&version=2',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);

        return response()->json($response);
    }
}
