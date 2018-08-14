<?php

namespace App\Http\Controllers\Frontend;

use App\Ayarlar;
use App\Hakkimizda;

class HomeGetController extends HomeController
{
    public function get_index(){
        $ayarlar = Ayarlar::where('id',1)->select('mail', 'adres', 'il', 'ilce', 'tel', 'url', 'facebook', 'twitter', 'instagram', 'google')->first();
        return view('frontend.index')->with('ayarlar',$ayarlar);
    }
    public function get_index_yonlendir(){
        return redirect('/');
    }
    public function get_iletisim(){
        $ayarlar = Ayarlar::where('id',1)->select()->first();
        return view('frontend.iletisim')->with('ayarlar',$ayarlar);
    }
    public function get_hakkimizda(){
        $hakkimizda = Hakkimizda::where('id',1)->select()->first();
        $ayarlar = Ayarlar::where('id',1)->select()->first();
        return view('frontend.hakkimizda')->with('hakkimizda',$hakkimizda)->with('ayarlar',$ayarlar);
    }
}
