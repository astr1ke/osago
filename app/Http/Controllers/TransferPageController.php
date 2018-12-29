<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferPageController extends Controller
{
   public function TransferPage(){
       function get_data($url)
       {
           $ch = curl_init();
           $timeout = 5;
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
           $data = curl_exec($ch);
           curl_close($ch);
           return $data;
       }

//The Usage
       $returned_content = get_data('http://online.verypdf.com/api/?apikey=XXXXXXXXXXXXX&app=html2image&infile=http://www.verypdf.com&outfile=verypdf.jpg');
       echo $returned_content;
   }
}
