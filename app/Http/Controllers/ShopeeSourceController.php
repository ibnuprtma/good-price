<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sastrawi\Stemmer\StemmerFactory;
use Sastrawi\Tokenizer\TokenizerFactory;
use Sastrawi\Stemmer\StopWordRemoverFactory;

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


    public function stemming()
    {
        // STEMMING

        $stemmerFactory = new StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        $sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
        $output   = $stemmer->stem($sentence);
        
        dd($output);
    }

    public function token()
	{
       
        // TOKEN
       
        $tokenizerFactory  = new TokenizerFactory();
        $tokenizer = $tokenizerFactory->createDefaultTokenizer();

        $strArray = 'Saya sedang belajar NLP Bahasa Indonesia.';

            $tokens = $tokenizer->tokenize($strArray);
            $output = implode(" | ",$tokens);
        
        dd($output);
        
    }

    public function case()
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




}
