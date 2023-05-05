<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawan extends Controller
{
    Protected $client; 
   
    
        // buat konstruktor
        function __construct()
        {
            $this->client = new \GuzzleHttp\Client();
        }
        function index()
        {
            // echo "Ini halaman Home";
            // echo env("API_URL");

            // buat URL (service "GET" dari server
            $url = env("API_URL"). "view";
            // Ambil service "GET" dari server
            $request = $this->client->get($url);
            // Tampilkan hasil
            $response = $request->getBody();
        
            // $data = json_decode($response) ->karyawan;
            // echo $data;
            //foreach(json_code($response)->karyawan as$data)
            //{
            //    echo $data->nama_karyawan."<br>";
            // }
            
            $data["result"] = json_decode($response) ->karyawan;
            // panggil view "vw_karyawan"
            return view("vw_karyawan",$data);
        }


    }

