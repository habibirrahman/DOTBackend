# DOTBackend
Task #1 and Task #2

# Task 1
``` php
$arr = [5, 5, 1, 6, 4, 3];
rsort($arr);

// get second largest element
$large_2 = 0;
foreach ($arr as $val) {
    if ($arr[0] > $val) {
        $large_2 = $val;
        break;
    }
}
print("output: ".$large_2);
```

# Task 2 = Get API RajaOngkir for Laravel

**instalation**
-> app/Http/Controller/CitiesController.php
```php
$response = Http::withHeaders([
            'key' => 'fill_with_api_key'
        ])->get('fill_with_api_base_url');
```

**to use**
```php
public function index(Request $request)
{
    // set up api base url and api key
    $response = Http::withHeaders([
        'key' => '0df6d5bf733214af6c6644eb8717c92c'
    ])->get('https://api.rajaongkir.com/starter/city');
    
    // selection data for key
    $cities = [];
    if ($request->has('key')) {
        $key= strtolower($request->cari);
        $data = $response['rajaongkir']['results'];
        foreach ($data as $d){
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
```
