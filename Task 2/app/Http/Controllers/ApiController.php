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
        // set up api base url and api key
        $response = Http::withHeaders([
            'key' => '0df6d5bf733214af6c6644eb8717c92c'
        ])->get('https://api.rajaongkir.com/starter/city');

        // selection data for key
        $cities = [];
        if ($request->has('key')) {
            $key = strtolower($request->cari);
            $data = $response['rajaongkir']['results'];
            foreach ($data as $d) {
                $temp = [];

                // selection for city_name
                if (strpos(strtolower($d['city_name']), $key) !== false) {
                    $temp['city_id'] = $d['city_id'];
                    $temp['province_id'] = $d['province_id'];
                    $temp['province'] = $d['province'];
                    $temp['type'] = $d['type'];
                    $temp['city_name'] = $d['city_name'];
                    $temp['postal_code'] = $d['postal_code'];
                    array_push($cities, $temp);

                    // selection for province
                } elseif (strpos(strtolower($d['province']), $key) !== false) {
                    $temp['city_id'] = $d['city_id'];
                    $temp['province_id'] = $d['province_id'];
                    $temp['province'] = $d['province'];
                    $temp['type'] = $d['type'];
                    $temp['city_name'] = $d['city_name'];
                    $temp['postal_code'] = $d['postal_code'];
                    array_push($cities, $temp);

                    // selection for postal_code
                } elseif (strpos(strtolower($d['postal_code']), $key) !== false) {
                    $temp['city_id'] = $d['city_id'];
                    $temp['province_id'] = $d['province_id'];
                    $temp['province'] = $d['province'];
                    $temp['type'] = $d['type'];
                    $temp['city_name'] = $d['city_name'];
                    $temp['postal_code'] = $d['postal_code'];
                    array_push($cities, $temp);
                }
            }

            // no selection - all data
        } else {
            $cities = $response['rajaongkir']['results'];
        }
        return view('cities', ['cities' => $cities]);
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
