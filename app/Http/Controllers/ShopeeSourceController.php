<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\Tokenizer\TokenizerFactory;
use Sastrawi\Stemmer\StopWordRemoverFactory;
use Yajra\DataTables\Facades\DataTables;

class ShopeeSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function stemming($sentence)
    {
        // STEMMING

        $stemmerFactory = new StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();
        $output   = $stemmer->stem($sentence);

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

    public function
    case()
    {

        // CASE FOLDING

        $strArray = 'Saya Syuka KamaamuS';

        $output   = strtolower($strArray);

        dd($output);
    }


    // public function stop()
    // {

    //     $female = female::select('review')->get();
    //     $stopWordRemoverFactory = new StopWordRemoverFactory();
    //     $stopword = $stopWordRemoverFactory->createStopWordRemover();

    //     $strArray = array();

    //     foreach ($female as $key) {
    //         $str = $key['review'];
    //         $output   = $stopword->remove($str);
    //         array_push($strArray, $output);
    //     }
    //     //Perekonomian Indonesia sedang pertumbuhan membanggakan
    //     return view('fstopword',['output'=>$strArray]);


    // }

    public function search($text, $method)
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

        $items = $response['items'];
        $data = array();

        foreach ($items as $key) {
            if ($key['ads_keyword'] == null) {
                $curl2 = curl_init();
                curl_setopt_array($curl2, array(
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => 'https://shopee.co.id/api/v2/item/get?itemid=' . $key['itemid'] . '&shopid=' . $key['shopid'],
                    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
                ));
                $response2 = curl_exec($curl2);
                $response2 = json_decode($response2, TRUE);
                $item = $response2['item'];
                $x['image'] = $item['image'];
                $x['name'] = $item['name'];
                $x['price'] = $item['price'];
                $x['historical_sold'] = $item['historical_sold'];
                $x['rating'] = $item['item_rating']['rating_star'];

                if ($method == 'tokenizing') {
                    $x['description'] = $this->tokenizing($item['description']);
                } elseif ($method == 'stemming') {
                    $x['description'] = $this->stemming($item['description']);
                } else {
                    $x['description'] = $item['description'];
                }
                array_push($data, $x);
            }
        }

        return DataTables::of($data)
            ->make(true);;
    }
}
