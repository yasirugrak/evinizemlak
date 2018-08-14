<?php

namespace App\Http\Controllers\Backend;

use App\Hakkimizda;
use Illuminate\Http\Request;
use App\Ayarlar;
use Image;
use Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminPostController extends YonetimController
{
    /**
     * @param Request $request
     */
    public function post_ayarlar(Request $request){

        if (isset($request->logo)){

            $validator=Validator::make($request->all(),[
                'logo' => 'mimes:jpg,jpeg,png,gif',
            ]);
            if ($validator->fails()){
                return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Yüklediğiniz logo uzantısı jpg,jpeg,png,gif olmalıdır.']);

            }else{

                $logo=Input::file('logo');
                $logo_uzanti=$logo->getClientOriginalExtension();
                $logo_isim = 'logo.' . $logo_uzanti;
                Storage::disk('uploads')->makeDirectory('img');
                Image::make($logo->getRealPath())->resize(300,300)->save('uploads/img/'.$logo_isim);
            }
        }
        try{
            unset($request['_token']);
            if (isset($request->logo)){
                unset($request['eski_logo']);
                Ayarlar::where('id',1)->update($request->all());
                Ayarlar::where('id',1)->update(['logo'=>$logo_isim]);

            }else{
                $eski_logo = $request->eski_logo;
                unset($request['eski_logo']);
                Ayarlar::where('id',1)->update($request->all());
                Ayarlar::where('id',1)->update(['logo'=>$eski_logo]);

            }
            return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Ayarlar başarılı bir şekilde kaydedildi.']);
        }catch (\Exception $e){
            return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Ayarlar kaydedilirken hata oluştu. HATA: '.$e->getMessage()]);
        }


    }

    public function post_hakkimizda(Request $request){
        try{
            unset($request['_token']);
            Hakkimizda::where('id',1)->update($request->all());
            return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Başarılı bir şekilde kaydedildi.']);
        }catch (\Exception $e){
            return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Kaydedilirken hata oluştu. HATA: '.$e->getMessage()]);
        }
    }
}
