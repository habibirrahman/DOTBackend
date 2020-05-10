<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = Http::withHeaders([
            'key' => '0df6d5bf733214af6c6644eb8717c92c'
        ])->get('https://api.rajaongkir.com/starter/city');
        
        $cities = [];

        // if url get is exsist -> 'cari'
        if ($request->has('cari')) {
            $cari= strtolower($request->cari);
            $data = $response['rajaongkir']['results'];
            foreach ($data as $d){
                $temp = [];
                if (strpos(strtolower($d['city_name']), $cari) !== false) {
                    $temp['city_id'] = $d['city_id'];
                    $temp['province_id'] = $d['province_id'];
                    $temp['province'] = $d['province'];
                    $temp['type'] = $d['type'];
                    $temp['city_name'] = $d['city_name'];
                    $temp['postal_code'] = $d['postal_code'];
                    array_push($cities, $temp);
                } elseif (strpos(strtolower($d['province']), $cari) !== false) {
                    $temp['city_id'] = $d['city_id'];
                    $temp['province_id'] = $d['province_id'];
                    $temp['province'] = $d['province'];
                    $temp['type'] = $d['type'];
                    $temp['city_name'] = $d['city_name'];
                    $temp['postal_code'] = $d['postal_code'];
                    array_push($cities, $temp);
                }
            }
        // if url get is not exsist
        } else {
            $cities = $response['rajaongkir']['results'];
        }
        return view('cities', ['cities' => $cities]);
    }

    public function search()
    {
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
}
