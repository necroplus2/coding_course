<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 60;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name', 'MyValue', $minutes));
        return $response;
        // dd( $response );
    }


    public function getCookie(Request $request){
        $value = $request->cookie('name');
        dd( $value );
    }
  }
