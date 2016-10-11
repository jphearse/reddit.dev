<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function uppercase($str)
    {
	    $data['str'] = $str;
	    $data['upper'] = strtoupper($str);
	    return view('uppercase') -> with($data);
    }

    public function increment($num)
    {
    	return $num + 1;
    }

    public function rolldice($guess)
    {
    	$dice['random'] = 0;
	    $dice['guess'] = $guess;
	    $dice['correct'] = ($dice['random'] == $dice['guess']);
	    return view('roll-dice') -> with($dice);
    }

}