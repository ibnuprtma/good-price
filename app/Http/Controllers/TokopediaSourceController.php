<?php

namespace App\Http\Controllers;


use Sastrawi\Tokenizer\TokenizerFactory;
use Sastrawi\StopWordRemover\StopWordRemoverFactory;
use Sastrawi\Stemmer\StemmerFactory;
use Yajra\DataTables\Facades\DataTables;

class TokopediaSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tokopedia.index');
    }
    public function stemming($str)
    {
        // STEMMING

        $stemmerFactory = new StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();
        $output   = $stemmer->stem($str);

        return $output;
    }

    public function tokenizing($str)
    {
        // TOKEN
        $tokenizerFactory  = new TokenizerFactory();
        $tokenizer = $tokenizerFactory->createDefaultTokenizer();
        $tokens = $tokenizer->tokenize($str);
        $output = implode(" | ", $tokens);

        return $output;
    }

    public function caseFolding($str)
    {
        // CASE FOLDING
        $output   = strtolower($str);

        return $output;
    }

    public function stopWord($str)
    {
        // STOP WORD
        $stopWordRemoverFactory = new StopWordRemoverFactory();
        $stopword = $stopWordRemoverFactory->createStopWordRemover();
        $output   = $stopword->remove($str);

        return $output;
    }

    public function search($text, $method)
    {
        $keyword = str_replace(" ", "%20", $text);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://ace.tokopedia.com/search/product/v3?scheme=https&device=desktop&related=true&source=universe&st=product&rows=50&q=' . $keyword,
            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);

        $products = $response['data']['products'];

        $data = array();

        foreach ($products as $key) {
            $x['image'] = $key['image_url_700'];
            $x['price'] = $key['price_int'];
            $x['rating'] = $key['rating'];

            if ($method == 'tokenizing') {
                $x['name'] = $this->tokenizing($key['name']);
            } elseif ($method == 'stemming') {
                $x['name'] = $this->stemming($key['name']);
            } elseif ($method == 'case_folding') {
                $x['name'] = $this->caseFolding($key['name']);
            } elseif ($method == 'stopword') {
                $x['name'] = $this->stopWord($key['name']);
            } else {
                $x['name'] = $key['name'];
            }

            array_push($data, $x);
        }

        return DataTables::of($data)
            ->make(true);
    }
}
