<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    public function index()
{
    $client = new Client();
    
    $website = $client->request('GET', 'https://ift23.mapyourshow.com/8_0/explore/featured-exhibitors.cfm');
//     dd($website->html());   
//     // Select the link
// $link = $website->selectLink('Nekta Group')->link();

// // Click the link
// $result = $client->click($link);
// dd($result);
    return $website->html();
}
}
