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

}