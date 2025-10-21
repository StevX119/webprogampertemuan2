<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class temanController extends Controller
{
        public function index(){
            $dt = [
                [
                'idbuku'=>2,
                'namateman'=>'Steven Bliah',
                'alamat'=>'Jl Terusan Sulfat No 86A',
                'kota'=>'Batu',
                'telp'=>'08129384714',
                'wa'=>'09782919874',
                ],

            ];
            return view('teman',compact('dt') );
        }
}

