<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApi extends Controller
{
    public function index(){
        $response = Http::withHeaders([
            'key' => '0df6d5bf733214af6c6644eb8717c92c'
        ])->get('https://api.rajaongkir.com/starter/city');
        return $response['rajaongkir']['results'];
    }
}
