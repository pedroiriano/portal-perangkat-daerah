<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ServicesController extends Controller
{
    public function simpatik()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false) 
            $response = curl_error($ch);
        curl_close($ch);
        $simpatik = json_decode($response, TRUE);
        
        return view('pages.services.simpatik', compact('simpatik'));
    }

    public function helpdesk()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false) 
            $response = curl_error($ch);
        curl_close($ch);
        $helpdesk = json_decode($response, TRUE);

        return view('pages.services.helpdesk', compact('helpdesk'));
    }

    public function regulation()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE);
        $response = curl_exec($ch);
        if ($response === false) 
            $response = curl_error($ch);
        curl_close($ch);
        $regulation = json_decode($response, TRUE);

        
        return view('pages.services.regulation', compact('regulation'));
    }
}
